<!DOCTYPE html>
<html lang="en">
<head>
    <title>HRmanage</title>
    <meta charset="utf-8">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/hrHome.css" />
    <script src="main.js"></script>
	
	<script>
	/***********	表单验证&提交之一体代码  **********/
	function validate_input(){
		var inputs=document.getElementsByTagName("input");
		var i=0;
	
		for(i = 0; i < inputs.length; i++){
			if(inputs[i].value == ''){
				alert("啊哦~所有项目都要填哦！");
				inputs[i].focus();
				return;
			}
		}
	
		document.getElementById("main").submit();
	}

	<!--		【加载 PHP 可复用代码】		-->
	/***********	JQuery 特效代码  **********/
	<?php
		include('commonElem/jq_anim.js');
	?>
		
	</script>
	
</head>
<body>

<!--		【加载 PHP 可复用代码】		-->
<?php
/***********	登录状态检测程序	***********/
require('core/loginquery.php');
/***********	显示顶栏和侧面导航栏	***********/
include('commonElem/head_and_nav.php');
?>



<!-----------------------主体部分----------------------->
<div class="body-basement">

<form id="main" method="post" action="core/checkin.core.php">

<div class="body-main">

	<div class="section-title-line">个人信息
		<button type="button" class="btn btn-primary headbutton-commit" onclick="validate_input()" data-toggle="button" aria-pressed="false" autocomplete="off" >
		提交
		</button>
	</div>

	<div class="form-line">
         <span class="form-indicator">姓名</span>
         <input name="Name" type="text" class="form-textbox">
		<br>
	</div>
	
	<div class="form-line">
         <span class="form-indicator">社联编号</span>
         <input name="AUID" type="text" class="form-textbox">
		 <br>
	</div>

	<div class="form-line">
		<span class="form-indicator">手机</span>
		<input name="Mobile" type="text" class="form-textbox">
		<br>
	</div>

	<div class="form-line">
		<span class="form-indicator">QQ</span>
		<input name="QQ" type="text" class="form-textbox">
		<br>
	</div>
	
	 <div class="form-line">
         <span class="form-indicator">生日</span>
         <input name="Birthday" type="date" class="form-textbox">
      </br>
	</div>
	
	<div class="form-line">
			<span class="form-indicator">寝室楼栋</span>
			<input name="Dormbuild" type="text" class="form-textbox">
			<br>
	</div>
	
	<div class="form-line">
         <span class="form-indicator">部门</span>
         <input name="Department" type="text" class="form-textbox">

      <br>
	</div>
	
	<div class="form-line">
         <span class="form-indicator">职务</span>
         <input name="Occupation" type="text" class="form-textbox">
		<br>
	</div>

	<div id="GenderSelector" class="form-line">
            性别：<br />
         <input name="Gender" id="admin" type="radio" value="user" checked="checked"/>
            <label for="admin">男</label>
         <input name="Gender" id="user" type="radio" value="user" />
            <label for="user">女</label>
	</div>
	
	<div class="form-line">
         <span class="form-indicator">院系</span>
         <input name="Faculty" type="text" class="form-textbox">
		 </br>
	</div>

	<div class="form-line">
         <span class="form-indicator">年级</span>
         <input name="Grade" type="text" class="form-textbox">
		 </br>
	</div>		
	
	<div class="form-line">
         <span class="form-indicator">班级</span>
         <input name="Class" type="text" class="form-textbox">
		</br>
	</div>

	<div class="form-line">
         <span class="form-indicator">组别</span>
         <input name="GroupInDepart" type="text" class="form-textbox">
		 </br>
	</div>
	
	<div class="form-line">
         <span class="form-indicator">籍贯</span>
         <input name="Hometown" type="text" class="form-textbox">
			</br>
	</div>
	
	<div class="form-line">
         <span class="form-indicator">入社联时间</span>
         <input name="ArrivalTime" type="date" class="form-textbox">
      </br>
	</div>
	
	<div class="form-line">
      <button type="button" class="btn btn-primary" onclick="validate_input()" data-toggle="button" aria-pressed="false" autocomplete="off">
		提交
		</button>
	</div>
</div>
</form>
</div>

<?php
/***********	条目录入结果反馈	***********/
//录入后会自动弹出对话框
if(isset($_SESSION['checkin_result'])){
	switch($_SESSION['checkin_result']){
		case "SUCCESS":
			$result_text = "已录入数据";
			break;
		case "FAIL":
			$result_text = "录入数据时发生错误：" . $_SESSION['checkin_errmsg'];
			break;
		case "ERROR":
			$result_text = "系统错误：" . $_SESSION['checkin_errmsg'];
			break;
	}
	unset($_SESSION['checkin_result']);
	echo "<script> alert('$result_text'); </script>";
}
?>

</body>
</html>
