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
	/***********	页面重定向函数	***********/
	function relocate(target){
		location.href = target;
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



<div class="body-main">

	<div class="container">
		<div class="page-header">
			<h2>华中科技大学学生社团联合会</h2>
			<h3>人力资源管理系统</h3>
		</div>
		<div class="row">
			<div class="col-sm-6 col-md-4 col-lg-3 ">
			  <div class="thumbnail" style="height: 334px;">
				<a href="InfoInquiry0.php" title="信息查询"><img class="lazy" src="image/productCore.svg" width="300" height="150" ></a>
				<div class="caption">
				  <h3>
					<a href="InfoInquiry0.php" title="信息查询"  >信息查询</a>
				  </h3>
				</div>
			  </div>
			</div>

			<div class="col-sm-6 col-md-4 col-lg-3 ">
			  <div class="thumbnail" style="height: 334px;">
				<a href="CheckIn.php" title="信息录入"><img class="lazy" src="image/productCore.svg" width="300" height="150" ></a>
				<div class="caption">
				  <h3>
					<a href="CheckIn.php" title="信息录入"  >信息录入</a>
				  </h3>
				</div>
			  </div>
			</div>
		</div>
	</div>

</div>

 

</div>

</div>


</div>
</div>
</body>
</html>