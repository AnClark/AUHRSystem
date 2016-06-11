<?php
	/************		登录认证模块		************/
	if($_SERVER["REQUEST_METHOD"] != "POST")
		die("<h1>非法请求！</h1>");
	
	require('connect.php');
	
	mysql_select_db(DB_ADMINS, $con);
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	$level = $_POST['level'];
	
	$password_encrypted = base64_encode($password);
	
	$sql = "select * from " . TBL_ADMINS . " where username='$username' and password='$password_encrypted' and level='$level'";
	
	$res = mysql_query($sql);
	$checker = mysql_fetch_assoc($res);
	
 	if($checker){
		global $username;
		echo "<script> alert('登陆成功！'); location.href='../hrHome.html'; </script>";
	}
	else{
		echo "<script> alert('登录失败，用户名、密码或用户级别错误！'); location.href='../login.html'; </script>";
	}
	 
?>