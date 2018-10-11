<?php
if(!defined("INSIDE")){ die("attemp hacking"); }

$dbsettings = array(
  'sn_driver'  => 'db_mysql_v5',    // db_mysql_v5 - MySQLi, db_mysql_v4 - simple mysql. You can write your driver
  "server"     => "localhost",      // MySQL server.
  "user"       => "northeas_SNUser", // Login MySQL server access.
  "pass"       => "Yournameis7!7", // MySQL server access password.
  "name"       => "northeas_SN",      // MySQL database name.
  "prefix"     => "sn_",            // Prefix for tables in the database and for xCache. USE DIFFERENT PREFIXES, IF A FEW SN COPIES WORK ON ONE SERVER !!!
  "secretword" => "Othala Star",      // Ключевое слово для создания Cookies. (Не забудьте изменить на своё!)
);

$game['prefix'] = $dbsettings['prefix'];
