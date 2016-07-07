<?php
/*********************	登录状态检测程序	*********************/

session_start();

//检测是否登录，若没登录则转向登录界面
if(!isset($_SESSION['userid'])){
    echo "<script> alert('你还未登录，请先登录后再使用！'); </script>";
    echo "<script> location.href = 'login.html'; </script>";

    //header("Location: login.html");
    exit();
}

$userid = $_SESSION['userid'];
$username = $_SESSION['username'];
$user_indicator_text = "你好,  " . $_SESSION['username'];

switch($_SESSION['userlevel']){
    case "user":
        $user_level_text = "普通用户";
        break;
    case "admin":
        $user_level_text = "高级用户";
        break;
}

?>