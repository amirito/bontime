<?php
//error_reporting(E_ALL);
//ini_set('display_errors', 1);
date_default_timezone_set('Asia/Tehran');

session_start();
ob_start();

if($_SERVER['SERVER_ADDR'] == '127.0.0.1' || $_SERVER['SERVER_ADDR'] == '::1'){
	define("LOCAL_MODE" , 1);
	}else{
	define("LOCAL_MODE" , 0);
}



##### Configs ######
if(LOCAL_MODE == 0){
	define('HOST_NAME','localhost');
	define('USER_NAME','bontime');
	define('PASSWORD','bontime1394');
	define('DB_NAME','bontime');
	$prefix = '';
}else if(LOCAL_MODE == 1){
	define('HOST_NAME','localhost');
	define('USER_NAME','root');
	define('PASSWORD','');
	define('DB_NAME','bontime');
	$prefix = '/bontime';
}


##### CONNECT TO DB ######
$connection = mysqli_connect(HOST_NAME,USER_NAME,PASSWORD,DB_NAME) or die('CONNECTION FAILED!!!');
mysqli_set_charset($connection,'utf8');


##### includes #####
include 'counter.php';
include 'jdf.php';
include 'messages/msg.php';