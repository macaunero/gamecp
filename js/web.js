var regexString = {username: /^[A-Za-z0-9_]+$/,password: /^[A-Za-z0-9 _~!@#$%^&*()=+-.,;]+$/,vcode: /^[A-Za-z0-9]+$/};
var minleng = 4;
var maxleng = 20;
$(document).ready(function() {
    $('.carousel').carousel({
        interval: 3000
    });
    $('#forgot').click(function(){
        $('#fpw').modal({
            //backdrop: false
        });
        return false;
    });
});
function login() {
    var name = $("#username").val();
    var pw = $("#password").val();
    var code = $("#vcode").val();
    if (name.length < minleng || name.length > maxleng) {
        $.msgBox({
            type: "error",
            title: "错误",
            content:"账号不能低于 "+minleng+" 为或者高于 "+maxleng+" 位",
            opacity:0.8
        });
        return false;
    }
    if (pw.length <= 0) {
        $.msgBox({
            type: "error",
            title: "错误",
            content:"请输入密码",
            opacity:0.8
        });
        return false;
    }
    if (code.length <= 0) {
        $.msgBox({
            type: "error",
            title: "错误",
            content:"请输入验证码",
            opacity:0.8
        });
        return false;
    }
    if (!regexString.username.test(name) || !regexString.password.test(pw) || !regexString.vcode.test(code)) {
        $.msgBox({
            type: "error",
            title: "错误",
            content:"请输入正确字符",
            opacity:0.8
        });
        return false;
    }
    $.ajax({
        type: "POST",
        url: "auth/login",
        data: { usr: name, pwd: pw, vcode: code},
        datatype: 'text',
        success: function (e) {
            if (e.length == 4) {
                $.msgBox({type: "error",title: "错误",content:"账号或密码错误",opacity:0.8,afterClose: function (result) {window.location.reload()}});
            } else if (e.length == 5) {
                $.msgBox({type: "error",title: "错误",content:"验证码错误",opacity:0.8,afterClose: function (result) {window.location.reload()}});
            } else $(".showinfo").html(e);
        }
    });
    return false;
}
function logout(){
    $.ajax({
        type: "POST",
        url: "auth/logout",
        datatype: 'text',
        success: function (e) {
            if (e.length == 4) {
                $.msgBox({type: "info",title: "成功",content:"账号已登出",opacity:0.8,afterClose: function (result) {window.location.reload()}});
            }
        },
        error: function (xhr){ alert("系统异常,请稍后再试"); }
    });
    return false;
}
function checkUN(username) {
    if (username.length < 1 || username.length > 20 ) {
        $(".alert").alert("账号长度不能少于 1 为或者高于 20 位");
        return false;
    } else {
        $("#nametip").removeClass().addClass("iptok").html("账号输入正确。");
        return true;
    }
}