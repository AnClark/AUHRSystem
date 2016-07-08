/**
 *  JQuery 特效代码
 *  用于用户选项菜单的展开与收起
 */
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