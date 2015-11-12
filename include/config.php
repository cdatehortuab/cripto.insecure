<?php

define('PROJECT_NAME', 'cripto.insecure');
define('PATH_GLOBAL', $_SERVER['DOCUMENT_ROOT'].PROJECT_NAME.'/');
define('LINK_GLOBAL', ((empty($_SERVER['HTTPS']))? 'http://' : 'https://').
	$_SERVER['SERVER_NAME'].
	(($_SERVER['SERVER_PORT'] != '80' && $_SERVER['SERVER_PORT'] != 443)?
	':'.$_SERVER['SERVER_PORT'] : '').'/'.PROJECT_NAME.'/');

define('MYSQL_HOST', 'sql5.freemysqlhosting.net');
define('MYSQL_USER', 'sql596310');
define('MYSQL_PASS', 'eN2*iL7%');
define('MYSQL_DBNAME', 'sql596310');
define('MYSQL_PORT', 3306);

function autoload($class_name) {
	if(is_file(PATH_GLOBAL."classes/".$class_name.".php")) {
		include_once(PATH_GLOBAL."classes/".$class_name.".php");
	}
}
spl_autoload_register("autoload");

?>