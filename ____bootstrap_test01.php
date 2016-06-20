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

<div class="container projects">

      <div class="projects-header page-header">
        <h2>Bootstrap相关优质项目推荐</h2>
        <p>这些项目或者是对Bootstrap进行了有益的补充，或者是基于Bootstrap开发的</p>
      </div>

      <div class="row">

        <div class="col-sm-6 col-md-4 col-lg-3 ">
          <div class="thumbnail" style="height: 334px;">
            <a href="http://codeguide.bootcss.com" title="Bootstrap 编码规范" target="_blank" onclick="_hmt.push(['_trackEvent', 'tile', 'click', 'codeguide'])"><img class="lazy" src="http://static.bootcss.com/www/assets/img/codeguide.png" width="300" height="150" data-src="http://static.bootcss.com/www/assets/img/codeguide.png" alt="Headroom.js"></a>
            <div class="caption">
              <h3>
                <a href="http://codeguide.bootcss.com" title="Bootstrap 编码规范：编写灵活、稳定、高质量的 HTML 和 CSS 代码的规范。" target="_blank" onclick="_hmt.push(['_trackEvent', 'tile', 'click', 'codeguide'])">Bootstrap 编码规范<br><small>by @mdo</small></a>
              </h3>
              <p>
              Bootstrap 编码规范：编写灵活、稳定、高质量的 HTML 和 CSS 代码的规范。
              </p>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-md-4 col-lg-3 ">
          <div class="thumbnail" style="height: 334px;">
            <a href="http://www.jquery123.com/api/" title="jQuery API 中文文档/手册" target="_blank" onclick="_hmt.push(['_trackEvent', 'tile', 'click', 'jQueryAPI中文手册'])"><img class="lazy" src="http://static.bootcss.com/www/assets/img/jqueryapi.png" width="300" height="150" data-src="http://static.bootcss.com/www/assets/img/jqueryapi.png" alt="jQuery API 中文文档/手册"></a>
            <div class="caption">
              <h3>
                <a href="http://www.jquery123.com/api/" title="jQuery API 中文文档/手册" target="_blank" onclick="_hmt.push(['_trackEvent', 'tile', 'click', 'jQueryAPI中文手册'])">jQuery API <br><small>中文手册</small></a>
              </h3>
              <p>
              根据最新的 jQuery 1.11.x 和 2.1.x 版本翻译的 jQuery API 中文文档/手册。
              </p>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-md-4 col-md-4 col-lg-3 ">
          <div class="thumbnail" style="height: 334px;">
            <a href="http://w3schools.bootcss.com/" title="w3schools 原版国内镜像" target="_blank" onclick="_hmt.push(['_trackEvent', 'tile', 'click', 'w3schools'])"><img class="lazy" src="http://static.bootcss.com/www/assets/img/w3schools.png" width="300" height="150" data-src="http://static.bootcss.com/www/assets/img/w3schools.png" alt="w3schools 原版国内镜像"></a>
            <div class="caption">
              <h3>
                <a href="http://w3schools.bootcss.com/" title="w3schools 原版国内镜像" target="_blank" onclick="_hmt.push(['_trackEvent', 'tile', 'click', 'w3schools'])">w3schools<br><small>原版国内镜像</small></a>
              </h3>
              <p>w3schools.com 是最受欢迎的前端技术教程网站，但是国内用户一直不能访问，并且国内的中文翻译版本十分陈旧。因此做了个镜像，希望英文好的同学直接去看原版教程吧！
              </p>
            </div>
          </div>
        </div>


        <div class="col-sm-6 col-md-4 col-md-4 col-lg-3 ">
          <div class="thumbnail" style="height: 334px;">
            <a href="http://expo.bootcss.com/" title="Bootstrap优站精选" target="_blank" onclick="_hmt.push(['_trackEvent', 'tile', 'click', 'youzhan'])"><img class="lazy" src="http://static.bootcss.com/www/assets/img/expo.png" width="300" height="150" data-src="http://static.bootcss.com/www/assets/img/expo.png" alt="Bootstrap优站精选"></a>
            <div class="caption">
              <h3>
                <a href="http://expo.bootcss.com/" title="Bootstrap优站精选" target="_blank" onclick="_hmt.push(['_trackEvent', 'tile', 'click', 'youzhan'])">优站精选<br><small>Bootstrap网站实例</small></a>
              </h3>
              <p>Bootstrap优站精选频道收集了众多基于 Bootstrap 构建、设计精美的、有创意的网站。
              </p>
            </div>
          </div>
        </div>


<div class="col-sm-6 col-md-4 col-lg-3 ">
          <div class="thumbnail" style="height: 334px;">
            <a href="http://www.gulpjs.com.cn/" title="gulp.js - 基于流的自动化构建工具。" target="_blank" onclick="_hmt.push(['_trackEvent', 'tile', 'click', 'gulpjs'])"><img class="lazy" src="http://static.bootcss.com/www/assets/img/gulpjs.png" width="300" height="150" data-src="http://static.bootcss.com/www/assets/img/gulpjs.png" alt="gulpjs"></a>
            <div class="caption">
              <h3>
                <a href="http://www.gulpjs.com.cn/" title="gulp.js - 基于流的自动化构建工具。" target="_blank" onclick="_hmt.push(['_trackEvent', 'tile', 'click', 'gulp'])">gulp.js<br><small>基于流的自动化构建工具。</small></a>
              </h3>
              <p>gulp.js - 基于流(stream)的自动化构建工具。Grunt 采用配置文件的方式执行任务，而 Gulp 一切都通过代码实现。
              </p>
            </div>
          </div>
        </div>


        <div class="col-sm-6 col-md-4 col-lg-3 ">
          <div class="thumbnail" style="height: 334px;">
            <a href="/p/lesscss/" title="LESS一种动态样式语言" target="_blank" onclick="_hmt.push(['_trackEvent', 'tile', 'click', 'lesscss'])"><img class="lazy" src="http://static.bootcss.com/www/assets/img/lesscss.png" width="300" height="150" data-src="http://static.bootcss.com/www/assets/img/lesscss.png" alt="LESSCSS"></a>
            <div class="caption">
              <h3>
                <a href="/p/lesscss/" title="LESS一种动态样式语言" target="_blank" onclick="_hmt.push(['_trackEvent', 'tile', 'click', 'lesscss'])">LESS<br><small>一种动态样式语言</small></a>
              </h3>
              <p>
              LESS为CSS赋予了动态语言的特性，如变量、继承、运算、函数。LESS既可以在客户端上运行 (支持IE 6+、Webkit、Firefox)，也可以借助Node.js或者Rhino在服务端运行。
              </p>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-md-4 col-lg-3 ">
          <div class="thumbnail" style="height: 334px;">
            <a href="http://lodashjs.com/" title="Lodash 是最流行的 JavaScript 工具库。" target="_blank" onclick="_hmt.push(['_trackEvent', 'tile', 'click', 'lodash'])"><img class="lazy" src="http://static.bootcss.com/www/assets/img/lodash.png" width="300" height="150" data-src="http://static.bootcss.com/www/assets/img/lodash.png" alt="Lodash"></a>
            <div class="caption">
              <h3>
                <a href="http://lodashjs.com/" title="Lodash 是最流行的 JavaScript 工具库。" target="_blank" onclick="_hmt.push(['_trackEvent', 'tile', 'click', 'lodash'])">Lodash<br><small>JavaScript 工具库</small></a>
              </h3>
              <p>
              Lodash 是一个具有一致接口、模块化、高性能等特性的 JavaScript 工具库。比相同功能的 Underscore.js 使用更广泛。
              </p>
            </div>
          </div>
        </div>


        <div class="col-sm-6 col-md-4 col-md-4 col-lg-3 ">
          <div class="thumbnail" style="height: 334px;">
            <a href="http://www.bootcdn.cn/" title="Bootstrap中文网开放CDN服务" target="_blank" onclick="_hmt.push(['_trackEvent', 'tile', 'click', 'bootcdn'])"><img class="lazy" src="http://static.bootcss.com/www/assets/img/opencdn.png" width="300" height="150" data-src="http://static.bootcss.com/www/assets/img/opencdn.png" alt="Open CDN"></a>
            <div class="caption">
              <h3>
                <a href="http://www.bootcdn.cn/" title="Bootstrap中文网开放CDN服务" target="_blank" onclick="_hmt.push(['_trackEvent', 'tile', 'click', 'bootcdn'])">Open CDN<br><small>开放CDN服务</small></a>
              </h3>
              <p>Bootstrap中文网联合又拍云存储共同推出了开放CDN服务，我们对广泛的前端开源库提供了稳定的存储和带宽的支持，例如Bootstrap、jQuery等。
              </p>
            </div>
          </div>
        </div>


        <div class="col-sm-6 col-md-4 col-lg-3 ">
          <div class="thumbnail" style="height: 334px;">
            <a href="/p/underscore/" title="Underscore.js 是一个 JavaScript 工具库" target="_blank" onclick="_hmt.push(['_trackEvent', 'tile', 'click', 'underscore'])"><img class="lazy" src="http://static.bootcss.com/www/assets/img/underscore.png" width="300" height="150" data-src="http://static.bootcss.com/www/assets/img/underscore.png" alt="Underscore.js"></a>
            <div class="caption">
              <h3>
                <a href="/p/underscore/" title="Underscore.js 是一个 JavaScript 工具库" target="_blank" onclick="_hmt.push(['_trackEvent', 'tile', 'click', 'underscore'])">Underscore.js<br><small>JavaScript 工具库</small></a>
              </h3>
              <p>
              Underscore.js是一个 JavaScript 工具库，它提供了一整套函数式编程的实用功能，弥补了 jQuery 没有实现的功能，同时又是 Backbone 必不可少的部分。
              </p>
            </div>
          </div>
        </div>


        <div class="col-sm-6 col-md-4 col-lg-3 ">
          <div class="thumbnail" style="height: 334px;">
            <a href="/p/buttons/" title="基于 Sass 和 Compass 构建的CSS按钮（button）样式库" target="_blank" onclick="_hmt.push(['_trackEvent', 'tile', 'click', 'button'])"><img class="lazy" src="http://static.bootcss.com/www/assets/img/buttons.png" width="300" height="150" data-src="http://static.bootcss.com/www/assets/img/buttons.png" alt="Buttons"></a>
            <div class="caption">
              <h3>
                <a href="/p/buttons/" title="基于 Sass 和 Compass 构建的CSS按钮（button）样式库" target="_blank" onclick="_hmt.push(['_trackEvent', 'tile', 'click', 'button'])">Buttons<br><small>CSS按钮样式库</small></a>
              </h3>
              <p>
              Buttons 是一个基于 Sass 和 Compass 构建的CSS按钮（button）样式库，图标采用的是<a href="/p/font-awesome/" target="_blank">Font Awesome</a>，可以和Bootstrap融合使用。
              </p>
            </div>
          </div>
        </div>


        <div class="col-sm-6 col-md-4 col-md-4 col-lg-3 ">
          <div class="thumbnail" style="height: 334px;">
            <a href="/p/stickup/" title="stickUp能让页面目标元素“固定”在浏览器窗口的顶部" target="_blank" onclick="_hmt.push(['_trackEvent', 'tile', 'click', 'stickup'])"><img class="lazy" src="http://static.bootcss.com/www/assets/img/stickup.png" width="300" height="150" data-src="http://static.bootcss.com/www/assets/img/stickup.png" alt="stickUp"></a>
            <div class="caption">
              <h3>
                <a href="/p/stickup/" title="stickUp能让页面目标元素“固定”在浏览器窗口的顶部" target="_blank" onclick="_hmt.push(['_trackEvent', 'tile', 'click', 'stickup'])">stickUp<br><small>让页面元素“固定”位置</small></a>
              </h3>
              <p>
              stickUp能让页面目标元素“固定”在浏览器窗口的顶部，即便页面在滚动，目标元素仍然能出现在设定的位置。
              </p>
            </div>
          </div>
        </div>

<div class="col-sm-6 col-md-4 col-lg-3 ">
<div class="thumbnail" style="height: 334px;">
<a href="/p/responsive-nav.js/" title="响应式导航" target="_blank" onclick="_hmt.push(['_trackEvent', 'tile', 'click', 'navjs'])"><img class="lazy" src="http://static.bootcss.com/www/assets/img/responsive-nav.js.png" width="300" height="150" data-src="http://static.bootcss.com/www/assets/img/responsive-nav.js.png" alt="Responsive Nav"></a>
<div class="caption">
<h3>
<a href="/p/responsive-nav.js/" title="响应式导航" target="_blank" onclick="_hmt.push(['_trackEvent', 'tile', 'click', 'navjs'])">Responsive Nav<br><small>响应式导航</small></a>
</h3>
<p>
响应式导航（Responsive Nav）是一个很小的JS插件，压缩之后仅有1.7KB，能帮你创建针对小屏幕的可切换式导航
</p>
</div>
</div>
</div>


        <div class="col-sm-6 col-md-4 col-lg-3 ">
          <div class="thumbnail" style="height: 334px;">
            <a href="/p/unslider/" title="Unslider" target="_blank" onclick="_hmt.push(['_trackEvent', 'tile', 'click', 'unslider'])"><img class="lazy" src="http://static.bootcss.com/www/assets/img/null.png?v2" width="300" height="150" data-src="http://static.bootcss.com/www/assets/img/unslider.png" alt="Unslider"></a>
            <div class="caption">
              <h3>
                <a href="/p/unslider/" title="Unslider" target="_blank" onclick="_hmt.push(['_trackEvent', 'tile', 'click', 'unslider'])">Unslider<br><small>jQuery轮播插件</small></a>
              </h3>
              <p>
              Unslider — 一个超小的 jQuery 轮播（slider） 插件。支持主流浏览器、键盘导航、自动调整高度和响应式布局。
              </p>
            </div>
          </div>
        </div>

<div class="col-sm-6 col-md-4 col-lg-3 ">
<div class="thumbnail" style="height: 334px;">
<a href="/p/flat-ui/" title="Flat UI" target="_blank" onclick="_hmt.push(['_trackEvent', 'tile', 'click', 'flatui'])"><img class="lazy" src="http://static.bootcss.com/www/assets/img/null.png?v2" width="300" height="150" data-src="http://static.bootcss.com/www/assets/img/flat-ui.png" alt="Flat UI"></a>
<div class="caption">
<h3>
<a href="/p/flat-ui/" title="Flat UI" target="_blank" onclick="_hmt.push(['_trackEvent', 'tile', 'click', 'flatui'])">Flat UI<br><small>Metro风格的Bootstrap</small></a>
</h3>
<p>
Flat UI是基于Bootstrap做的Metro化改造，由<a href="http://designmodo.com/">Designmodo</a>提供。Flat UI包含了很多Bootstrap提供的组件，但是外观更加漂亮。在此强烈推荐！
</p>
</div>
</div>
</div>


       <div class="col-sm-6 col-md-4 col-lg-3 ">
          <div class="thumbnail" style="height: 334px;">
          <a href="/p/layoutit/" title="Bootstrap可视化布局系统" target="_blank" onclick="_hmt.push(['_trackEvent', 'tile', 'click', 'layoutit'])"><img class="lazy" src="http://static.bootcss.com/www/assets/img/null.png?v2" width="300" height="150" data-src="http://static.bootcss.com/www/assets/img/layoutit.png" alt="Layoutit"></a>
            <div class="caption">
              <h3>
                <a href="/p/layoutit/" title="Bootstrap可视化布局系统" target="_blank" onclick="_hmt.push(['_trackEvent', 'tile', 'click', 'layoutit'])">LayoutIt!<br><small>Bootstrap可视化布局</small></a>
              </h3>
              <p>
              LayoutIt! 可拖放排序在线编辑的Bootstrap可视化布局系统。由<a href="https://github.com/dodgepudding" target="_blank">4wer</a>同学汉化整理。
              </p>
            </div>
          </div>
        </div>



        <div class="col-sm-6 col-md-4 col-lg-3 ">
          <div class="thumbnail" style="height: 334px;">
            <a href="/p/bootstrap-switch/" title="Bootstrap Switch" target="_blank" onclick="_hmt.push(['_trackEvent', 'tile', 'click', 'switch'])"><img class="lazy" src="http://static.bootcss.com/www/assets/img/null.png?v2" width="300" height="150" data-src="http://static.bootcss.com/www/assets/img/bootstrap-switch.png" alt="Bootstrap Switch"></a>
            <div class="caption">
              <h3>
                <a href="/p/bootstrap-switch/" title="Bootstrap Switch" target="_blank" onclick="_hmt.push(['_trackEvent', 'tile', 'click', 'switch'])">Bootstrap Switch<br><small>Bootstrap开关组件</small></a>
              </h3>
              <p>
              Bootstrap Switch是对Bootstrap控件的扩充。基于选HTML中基本的选择框控件实现只有开和关两种状态的单选按钮。
              </p>
            </div>
          </div>
        </div>


        <div class="col-sm-6 col-md-4 col-lg-3 ">
          <div class="thumbnail" style="height: 334px;">
            <a href="/p/sco.js/" title="Sco.js" target="_blank" onclick="_hmt.push(['_trackEvent', 'tile', 'click', 'sco'])"><img class="lazy" src="http://static.bootcss.com/www/assets/img/null.png?v2" width="300" height="150" data-src="http://static.bootcss.com/www/assets/img/sco.js.png" alt="Sco.js"></a>
            <div class="caption">
              <h3>
                <a href="/p/sco.js/" title="Sco.js" target="_blank" onclick="_hmt.push(['_trackEvent', 'tile', 'click', 'sco'])">Sco.js<br><small>Bootstrap组件增强版</small></a>
              </h3>
              <p>
              由于大部分的Bootstrap js插件是无法扩展的，因此才有了sco.js，它是对Bootsrap中js插件的增强实现。
              </p>
            </div>
          </div>
        </div>


        <div class="col-sm-6 col-md-4 col-lg-3 ">
          <div class="thumbnail" style="height: 334px;">
            <a href="/p/icheck/" title="iCheck" target="_blank" onclick="_hmt.push(['_trackEvent', 'tile', 'click', 'icheck'])"><img class="lazy" src="http://static.bootcss.com/www/assets/img/null.png?v2" width="300" height="150" data-src="http://static.bootcss.com/www/assets/img/icheck.png" alt="iCheck"></a>
            <div class="caption">
              <h3>
                <a href="/p/icheck/" title="iCheck" target="_blank" onclick="_hmt.push(['_trackEvent', 'tile', 'click', 'icheck'])">iCheck<br><small>增强复选框和单选按钮</small></a>
              </h3>
              <p>
              iCheck让不同浏览器下的复选框（checkboxes）和单选按钮（radio button）更美观、功能更强。
              </p>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-md-4 col-lg-3 ">
          <div class="thumbnail" style="height: 334px;">
            <a href="/p/bootstrap-wysiwyg/" title="bootstrap-wysiwyg" target="_blank" onclick="_hmt.push(['_trackEvent', 'tile', 'click', 'wysiwyg'])"><img class="lazy" src="http://static.bootcss.com/www/assets/img/null.png?v2" width="300" height="150" data-src="http://static.bootcss.com/www/assets/img/bootstrap-wysiwyg.png" alt="Bootstrap WYSIWYG"></a>
            <div class="caption">
              <h3>
                <a href="/p/bootstrap-wysiwyg/" title="bootstrap-wysiwyg" target="_blank" onclick="_hmt.push(['_trackEvent', 'tile', 'click', 'wysiwyg'])">bootstrap-wysiwyg<br><small>为Bootstrap定制的可视编辑器</small></a>
              </h3>
              <p>
              bootstrap-wysiwyg是一个jQuery Bootstrap插件（5KB, &lt; 200 行代码）可以将任何一个DIV转变成一个WYSIWYG富文本编辑器。
              </p>
            </div>
          </div>
        </div>


        <div class="col-sm-6 col-md-4 col-lg-3 ">
          <div class="thumbnail" style="height: 334px;">
            <a href="/p/chart.js/" title="Chart.js" target="_blank" onclick="_hmt.push(['_trackEvent', 'tile', 'click', 'chartjs'])"><img class="lazy" src="http://static.bootcss.com/www/assets/img/null.png?v2" width="300" height="150" data-src="http://static.bootcss.com/www/assets/img/chart.js.png" alt="Chart.js"></a>
            <div class="caption">
              <h3>
                <a href="/p/chart.js/" title="Chart.js" target="_blank" onclick="_hmt.push(['_trackEvent', 'tile', 'click', 'chartjs'])">Chart.js<br><small>精巧的JS图表绘制工具库</small></a>
              </h3>
              <p>
              Chart.js是一个简单、面向对象、为设计者和开发者准备的图表绘制工具库。
              </p>
            </div>
          </div>
        </div>


<div class="col-sm-6 col-md-4 col-lg-3 ">
<div class="thumbnail" style="height: 334px;">
<a href="/p/preboot/" title="Preboot" target="_blank" onclick="_hmt.push(['_trackEvent', 'tile', 'click', 'preboot'])"><img class="lazy" src="http://static.bootcss.com/www/assets/img/null.png?v2" width="300" height="150" data-src="http://static.bootcss.com/www/assets/img/preboot.png" alt="Preboot"></a>
<div class="caption">
<h3>
<a href="/p/preboot/" title="Preboot" target="_blank" onclick="_hmt.push(['_trackEvent', 'tile', 'click', 'preboot'])">Preboot<br><small>Bootstrap之前世</small></a>
</h3>
<p>
Preboot是一组用LESS语法书写的混合（mixin）和变量（variable）的集合，目的是辅助用户书写更优美的CSS。Bootstrap的前身就是Preboot。
</p>
</div>
</div>
</div>

<div class="col-sm-6 col-md-4 col-lg-3 ">
<div class="thumbnail" style="height: 334px;">
<a href="/p/jquery.pin/" title="jQuery.Pin" target="_blank" onclick="_hmt.push(['_trackEvent', 'tile', 'click', 'pin'])"><img class="lazy" src="http://static.bootcss.com/www/assets/img/null.png?v2" width="300" height="150" data-src="http://static.bootcss.com/www/assets/img/jquery.pin.png" alt="jQuery.Pin"></a>
<div class="caption">
<h3>
<a href="/p/jquery.pin/" title="jQuery.Pin" target="_blank" onclick="_hmt.push(['_trackEvent', 'tile', 'click', 'pin'])">jQuery.Pin<br><small>固定页面元素的jQuery插件</small></a>
</h3>
<p>
jQuery.Pin 能将任意页面元素“钉”在某个容器顶部，而且在尺寸小的屏幕上能够自动禁用这种效果。
</p>
</div>
</div>
</div>


<div class="col-sm-6 col-md-4 col-lg-3 ">
<div class="thumbnail" style="height: 334px;">
<a href="/p/bsie/" title="Bootstrap IE6兼容方案" target="_blank" onclick="_hmt.push(['_trackEvent', 'tile', 'click', 'bsie'])"><img class="lazy" src="http://static.bootcss.com/www/assets/img/null.png?v2" width="300" height="150" data-src="http://static.bootcss.com/www/assets/img/bsie.png" alt="BSIE"></a>
<div class="caption">
<h3>
<a href="/p/bsie/" title="Bootstrap IE6兼容方案" target="_blank" onclick="_hmt.push(['_trackEvent', 'tile', 'click', 'bsie'])">Bsie<br><small>Bootstrap IE6兼容方案</small></a>
</h3>
<p>
Bsie弥补了Bootstrap对IE6的不兼容。目前，bsie能在IE6上支持大部分bootstrap的特性，可惜，还有一些实在无法支持...
</p>
</div>
</div>
</div>

<div class="col-sm-6 col-md-4 col-lg-3 ">
<div class="thumbnail" style="height: 334px;">
<a href="/p/messenger/" title="非常酷的弹框(Alert)组件" target="_blank" onclick="_hmt.push(['_trackEvent', 'tile', 'click', 'messenger'])"><img class="lazy" src="http://static.bootcss.com/www/assets/img/null.png?v2" width="300" height="150" data-src="http://static.bootcss.com/www/assets/img/messenger.png" alt="Messenger"></a>
<div class="caption">
<h3>
<a href="/p/messenger/" title="非常酷的弹框(Alert)组件" target="_blank" onclick="_hmt.push(['_trackEvent', 'tile', 'click', 'messenger'])">Messenger<br><small>非常酷的弹框(Alert)组件</small></a>
</h3>
<p>
Messenger是一个非常酷的弹框(Alert)组件，能够非常好的与Bootstrap融合，当然，单独使用效果也是非常棒。Messenger自带4套皮肤。
</p>
</div>
</div>
</div>

<div class="col-sm-6 col-md-4 col-lg-3 ">
<div class="thumbnail" style="height: 334px;">
<a href="/p/bootstrap-datetimepicker/" title="Bootstrap日期时间选择器" target="_blank" onclick="_hmt.push(['_trackEvent', 'tile', 'click', 'datetimepicker'])"><img class="lazy" src="http://static.bootcss.com/www/assets/img/null.png?v2" width="300" height="150" data-src="http://static.bootcss.com/www/assets/img/bootstrap-datetimepicker.png" alt="Bootstrap Datetimepicker"></a>
<div class="caption">
<h3>
<a href="/p/bootstrap-datetimepicker/" title="Bootstrap日期时间选择器" target="_blank" onclick="_hmt.push(['_trackEvent', 'tile', 'click', 'datetimepicker'])"> DateTime Picker<br><small>日期时间选择器</small></a>
</h3>
<p>
Bootstrap日期时间选择器（Bootstrap DateTime Picker）是一个Bootstrap组件，能够简化页面上日期、时间的输入。
</p>
</div>
</div>
</div>


<div class="col-sm-6 col-md-4 col-lg-3 ">
<div class="thumbnail" style="height: 334px;">
<a href="/p/jquery-ui-bootstrap/" title="基于Bootstrap样式的 jQuery UI 控件" target="_blank" onclick="_hmt.push(['_trackEvent', 'tile', 'click', 'jquibootstrap'])"><img class="lazy" src="http://static.bootcss.com/www/assets/img/null.png?v2" width="300" height="150" data-src="http://static.bootcss.com/www/assets/img/jquery-ui-bootstrap.png" alt="jQuery UI Bootstrap"></a>
<div class="caption">
<h3>
<a href="/p/jquery-ui-bootstrap/" title="基于Bootstrap样式的 jQuery UI 控件" target="_blank" onclick="_hmt.push(['_trackEvent', 'tile', 'click', 'jquibootstrap'])">jQuery UI Bootstrap <br><small>用Bootstrap美化jQuery UI</small></a>
</h3>
<p>这套工具让你在使用jQuery UI 控件时也能充分利用Bootstrap的样式，而且不会出现样式不统一的现象，Bootstrap和jQuery UI可以完美融合在一起了！</p>
</div>
</div>
</div>

<div class="col-sm-6 col-md-4 col-lg-3 ">
<div class="thumbnail" style="height: 334px;">
<a href="/p/google-bootstrap/" title="Google风格的Bootstrap" target="_blank" onclick="_hmt.push(['_trackEvent', 'tile', 'click', 'googlebootstrap'])"><img class="lazy" src="http://static.bootcss.com/www/assets/img/null.png?v2" width="300" height="150" data-src="http://static.bootcss.com/www/assets/img/google-bootstrap.png" alt="Google-Style Bootstrap"></a>
<div class="caption">
<h3>
<a href="/p/google-bootstrap/" title="Google风格的Bootstrap" target="_blank" onclick="_hmt.push(['_trackEvent', 'tile', 'click', 'googlebootstrap'])">Google Bootstrap <br><small>Google风格的Bootstrap</small></a>
</h3>
<p>Google的UI素来以简洁著称，现在Bootstrap也来Google Style一把，喜欢Google的就来试试这套Google Bootstrap吧！</p>
</div>
</div>
</div>


<div class="col-sm-6 col-md-4 col-lg-3 ">
<div class="thumbnail" style="height: 334px;">
<a href="/p/metro-ui-css/" title="Bootstrap Metro UI CSS" target="_blank" onclick="_hmt.push(['_trackEvent', 'tile', 'click', 'metrouicss'])"><img class="lazy" src="http://static.bootcss.com/www/assets/img/null.png?v2" width="300" height="150" data-src="http://static.bootcss.com/www/assets/img/metro-ui-css.png" alt="Bootstrap Metro UI CSS"></a>
<div class="caption">
<h3>
<a href="/p/metro-ui-css/" title="Bootstrap Metro UI CSS" target="_blank" onclick="_hmt.push(['_trackEvent', 'tile', 'click', 'metrouicss'])">Metro UI CSS <br><small>Bootstrap与Metro融合</small></a>
</h3>
<p>
Metro UI CSS 是一套用来创建类似于Windows 8 Metro UI风格网站的样式。现在，Metro UI CSS项目在Bootstrap的基础上被开发成一个独立的解决方案。
</p>
</div>
</div>
</div>

<div class="col-sm-6 col-md-4 col-lg-3 ">
<div class="thumbnail" style="height: 334px;">
<a href="/p/font-awesome/" title="Font Awesome" target="_blank" onclick="_hmt.push(['_trackEvent', 'tile', 'click', 'fontawesome'])"><img class="lazy" src="http://static.bootcss.com/www/assets/img/null.png?v2" width="300" height="150" data-src="http://static.bootcss.com/www/assets/img/font-awesome.png" alt="Font Awesome"></a>
<div class="caption">
<h3>
<a href="/p/font-awesome/" title="Font Awesome" target="_blank" onclick="_hmt.push(['_trackEvent', 'tile', 'click', 'fontawesome'])">Font Awesome <br><small>Bootstrap专用图标字体</small></a>
</h3>
<p>
Font Awesome 中包含的所有图标都是矢量的，也就可以任意缩放，避免了一个图标做多种尺寸的麻烦。CSS对字体可以设置的样式也同样能够运用到这些图标上了。
</p>
</div>
</div>
</div>


<div class="col-sm-6 col-md-4 col-lg-3 ">
<div class="thumbnail" style="height: 334px;">
<a href="/p/simple-icons/" title="Icon汇" target="_blank" onclick="_hmt.push(['_trackEvent', 'tile', 'click', 'simpleicons'])"><img class="lazy" src="http://static.bootcss.com/www/assets/img/null.png?v2" width="300" height="150" data-src="http://static.bootcss.com/www/assets/img/simpleicons.png" alt="Simple Icons"></a>
<div class="caption">
<h3>
<a href="/p/simple-icons/" title="Icon汇" target="_blank" onclick="_hmt.push(['_trackEvent', 'tile', 'click', 'simpleicons'])"> Simple Icons<br><small>Icon汇</small></a>
</h3>
<p>
Simple Icons -- Icon汇。收集众多网站的Logo，并提供高质量、不同尺寸的png格式图片给广大网友，所有Icon版权归其所属公司。
</p>
</div>
</div>
</div>


<div class="col-sm-6 col-md-4 col-lg-3 ">
<div class="thumbnail" style="height: 334px;">
<a href="/p/bootstrap-form-builder/" title="Bootstrap 在线表单构造器" target="_blank" onclick="_hmt.push(['_trackEvent', 'tile', 'click', 'bsformbuilder'])"><img class="lazy" src="http://static.bootcss.com/www/assets/img/null.png?v2" width="300" height="150" data-src="http://static.bootcss.com/www/assets/img/bootstrap-form-builder.png" alt="Bootstrap Form Builder"></a>
<div class="caption">
<h3>
<a href="/p/bootstrap-form-builder/" title="Bootstrap 在线表单构造器" target="_blank" onclick="_hmt.push(['_trackEvent', 'tile', 'click', 'bsformbuilder'])">Bootstrap  Form Builder<br><small>在线表单构造器</small></a>
</h3>
<p>
Bootstrap 在线表单构造器能够以鼠标拖拽的方式迅速生成一个基于Bootstrap的完整表单，减轻了各位码农手写HTML代码的劳动，而且不会出错。
</p>
</div>
</div>
</div>

<div class="col-sm-6 col-md-4 col-lg-3 ">
<div class="thumbnail" style="height: 334px;">
<a href="/p/html5boilerplate/" title="HTML5 Boilerplate" target="_blank" onclick="_hmt.push(['_trackEvent', 'tile', 'click', 'h5boilerplate'])"><img class="lazy" src="http://static.bootcss.com/www/assets/img/null.png?v2" width="300" height="150" data-src="http://static.bootcss.com/www/assets/img/h5bp.png" alt="HTML5 Boilerplate"></a>
<div class="caption">
<h3>
<a href="/p/html5boilerplate/" title="HTML5 Boilerplate" target="_blank" onclick="_hmt.push(['_trackEvent', 'tile', 'click', 'h5boilerplate'])">HTML5 Boilerplate<br><small>专业的前端模版</small></a>
</h3>
<p>
HTML5 Boilerplate 是一套专业的前端模版，用以开发快速、健壮、适应性强的app或网站。
</p>
</div>
</div>
</div>

<div class="col-sm-6 col-md-4 col-lg-3 ">
<div class="thumbnail" style="height: 334px;">
<a href="/p/websafecolors/" title="Web安全色" target="_blank" onclick="_hmt.push(['_trackEvent', 'tile', 'click', 'websafecolors'])"><img class="lazy" src="http://static.bootcss.com/www/assets/img/null.png?v2" width="300" height="150" data-src="http://static.bootcss.com/www/assets/img/websafecolors.png" alt="Web-Safe Colors"></a>
<div class="caption">
<h3>
<a href="/p/websafecolors/" title="Web安全色" target="_blank" onclick="_hmt.push(['_trackEvent', 'tile', 'click', 'websafecolors'])">Web Safe Colors<br><small>Web安全色</small></a>
</h3>
<p>
本表中列出的是WEB设计、开发中常用安全色。列于此是为了方便大家参考。
</p>
</div>
</div>
</div>


<div class="col-sm-6 col-md-4 col-lg-3 ">
<div class="thumbnail" style="height: 334px;">
<a href="http://docs.bootcss.com/" title="Bootstrap文档全集" target="_blank" onclick="_hmt.push(['_trackEvent', 'tile', 'click', 'docs'])"><img class="lazy" src="http://static.bootcss.com/www/assets/img/null.png?v2" width="300" height="150" data-src="http://static.bootcss.com/www/assets/img/bootstrap-docs.png" alt="Bootstrap Docs"></a>
<div class="caption">
<h3>
<a href="http://docs.bootcss.com/" title="Bootstrap文档全集" target="_blank" onclick="_hmt.push(['_trackEvent', 'tile', 'click', 'docs'])">Bootstrap Docs<br><small>Bootstrap文档全集</small></a>
</h3>
<p>
这里收集了Bootstrap从V1.0.0版本到现在，整个文档的历史。Bootstrap本身就是一个传奇，而这些文档就是传奇的见证！
</p>
</div>
</div>

</div>

<div class="col-sm-6 col-md-4 col-lg-3 ">
<div class="thumbnail" style="height: 334px;">
<a href="/p/git-guide/" title="Git简易指南" target="_blank" onclick="_hmt.push(['_trackEvent', 'tile', 'click', 'git'])"><img class="lazy" src="http://static.bootcss.com/www/assets/img/null.png?v2" width="300" height="150" data-src="http://static.bootcss.com/www/assets/img/git-guide.png" alt="Git Guide"></a>
<div class="caption">
<h3>
<a href="/p/git-guide/" title="git简易指南" target="_blank" onclick="_hmt.push(['_trackEvent', 'tile', 'click', 'git'])">Git Guide<br><small>Git简易指南</small></a>
</h3>
<p>
Git简易指南 -- 帮助你开始使用 git 的简易指南，木有高深内容，;)。
</p>
</div>
</div>
</div>


<div class="col-sm-6 col-md-4 col-lg-3 ">
<div class="thumbnail" style="height: 334px;">
<a href="/p/grumblejs/" title="气泡形状的提示（Tooltip）控件" target="_blank" onclick="_hmt.push(['_trackEvent', 'tile', 'click', 'grumblejs'])"><img class="lazy" src="http://static.bootcss.com/www/assets/img/null.png?v2" width="300" height="150" data-src="http://static.bootcss.com/www/assets/img/grumblejs.png" alt="Grumble.js"></a>
<div class="caption">
<h3>
<a href="/p/grumblejs/" title="气泡形状的提示（Tooltip）控件" target="_blank" onclick="_hmt.push(['_trackEvent', 'tile', 'click', 'grumblejs'])">Grumble.js<br><small>气泡形状的提示（Tooltip）控件</small></a>
</h3>
<p>
一个气泡形状的提示（Tooltip）控件，可以在其围绕的元素周围做360度任意定位。
</p>
</div>
</div>
</div>


<div class="col-sm-6 col-md-4 col-lg-3 ">
<div class="thumbnail" style="height: 334px;">
<a href="/p/cikonss/" title="纯CSS实现的Icon" target="_blank" onclick="_hmt.push(['_trackEvent', 'tile', 'click', 'cikonss'])"><img class="lazy" src="http://static.bootcss.com/www/assets/img/null.png?v2" width="300" height="150" data-src="http://static.bootcss.com/www/assets/img/cikonss.png" alt="Cikonss"></a>
<div class="caption">
<h3>
<a href="/p/cikonss/" title="纯CSS实现的Icon" target="_blank" onclick="_hmt.push(['_trackEvent', 'tile', 'click', 'cikonss'])">CIKONSS<br><small>纯CSS实现的Icon</small></a>
</h3>
<p>
Cikonss是纯CSS实现的响应式Icon，兼容IE8+。
</p>
</div>
</div>
</div>

<div class="col-sm-6 col-md-4 col-lg-3 ">
          <div class="thumbnail" style="height: 334px;">
            <a href="/p/headroom.js/" title="Headroom.js 是一个轻量级、纯 JS 组件，用来隐藏或展现页面上的元素，为你的页面留下更多展示内容的空间。" target="_blank" onclick="_hmt.push(['_trackEvent', 'tile', 'click', 'headroom'])"><img class="lazy" src="http://static.bootcss.com/www/assets/img/null.png?v2" width="300" height="150" data-src="http://static.bootcss.com/www/assets/img/headroom.png" alt="Headroom.js"></a>
            <div class="caption">
              <h3>
                <a href="/p/headroom.js/" title="Headroom.js 是一个轻量级、纯 JS 组件，用来隐藏或展现页面上的元素，为你的页面留下更多展示内容的空间。" target="_blank" onclick="_hmt.push(['_trackEvent', 'tile', 'click', 'headroom'])">Headroom.js<br><small>隐藏或展示页面元素</small></a>
              </h3>
              <p>
              Headroom.js 是一个轻量级、纯 JavaScript 组件，用来隐藏或展现页面上的元素，为你的页面留下更多展示内容的空间。
              </p>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-md-4 col-lg-3 ">
          <div class="thumbnail" style="height: 334px;">
            <a href="http://www.gruntjs.net" title="Grunt是基于Node.js的项目构建工具。" target="_blank" onclick="_hmt.push(['_trackEvent', 'tile', 'click', 'grunt'])"><img class="lazy" src="http://static.bootcss.com/www/assets/img/null.png?v2" width="300" height="150" data-src="http://static.bootcss.com/www/assets/img/gruntjs.png" alt="Grunt"></a>
            <div class="caption">
              <h3>
                <a href="http://www.gruntjs.net" title="Grunt是基于Node.js的项目构建工具。" target="_blank" onclick="_hmt.push(['_trackEvent', 'tile', 'click', 'grunt'])">Grunt<br><small>项目构建工具</small></a>
              </h3>
              <p>
              Grunt是基于Node.js的项目构建工具。它可以自动运行你所设定的任务。Grunt拥有数量庞大的插件，几乎任何你所要做的事情都可以用Grunt实现。
              </p>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-md-4 col-lg-3 ">
          <div class="thumbnail" style="height: 334px;">
            <a href="/p/zeptojs/" title="Zepto.js 是一个轻量级、兼容 jQuery 的 JavaScript 工具库" target="_blank" onclick="_hmt.push(['_trackEvent', 'tile', 'click', 'zepto.js'])"><img class="lazy" src="http://static.bootcss.com/www/assets/img/null.png?v2" width="300" height="150" data-src="http://static.bootcss.com/www/assets/img/zeptojs.png" alt="Zepto.js"></a>
            <div class="caption">
              <h3>
                <a href="/p/zeptojs/" title="Zepto.js 是一个轻量级、兼容 jQuery 的 JavaScript 工具库" target="_blank" onclick="_hmt.push(['_trackEvent', 'tile', 'click', 'zepto.js'])">Zepto.js<br><small>JavaScript 工具库</small></a>
              </h3>
              <p>
              Zepto.js 是一个轻量级、兼容 jQuery 的 JavaScript 工具库。
              </p>
            </div>
          </div>
        </div>

</div>
</div>
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