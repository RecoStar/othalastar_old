<?php

/*
#############################################################################
#  Filename: alliance.mo
#  Project: SuperNova.WS
#  Website: http://www.supernova.ws
#  Description: Massive Multiplayer Online Browser Space Startegy Game
#
#  Copyright © 2009 Gorlum for Project "SuperNova.WS"
#  Copyright © 2009 MSW
#############################################################################
*/

/**
*
* @package language
* @system [Russian]
* @version 42a28.2
*
*/

/**
* DO NOT CHANGE
*/

if (!defined('INSIDE')) die();


$a_lang_array = (array(
  'ali_dip_title' => 'Дипломатия',
  'ali_dip_negotiate' => 'Переговоры',
  'ali_adm_msg_subject' => 'Рассылка Альянса',
  'ali_dip_offers_your' => 'Ваши предложения',
  'ali_dip_offers_to_you' => 'Предложения вам',
  'ali_dip_offer_none' => 'Нет предложений',
  'ali_dip_offer' => 'Предложение',
  'ali_dip_offers' => 'Предложения',
  'ali_dip_offer_new' => 'Вступить в переговоры',
  'ali_dip_offer_to_ally' => 'Предложить Альянсу',
  'ali_dip_offer_make' => 'Начать переговоры',
  'ali_dip_offer_answer' => 'Альянс отклонил ваше предложение',
  'ali_dip_offer_deny_reason' => 'Вы отклонили предложение',
  'ali_dip_offer_to' => 'Альянсу',
  'ali_dip_offer_from' => 'От Альянса',
  'ali_dip_offer_deny' => 'Отклонить предложение',
  'ali_dip_offer_accept' => 'Принять предложение',
  'ali_dip_offer_delete' => 'Отозвать предложение',
  'ali_dip_err_no_ally' => 'Нет такого Альянса',
  'ali_dip_err_same_ally' => 'Нельзя проводить переговоры со своим же Альянсом',
  'ali_dip_err_wrong_offer' => 'Нельзя сделать ТАКОЕ предложение',
  'ali_dip_err_offer_none' => 'Нет такого предложения',
  'ali_dip_err_offer_same' => 'Вы уже находитесь с этим Альянсом в отношениях %s',
  'ali_dip_err_offer_alien' => 'Это предложение делали не вам!',
  'ali_dip_err_offer_accept_own' => 'Нельзя принять за другого свое предложение!',
  'ali_dip_err_offer_empty' => 'Не указано предложение',
  'ali_dip_relation_none' => 'Нет отношений',
  'ali_dip_relation_change' => 'Мы приняли предложение Альянса',
  'ali_dip_relation_change_to' => 'изменить отношения на',
  'ali_dip_relation_accept' => 'принял наше предложение изменить отношения на',
  'ali_dip_relations' => array(
    ALLY_DIPLOMACY_NEUTRAL => 'Нейтралитет',
    ALLY_DIPLOMACY_WAR => 'Война',
    ALLY_DIPLOMACY_PEACE => 'Мир',
    ALLY_DIPLOMACY_CONFEDERATION => 'Конфедерация',
    ALLY_DIPLOMACY_FEDERATION => 'Федерация',
    ALLY_DIPLOMACY_UNION => 'Союз',
    ALLY_DIPLOMACY_MASTER => 'Ведущий',
    ALLY_DIPLOMACY_SLAVE => 'Ведомый',
  ),

  'ali_lessThen15min' => '&lt; 15 м',
  'ali_confirm' => 'Подтвердить',
  'ali_confirmation' => 'Подтверждение',
  'ali_adm_disband' => 'Распустить Альянс',
  'ali_adm_options' => 'Настройки Альянса',
  'ali_adm_transfer' => 'Передать Альянс игроку',
  'ali_adm_return' => 'Вернуться к управлению Альянсом',
  'ali_adm_kick' => 'Исключить игрока из Альянса',
  'ali_adm_kick_confirm' => 'Вы уверенны что хотите исключить игрока из Альнса?',
  'ali_adm_requests' => 'Заявки в альянс',
  'ali_adm_newLeader' => 'ВЫБЕРИТЕ ИГРОКА',
  'ali_adm_lastRank' => 'Нельзя удалить единственное звание!',
  'ali_adm_rights_title' => 'Настройка прав доступа',
  'ali_adm_rights_rank_new' => 'Новое звание',
  'ali_adm_rights_rank_delete' => 'Удалить звание',
  'ali_adm_rights_rank_none' => 'Нет званий',
  'ali_adm_rights_rank_name' => 'Звание',
  'ali_adm_rights_mass_mail' => 'Сообщение всему Альянсу',
  'ali_adm_rights_view_online' => 'Просмотр on-line статуса участников',
  'ali_adm_rights_helper' => 'Помощник главы (Для передачи необходим ранг основателя)',
  'ali_adm_rights_legend' => 'Права Альянса',
  'ali_leaderRank' => 'Глава Альянса',
  'ali_defaultRankName' => 'Новичок',
  'ali_make_title' => 'Создание Альянса',
  'ali_make_tag_length' => '(от 3 до 8 символов)',
  'ali_make_name_length' => '(до 35 символов)',
  'ali_make_confirm' => 'Создать Альянс',
  'ali_req_cancel' => 'Удалить заявку',
  'ali_req_candidate' => 'Кандидат',
  'ali_req_characters' => 'символов',
  'ali_req_date' => 'Дата подачи заявки',
  'ali_req_deny_msg' => 'Ваша заявка на вступление в Альянс [%s] была отклонена.<br>Причина отказа: "%s".<br>Вы можете удалить заявку и попробовать позже или вступить в другой Альянс.',
  'ali_req_deny_admin' => '<font color=red>Запрос уже отклонен</font>. Однако, пока пользователь не удалил запрос на вступление, вы можете изменить свое решение',
  'ali_req_deny_reason' => 'Ваш запрос на вступление отклонен',
  'ali_req_emptyList' => 'Нет заявок для рассмотрения',
  'ali_req_inAlly' => 'Вы уже являетесь участником Альянса.',
  'ali_req_make' => 'Подать заявку',
  'ali_req_not_allowed' => 'НЕТ ПРИЕМА',
  'ali_req_otherRequest' => 'Вы уже подали заявку в другой Альянс.',
  'ali_req_template' => 'Прошу принять меня в ваш Альянс',
  'ali_req_text' => 'Текст заявки',
  'ali_req_title' => 'Подача заявки в Альянс',
  'ali_req_waiting' => 'Ваша заявка на вступление в Альянс [%s] будет расмотрена главой Альянса.<br>Вас оповестят о принятом решении.',
  'ali_req_check' => 'Управление заявками',
  'ali_req_requestCount' => 'Заявок в альянс',
  'ali_req_admin_title' => 'Обзор заявок',
  'ali_req_accept' => 'Принять заявку',
  'ali_req_deny' => 'Отклонить заявку',
  'ali_search_title' => 'Поиск Альянса',
  'ali_search_action' => 'Искать',
  'ali_search_tip' => 'Поиск можно производить по части имени или обозначения Альянса',
  'ali_search_result_none' => 'Не найдено Альянсов, соответствующих вашему запросу.',
  'ali_search_result_tip' => 'Кликните на имени или обозначении Альянса, что бы посмотреть информацию о нем.<br>Кликните "Вступить", что бы послать запрос о вступлении.',
  'ali_sys_name' => 'Название',
  'ali_sys_tag' => 'Обозначение',
  'ali_sys_members' => 'Участники',
  'ali_sys_notFound' => 'Такой Альянс не существует',
  'ali_sys_memberName' => 'Имя',
  'ali_sys_points' => 'Очки',
  'ali_sys_lastActive' => 'Активность',
  'ali_sys_totalMembers' => 'Всего',
  'ali_sys_clear' => 'Сбросить',
  'ali_sys_main_page' => 'Вернуться на главную страницу Альянса',
  'ali_sys_joined' => 'Дата вступления',
  'ali_frm_write' => 'Писать на форум',
  'ali_info_title' => 'Информация об Альянсе',
  'ali_info_internal' => 'Внутрення информация',
  'ali_info_leave' => 'Покинуть Альянс',
  'ali_info_bonus_rate' => 'Коэфициент бонуса',
  'Name' => 'Название',
  'Tag' => 'Обозначение',
  'Members' => 'Участники',
  'Accept_cand' => 'Принять',
  'alliance' => 'Альянс',
  'alliances' => 'Альянсы',
  'Alliance_information' => 'Информация об Альянсе',
  'Alliance_logo' => 'Логотип Альянса',
  'alliance_tag' => 'Обозначение Альянса',
  'Allow_request' => 'Принимать заявки',
  'allyance_name' => 'Имя Альянса',
  'ally_admin' => 'Управление Альянсом',
  'ally_been_maked' => 'Альянс %s успешно создан',
  'ally_description' => 'Описание Альянса',
  'ally_dissolve' => 'Удаление Альянса',
  'Ally_info_1' => 'Информация об Альянсе',
  'ally_maked' => '%s создан',
  'Ally_nodescription' => 'У Альянса нет описания',
  'ally_notexist' => 'Альянс больше не существует',
  'Ally_not_exist' => 'К сожалению нет никакой информации о этом Альянсе',
  'Ally_transfer' => 'Передать Альянс',
  'All_players' => 'Все игроки',
  'always_exist' => '%s уже существует',
  'Aplication_acepted' => 'Вы приняты',
  'Aplication_hello' => 'Приветствую<br>Альянс :',
  'Aplication_rejected' => 'Ваша заявка на вступление в альянс была отклонена.<br>Причина:<br>',
  'apply_cantbeadded' => 'Запрос не удался, попробуйте ещё раз!',
  'apply_registered' => 'Ваша заявка была отправлена.<br><br><a href=alliance.php>Назад</a>',
  'Back' => 'Назад',
  'Canceld_req_text' => 'Вы отменили заявку на вступление в [%s]',
  'Change' => 'Изменить',
  'ch_allyname' => 'Изменить имя Альянса',
  'ch_allytag' => 'Изменить обозначение Альянса',
  'Circular_message' => 'Сообщение Альянсу',
  'Circular_sended' => 'Сообщение успешно отправлено',
  'Clear' => 'Очистить',
  'Click_writerequest' => 'Нажмите здесь чтобы написать заявку',
  'Continue' => 'продолжить',
  'Delete_apply' => 'Отклонить заявку',
  'Denied_access' => 'Доступ запрещён!',
  'Destiny' => 'Получатель',
  'Exit_of_this_alliance' => 'Выйти из Альянса',
  'External_text' => 'Внешний текст',
  'Founder' => 'Создатель',
  'Founder_name' => 'Звание основателя',
  'Function' => 'Функция',
  'Go_out_welldone' => 'Вы успешно покинули Альянс',
  'have_not_name' => 'Введите имя Альянса',
  'have_not_tag' => 'Введите обозначение Альянса',
  'Help' => 'Помощь',
  'Inactive' => 'Неактивный',
  'Inner_section' => 'Внутренний текст',
  'Internal_text' => 'Внутренний текст',
  'knowed_allys' => 'Существующие Альянсы',
  'laws_config' => 'Настройка прав доступа',
  'Main_Page' => 'Домашняя страница',
  'make_alliance' => 'Создание Альянса',
  'make_alliance_owner' => 'Создать Альянс',
  'max' => 'макс.',
  'member' => 'Участник',
  'memberlist_view' => 'Просмотр списка участников',
  'members' => 'Участники',
  'members_admin' => 'Управление участниками',
  'Members_list' => 'Список участников',
  'members_who_recived_message' => 'Следующие члены Альянса получили сообщение:',
  'Message' => 'Сообщение',
  'Motive_optional' => 'Причина (опционально)',
  'New_name' => 'Новое обозначение',
  'New_tag' => 'Новый Тэг',
  'not_allow_request' => 'Отклонять заявки',
  'Novate' => 'Новичок',
  'Number' => '№',
  'Off' => 'Off-line',
  'Ok' => 'Ок',
  'On' => 'On-line',
  'Online' => 'Статус',
  'Position' => 'Статус',
  'Public_text_of_alliance' => 'Внешний текст',
  'Range' => 'Звание',
  'Reject_cand' => 'Отклонить',
  'Reload' => 'Пример',
  'Repel' => 'Repel',
  'requests_view' => 'Просмотр заявок',
  'Request_answer' => 'Запрос отклонен',
  'Request_date' => 'Дата подачи заявки',
  'Request_text' => 'Текст заявки',
  's' => '[N/A]',
  'Search' => 'Поиск',
  'searchd_ally_avail' => 'Найдены Альянсы:',
  'search_alliance' => 'Поиск',
  'Send' => 'Отправить',
  'Send_Apply' => 'Принять заявку',
  'Send_circular_mail' => 'Послать сообщение всему Альянсу',
  'Set_range' => 'Изменение ранга',
  'Show_of_request_text' => 'Текст заявки',
  'Texts' => 'Редактирование текста',
  'Text_mail' => 'Отправка сообщения всему Альянсу',
  'top10alliance' => 'Топ 10 Альянсов',
  'transfer' => 'Передача',
  'transfer_ally' => 'Передача альянса',
  'transfer_to' => 'Передать альянс игроку:',
  'Want_go_out' => 'Вы действительно хотите покинуть Альянс ?',
  'write_apply' => 'Подать заявку',
  'your_alliance' => 'Ваш Альянс',
  'your_apply' => 'Ваша заявка',
  'ali_info_leave_success' => 'Вы покинули Альянс [%s].<br />Теперь вы можете создать свой собственный Альянс или подать заявку на вступление в другой Альянс<br />',

  'opt_avatar' => 'Логотип Альянса',
  'opt_avatar_search' => 'Искать в Google',
  'opt_avatar_remove' => 'Удалить логотип',
  'opt_upload' => 'Загрузить',

  'opt_msg_avatar_removed' => 'Логотип удален',
  'opt_msg_avatar_uploaded' => 'Логотип изменен успешно',
  'opt_msg_avatar_error_delete' => 'Ошибка удаления файла логотипа. Обратитесь к Администрации сервера',
  'opt_msg_avatar_error_writing' => 'Ошибка сохранения файла логотипа. Обратитесь к Администрации сервера',
  'opt_msg_avatar_error_upload' => 'Ошибка загрузки изображения %1. Обратитесь к Администрации сервера',
  'opt_msg_avatar_error_unsupported' => 'Формат загруженного изображения не поддерживается. Поддерживаются только файлы JPG, GIF, PNG размером до 200КБ',

  'ali_admin_mercenaries' => 'Наемники Альянса',
  'ali_admin_plans' => 'Чертежи Альянса',
  'ali_admin_techs' => 'Исследования Альянса',
  'ali_admin_market_trader' => 'Обмен ресурсов на чёрном рынке',

  'ali_res_player_bonus' => 'Бонус участника',
  'ali_res_transfer' => 'Перевести',
  'ali_res_transfer_long' => 'Перевести на счет Альянса',
  'ali_res_no_resources' => 'У Альянса нет ресурсов',
  'ali_res_transfer_dm_log' => 'Участник \'%s\' перевел %d ТМ на счет Альянса [%s]',

  'ali_res_err_not_enough' => 'Не хватает ресурса %s!',
  'ali_res_err_wrong_unit' => 'На счет Альянса можно передавать только ресурсы!',

  'ali_res_alliance_bonus' => 'Бонусы Альянса',
  'ali_res_alliance_bonus_players' => 'Количество участников для получения бонуса',

  'ally_message_tag_exists' => 'Альянс с тэгом [%1$s] уже существует',
  'ally_message_name_exists' => 'Альянс с именем "%1$s" уже существует',

));