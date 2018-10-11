<?php

/**
 * @param template $template
 * @param string $query_where
 * @param int    $query_limit
 */
function nws_render(&$template, $query_where = '', $query_limit = 20) {
  /**
   * @var classConfig $config
   */
  global $config, $user;

  $announce_list = doquery(
    "SELECT a.*, UNIX_TIMESTAMP(`tsTimeStamp`) AS unix_time, u.authlevel, s.*
    FROM
      {{announce}} AS a
      LEFT JOIN {{survey}} AS s ON s.survey_announce_id = a.idAnnounce
      LEFT JOIN {{users}} AS u ON u.id = a.user_id
    {$query_where}
    ORDER BY `tsTimeStamp` DESC, idAnnounce" .
    ($query_limit ? " LIMIT {$query_limit}" : ''));
  $template->assign_var('NEWS_COUNT', db_num_rows($announce_list));

  $users = array();
  while($announce = db_fetch($announce_list)) {
    if($announce['user_id'] && !isset($users[$announce['user_id']])) {
      $users[$announce['user_id']] = db_user_by_id($announce['user_id']);
    }

    $survey_vote = array('survey_vote_id' => 1);
    $survey_complete = strtotime($announce['survey_until']) < SN_TIME_NOW;

    if($announce['survey_id'] && !empty($user['id'])) {
      $survey_vote = !$survey_complete ? $survey_vote = doquery("SELECT `survey_vote_id` FROM `{{survey_votes}}` WHERE survey_parent_id = {$announce['survey_id']} AND survey_vote_user_id = {$user['id']} LIMIT 1;", true) : array();
    }

    $announce_exploded = explode("<br /><br />", classSupernova::$gc->bbCodeParser->expandBbCode($announce['strAnnounce'], intval($announce['authlevel'])));

    $template->assign_block_vars('announces', array(
      'ID'              => $announce['idAnnounce'],
      'TIME'            => date(FMT_DATE_TIME, $announce['unix_time'] + SN_CLIENT_TIME_DIFF),
      'ANNOUNCE'        => classSupernova::$gc->bbCodeParser->expandBbCode($announce['strAnnounce'], intval($announce['authlevel'])),
      'DETAIL_URL'      => $announce['detail_url'],
      'USER_NAME'       =>
        isset($users[$announce['user_id']]) && $users[$announce['user_id']] ? player_nick_render_to_html($users[$announce['user_id']], array('color' => true)):
        js_safe_string($announce['user_name']),
      'NEW'             => $announce['unix_time'] + $config->game_news_actual >= SN_TIME_NOW,
      'FUTURE'          => $announce['unix_time'] > SN_TIME_NOW,
      'SURVEY_ID'       => $announce['survey_id'],
      'SURVEY_TEXT'     => $announce['survey_question'],
      'SURVEY_CAN_VOTE' => empty($survey_vote) && !$survey_complete,
      'SURVEY_COMPLETE' => $survey_complete,
      'SURVEY_UNTIL'    => $announce['survey_until'],
    ));

    foreach($announce_exploded as $announce_paragraph) {
      $template->assign_block_vars('announces.paragraph', array(
        'TEXT' => $announce_paragraph,
      ));
    }

    if($announce['survey_id']) {
      $survey_query = doquery(
        "SELECT survey_answer_text AS `TEXT`, count(DISTINCT survey_vote_id) AS `VOTES`
          FROM `{{survey_answers}}` AS sa
            LEFT JOIN `{{survey_votes}}` AS sv ON sv.survey_parent_answer_id = sa.survey_answer_id
          WHERE sa.survey_parent_id = {$announce['survey_id']}
          GROUP BY survey_answer_id
          ORDER BY survey_answer_id;"
      );
      $survey_vote_result = array();
      $total_votes = 0;
      while($row = db_fetch($survey_query)) {
        $survey_vote_result[] = $row;
        $total_votes += $row['VOTES'];
      }

      if(empty($survey_vote) && !$survey_complete) {
        // Can vote
        $survey_query = doquery("SELECT * FROM {{survey_answers}} WHERE survey_parent_id  = {$announce['survey_id']} ORDER BY survey_answer_id;");
        while($row = db_fetch($survey_query)) {
          $template->assign_block_vars('announces.survey_answers', array(
            'ID' => $row['survey_answer_id'],
            'TEXT' => $row['survey_answer_text'],
          ));
        }
      } else {
        // Show result
        foreach($survey_vote_result as &$vote_result) {
          $vote_percent = $total_votes ? $vote_result['VOTES'] / $total_votes * 100 : 0;
          $vote_result['PERCENT'] = $vote_percent;
          $vote_result['PERCENT_TEXT'] = round($vote_percent, 1);
          $vote_result['VOTES'] = pretty_number($vote_result['VOTES']);
          $template->assign_block_vars('announces.survey_votes', $vote_result);
        }
      }
      // Dirty hack
      $template->assign_block_vars('announces.total_votes', array(
        'TOTAL_VOTES' => $total_votes,
      ));
    }
  }
}

function nws_mark_read(&$user) {
  if(isset($user['id'])) {
    db_user_set_by_id($user['id'], '`news_lastread` = ' . SN_TIME_NOW);
    $user['news_lastread'] = SN_TIME_NOW;
  }
  return true;
}

function survey_vote(&$user) {
  if(empty($user['id'])) {
    return true;
  }

  sn_db_transaction_start();
  $survey_id = sys_get_param_id('survey_id');
  $is_voted = doquery("SELECT `survey_vote_id` FROM `{{survey_votes}}` WHERE survey_parent_id = {$survey_id} AND survey_vote_user_id = {$user['id']} FOR UPDATE;", true);
  if(empty($is_voted)) {
    $survey_vote_id = sys_get_param_id('survey_vote');
    $is_answer_exists = doquery("SELECT `survey_answer_id` FROM `{{survey_answers}}` WHERE survey_parent_id = {$survey_id} AND survey_answer_id = {$survey_vote_id};", true);
    if(!empty($is_answer_exists)) {
      $user_name_safe = db_escape($user['username']);
      doquery("INSERT INTO {{survey_votes}} SET `survey_parent_id` = {$survey_id}, `survey_parent_answer_id` = {$survey_vote_id}, `survey_vote_user_id` = {$user['id']}, `survey_vote_user_name` = '{$user_name_safe}';");
    }
  }
  sn_db_transaction_commit();

  return true;
}
