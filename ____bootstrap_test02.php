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

<!--		【用户信息处理之 PHP 代码】		-->
<?php
session_start();

//检测是否登录，若没登录则转向登录界面
if(!isset($_SESSION['userid'])){
	echo "<script> alert('你还未登录，请先登录后再使用！'); </script>";
	echo "<script> location.href = './login.html'; </script>";
	
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
    <h2 class="bs-docs-featurette-title">为所有开发者、所有应用场景而设计。</h2>
    <p class="lead">Bootstrap 让前端开发更快速、简单。所有开发者都能快速上手、所有设备都可以适配、所有项目都适用。</p>

    <hr class="half-rule">

    <div class="row">
      <div class="col-sm-4">
        <img src="assets/img/sass-less.png" alt="Sass and Less support" class="img-responsive">
        <h3>预处理脚本</h3>
        <p>虽然可以直接使用 Bootstrap 提供的 CSS 样式表，不要忘记 Bootstrap 的源码是基于最流行的 CSS 预处理脚本 - <a href="../css/#less">Less</a> 和 <a href="../css/#sass">Sass</a> 开发的。你可以采用预编译的 CSS 文件快速开发，也可以从源码定制自己需要的样式。</p>
      </div>
      <div class="col-sm-4">
        <img src="assets/img/devices.png" alt="Responsive across devices" class="img-responsive">
        <h3>一个框架、多种设备</h3>
        <p>你的网站和应用能在 Bootstrap 的帮助下通过同一份代码快速、有效适配手机、平板、PC 设备，这一切都是 CSS 媒体查询（Media Query）的功劳。</p>
      </div>
      <div class="col-sm-4">
        <img src="assets/img/components.png" alt="Components" class="img-responsive">
        <h3>特性齐全</h3>
        <p>Bootstrap 提供了全面、美观的文档。你能在这里找到关于 HTML 元素、HTML 和 CSS 组件、jQuery 插件方面的所有详细文档。</p>
      </div>
    </div>

    <hr class="half-rule">

    <p class="lead">Bootstrap 是完全开源的。它的代码托管、开发、维护都依赖 GitHub 平台。</p>
    <a href="https://github.com/twbs/bootstrap" class="btn btn-outline btn-lg">查看 GitHub 项目主页</a>
  </div>

</div>

</div>


</div>
</div>
</body>
</html>