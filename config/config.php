<?php

ini_set('display_errors', 1);

define('DSN', 'mysql:host=localhost;dbname=sns_php');
define('DB_USERNAME', 'dbuser');
define('DB_PASSWORD', 'aij71975');

require_once(__DIR__.'/../lib/functions.php');
require_once(__DIR__.'/autoload.php');

session_start();