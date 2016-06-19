<?php
/********************** 注销登录 **********************/
session_start();			//将会话还原回前台

//检验是否已登录
//如果已登录，就注销
if(isset($_SESSION['userid'])){
	unset($_SESSION['userid']);
	unset($_SESSION['username']);
	echo "<script> alert('注销登录成功！'); </script>";
	echo "<script> location.href = '../login.html'; </script>";
	exit;
}
//如果未登录，就退回用户登录界面
else{
    header("Location: ../login.html");
    exit();
}
?>
