<!DOCTYPE html>
<html lang="en">
<head>
    <title>HRmanage</title>
    <meta charset="utf-8">
    <link href="http://libs.baidu.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
    <script src="http://libs.baidu.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="hrHome.css" />
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
	
	/***********	JQuery 特效代码  **********/
	$(document).ready(function(){
		$("#user-indicator").mouseover(function(){
			$(".usermenu").slideToggle(500);
		});
		$("#user-indicator2").mouseover(function(){
			$(".usermenu").slideToggle(500);
		});
		$(".usermenu").mouseleave(function(){
			$(".usermenu").slideUp(500);
		});
	});
	</script>
	
</head>
<body>

<!--		【内嵌 PHP 代码，实现奇妙功能！】		-->
<?php
/***********	检验登录状态	***********/
//为简洁起见，相关代码放入独立文件中
include('core/logIdentify.php');
?>

<!-----------------------页首部分----------------------->
<div class="header">HRmanage
	<!--	用户名指示器	-->
	<span class="user-indicator" id="user-indicator"><?php echo $user_indicator_text; ?></span>
	<!--	头像占位符		-->
	<div class="headphoto" id="user-indicator2">
		<img src="image/1.png" width="40" height="40">
	</div>
</div>

<!--  用户选项菜单 -->
<div class="usermenu">
	<div class="usermenu-line"><?php echo $user_level_text; ?></div>
	<div class="usermenu-line">
		<a href="core/logout.php">注销</a>
	</div>
</div>

<!-----------------------导航部分----------------------->
<div class="select">
    <div class="select_section1">
<img src="image/privacy.svg">&nbsp;主页 <img src="image/ic_chevron_left.svg" align="right" style="padding-right:20px; padding-top:5px"></div>
    <div class="select_section1">
<img src="image/productCore.svg">&nbsp;个人信息<img src="image/ic_chevron_left.svg" align="right" style="padding-right:20px; padding-top:5px">
  </div>
    <div class="select_section1">
<img src="image/shaxian.svg">&nbsp;基本信息<img src="image/ic_chevron_left.svg" align="right" style="padding-right:20px; padding-top:5px">
  </div>
    <div class="select_section1">
<img src="image/niukou.svg">&nbsp;私人信息<img src="image/ic_chevron_left.svg" align="right" style="padding-right:20px; padding-top:5px">
  </div>
    <div class="select_section1">
<img src="image/积分.svg">&nbsp;工作记录<img src="image/ic_chevron_left.svg" align="right" style="padding-right:20px; padding-top:5px"></div>
    <div class="select_section1">
<img src="image/足迹.svg">&nbsp;绩效考核<img src="image/ic_chevron_left.svg" align="right" style="padding-right:20px; padding-top:5px"></div>
    <div class="select_section1">
<img src="image/scdp_1.svg">&nbsp;优秀个人<img src="image/ic_chevron_left.svg" align="right" style="padding-right:20px; padding-top:5px"></div>
    <div class="select_section1">
<img src="image/user.svg">&nbsp;部门之星<img src="image/ic_chevron_left.svg" align="right" style="padding-right:20px; padding-top:5px">  
</div>
</div>



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
