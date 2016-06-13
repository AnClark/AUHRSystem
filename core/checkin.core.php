<?php
	if($_SERVER["REQUEST_METHOD"] != "POST")
		die("<h1>非法请求！</h1>");

	require("connect.php");
	
	mysql_select_db(DB_HR, $con);
	
	$sql = "INSERT INTO " . TBL_HR . " (
		Name,
		Gender,
		Birthday,
		Faculty,
		Class,
		Grade,
		Dormbuild,
		Hometown,
		Department,
		GroupInDepart,
		Occupation,
		AUID,
		ArrivalTime
		)
		VALUES (
		'$_POST[Name]',
		'$_POST[Gender]',
		'$_POST[Birthday]',
		'$_POST[Faculty]',
		'$_POST[Class]',
		'$_POST[Grade]',
		'$_POST[Dormbuild]',
		'$_POST[Hometown]',
		'$_POST[Department]',
		'$_POST[GroupInDepart]',
		'$_POST[Occupation]',
		'$_POST[AUID]',
		'$_POST[ArrivalTime]'
		)";
	
	$sql = test_input($sql);
	
	try{
		if(mysql_query($sql)){
			echo "<script> alert('已录入数据'); </script>";
		}
		else{
			echo mysql_error();
			//echo "<script> alert('操作失败：$errmsg'); </script>";
			echo "<script> alert('操作失败'); </script>";
		}
	}
	catch(Exception $e){
		$errmsg = $e->getMessage;
		echo "<script> alert('出现错误：$errmsg'); </script>";
	}
	
	
/*********   检查函数，用于检查用户输入并摒弃无效字符  ************/	
	function test_input($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
?>