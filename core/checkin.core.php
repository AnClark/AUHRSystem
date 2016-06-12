<?php
	if($_SERVER["REQUEST_METHOD"] != "POST")
		die("<h1>非法请求！</h1>");

	require("connect.php");
	
	mysql_select_db(DB_HR, $con);
	
	$sql = "INSERT INTO " . TBL_HR . "(
		ID,
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
		ArrivalTime,
		Mobile,
		QQ
		)
		VALUES (
		$_POST['ID'],
		$_POST['Name'].
		$_POST['Gender'],
		$_POST['Birthday'],
		$_POST['Faculty'],
		$_POST['Class'],
		$_POST['Grade'],
		$_POST['Dormbuild'],
		$_POST['Hometown'],
		$_POST['Department'],
		$_POST['GroupInDepart'],
		$_POST['Occupation'],
		$_POST['AUID'],
		$_POST['ArrivalTime'],
		$_POST['Mobile'],
		$_POST['QQ']
		)";
	
	if(mysql_query($sql)){
		
	}
	
?>