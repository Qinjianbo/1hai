$(function () {
    var user = $.parseJSON($.cookie('user'));
    if (user === undefined || user == null) {
        $("#before_login").css("display", "");
        $("#center").text("一嗨会员").attr("href", "javascript:;");
        $("#after_login").css("display", "none");
    } else {
        $("#before_login").css("display", "none");
        $("#center").text(user.realname).attr("href", "/center");
        $("#after_login").css("display", "");
    }
    $("#logout").click(function () {
        if (confirm("确认现在退出登录吗？")) {
            $.cookie("user", null);
            location.reload();
        }
    })
})