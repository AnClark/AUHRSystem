<?php
	/************		登录认证模块		************/
	if($_SERVER["REQUEST_METHOD"] != "POST")
		die("<h1>非法请求！</h1>");
	
	require('connect.php');
	
	mysql_select_db(DB_ADMINS, $con);
	
	$userid = $_POST['userid'];
	$password = $_POST['password'];
	$level = $_POST['level'];
	
	$password_encrypted = MD5(base64_encode($password));
	
	$sql = "select * from " . TBL_ADMINS . " where userid='$userid' and password='$password_encrypted' and level='$level'";
	
	$res = mysql_query($sql);
	$result = mysql_fetch_array($res);
	
	
 	if($result){
		session_start();
		$_SESSION['username'] = $result['username'];
		$_SESSION['userid'] = $userid;
		$_SESSION['userlevel'] = $level;
		//echo "<script> alert('登陆成功！'); location.href='../hrHome.php'; </script>";
		echo "<script> location.href='../hrHome.php'; </script>";
	}
	else{
		echo "<script> alert('登录失败，用户名、密码或用户级别错误！'); location.href='../login.html'; </script>";
	}
	 
?>

<html>
<body>

</body>
</html>