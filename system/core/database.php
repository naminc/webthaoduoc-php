<?php
error_reporting(0);
date_default_timezone_set('Asia/Ho_Chi_Minh');
ini_set('max_execution_time', 0);
define('ERROR', 'ERROR!');
define('LOCALHOST', 'localhost');
define('USERNAME', 'root');
define('PASSWORD', '');
define('DATABASE', 'webthaoduoc');
define('LAYOUT', './system/views/layouts');
session_start();
require_once 'class.php'; 
$DB = new DB();
// require_once 'Setup_SQL.php';
require_once 'Function.php';  // các hàm cần thiết

?>