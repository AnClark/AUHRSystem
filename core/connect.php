<?php
/************		独立的数据库连接模块		************
	由其他模块通过require()函数来进行调用。
	$con：全局变量，数据库连接对象。require()本脚本之后，该变量始终在整个网页生命周期中生效。
************************************************************/
	$con = mysql_connect() 
		or die("连接数据库失败！<br>" . mysql_error());
		
	mysql_query("SET NAMES utf8", $con);
		
	global $con;

	define('DB_ADMINS','test_userinfo');
	define('DB_HR','test_userinfo');
	define('TBL_ADMINS','tbluserlist');
	define('TBL_HR','tblhr');
	
?>