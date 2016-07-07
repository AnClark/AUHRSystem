<!DOCTYPE html>
<html lang="en">
<head>
    <title>HRmanage</title>
    <meta charset="utf-8">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
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

<!--		【加载 PHP 可复用代码】		-->
<?php
/***********	登录状态检测程序	***********/
require('core/loginquery.php');
/***********	显示顶栏和侧面导航栏	***********/
include('commonElem/head_and_nav.php');
?>


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