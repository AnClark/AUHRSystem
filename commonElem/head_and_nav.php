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