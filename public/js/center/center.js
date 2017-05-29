$(function () {
    $('#changepwdbtn').click(function changePwd() {
        var oldpwd = $('#oldpwd').val();
        var newpwd = $('#newpwd').val();
        var secnewpwd = $('#secnewpwd').val();
        var id = $('#changepwdbtn').attr('data-title');
        if (newpwd.length < 6) {
            alert('新密码小于6位，请重新输入');
            return;
        }
        if (newpwd != secnewpwd) {
            alert('两次新密码输入不一致');
            return;
        }
        $.ajax({
            url:'/center/changePwd',
            type:'post',
            dataType:'json',
            data:{
                oldpwd: oldpwd,
                newpwd: newpwd,
                secnewpwd: secnewpwd,
                id: id
            },
            success:function (data) {
                if (data.errorCode) {
                    alert(data.errorMsg);
                } else {
                    alert('修改成功，请重新登录');
                    window.location.href = "/login";
                }
            },
            error:function (data) {
                console.log(data.responseText);
                alert('请稍后再试');
            }
        })
    })
})