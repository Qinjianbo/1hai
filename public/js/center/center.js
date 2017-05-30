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
    });
    $('#changeinfobtn').click(function changeinfo() {
        var realname = $('#realname').val();
        var idcard = $('#idcard').val();
        var id = $('#changeinfobtn').attr('data-title');
        if (realname.length < 0) {
            alert('请输入真实姓名');
            return;
        }
        $.ajax({
            url:'/center/changeInfo',
            type:'post',
            dataType:'json',
            data:{
                realname: realname,
                idcard: idcard,
                id: id
            },
            success:function (data) {
                if (data.errorCode) {
                    alert(data.errorMsg);
                } else {
                    alert('修改成功');
                    window.location.reload();
                }
            },
            error:function (data) {
                console.log(data.responseText);
                alert('请稍后再试');
            }
        })
    });
    $('.cancelOrder').click(function cancelOrder() {
        var orderId = $(this).attr('data-title');
        $.ajax({
            url:'/center/cancelOrder/'+orderId,
            type:'get',
            dataType:'json',
            data:{
            },
            success:function (data) {
                if (data.errorCode) {
                    alert(data.errorMsg);
                } else {
                    alert('订单取消成功');
                    window.location.reload();
                }
            },
            error:function (data) {
                console.log(data.responseText);
                alert('请稍后重试');
            }
        });
    });
});