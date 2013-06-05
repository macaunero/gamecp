var regexString = {username: /^[A-Za-z0-9_]+$/,password: /^[A-Za-z0-9 _~!@#$%^&*()=+-.,;]+$/,vcode: /^[A-Za-z0-9]+$/,email: /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/};
var minleng = 4;
var maxleng = 20;
$(document).ready(function() {
    $('.carousel').carousel({
        interval: 3000
    });
    $('#forgot').click(function(){
        $('#fpw').modal({});
        return false;
    });
    $('#register').click(function(){
        $('#reg').modal({});
        return false;
    });
    $('#getpw').click(function(){
        var name = $("#fpw_name").val();
        var email = $("#fpw_email").val();
        var code = $("#fpw_vcode").val();
        if (name.length < minleng || name.length > maxleng) {
            $(".fpw_err_msg").html("账号不能低于 "+minleng+" 位或者高于 "+maxleng+" 位").hide();
            $(".fpw_err_msg").fadeIn(0);
            $(".fpw_err_msg").fadeOut(6000);
            $("#fpw_name").focus();
            return false;
        }
        if (!regexString.username.test(name)) {
            $(".fpw_err_msg").html("用户名格式错误").hide();
            $(".fpw_err_msg").fadeIn(0);
            $(".fpw_err_msg").fadeOut(6000);
            $("#fpw_name").focus();
            return false;
        }
        if (!regexString.email.test(email) || email.length <= 0) {
            $(".fpw_err_msg").html("电邮格式错误").hide();
            $(".fpw_err_msg").fadeIn(0);
            $(".fpw_err_msg").fadeOut(6000);
            $("#fpw_email").focus();
            return false;
        }
        if (code.length <= 0) {
            $(".fpw_err_msg").html("请输入验证码").hide();
            $(".fpw_err_msg").fadeIn(0);
            $(".fpw_err_msg").fadeOut(6000);
            $("#fpw_vcode").focus();
            return false;
        }
        $.ajax({
            type: "POST",
            url: "auth/getpw",
            data: { name: name, email: email, vcode: code},
            datatype: 'text',
            success: function (e) {
                if (e.length == 2) {
                    $(".fpw_err_msg").html("发送成功，请到注册邮箱查收").css({'color': 'green'}).hide();
                    $(".fpw_err_msg").fadeIn(0);
                    window.setTimeout('window.location.reload()', 3000);
                } else if (e.length == 4) {
                    $(".fpw_err_msg").html("用户名或电邮错误").hide();
                    $(".fpw_err_msg").fadeIn(0);
                    $(".fpw_err_msg").fadeOut(6000);
                    return false;
                } else if (e.length == 5) {
                    $(".fpw_err_msg").html("验证码错误").hide();
                    $(".fpw_err_msg").fadeIn(0);
                    $(".fpw_err_msg").fadeOut(6000);
                    $("#fpw_vcode").focus();
                    return false;
                } else if (e.length == 4) {
                    $(".fpw_err_msg").html("电邮发送错误").hide();
                    $(".fpw_err_msg").fadeIn(0);
                    $(".fpw_err_msg").fadeOut(6000);
                    return false;
                }
            }
        });
        return false;
    });
    $('#goreg').click(function(){
        var name = $("#reg_name").val();
        var email = $("#reg_email").val();
        var pw = $("#reg_pw").val();
        var code = $("#reg_vcode").val();
        if (name.length < minleng || name.length > maxleng) {
            $(".reg_err_msg").html("账号不能低于 "+minleng+" 位或者高于 "+maxleng+" 位").hide();
            $(".reg_err_msg").fadeIn(0);
            $(".reg_err_msg").fadeOut(6000);
            $("#reg_name").focus();
            return false;
        }
        if (!regexString.username.test(name)) {
            $(".reg_err_msg").html("用户名格式错误").hide();
            $(".reg_err_msg").fadeIn(0);
            $(".reg_err_msg").fadeOut(6000);
            $("#reg_name").focus();
            return false;
        }
        if (!regexString.email.test(email) || email.length <= 0) {
            $(".reg_err_msg").html("电邮格式错误").hide();
            $(".reg_err_msg").fadeIn(0);
            $(".reg_err_msg").fadeOut(6000);
            $("#reg_email").focus();
            return false;
        }
        if (!regexString.password.test(pw) || pw.length <= 0) {
            $(".reg_err_msg").html("密码格式错误").hide();
            $(".reg_err_msg").fadeIn(0);
            $(".reg_err_msg").fadeOut(6000);
            $("#reg_pw").focus();
            return false;
        }
        if (code.length <= 0) {
            $(".reg_err_msg").html("请输入验证码").hide();
            $(".reg_err_msg").fadeIn(0);
            $(".reg_err_msg").fadeOut(6000);
            $("#reg_vcode").focus();
            return false;
        }
        $.ajax({
            type: "POST",
            url: "auth/register",
            data: { name: name, email: email, pass: pw, vcode: code},
            datatype: 'text',
            success: function (e) {
                if (e.length == 1) {
                    $(".reg_err_msg").html("用户名已被占用").hide();
                    $(".reg_err_msg").fadeIn(0);
                    $(".reg_err_msg").fadeOut(6000);
                    $("#reg_name").focus();
                    return false;
                } else if (e.length == 4) {
                    $(".reg_err_msg").html("注册错误").hide();
                    $(".reg_err_msg").fadeIn(0);
                    $(".reg_err_msg").fadeOut(6000);
                    return false;
                } else if (e.length == 5) {
                    $(".reg_err_msg").html("验证码错误").hide();
                    $(".reg_err_msg").fadeIn(0);
                    $(".reg_err_msg").fadeOut(6000);
                    $("#reg_vcode").focus();
                    return false;
                } else {
                    $(".reg_err_msg").html("注册成功，3秒后自动登入").css({'color': 'green'}).hide();
                    $(".reg_err_msg").fadeIn(0);
                    window.setTimeout('window.location.reload()', 3000);
                }
            }
        });
        return false;
    });
    $('#rpw').click(function(){
        var email = $("#rpw_email").val();
        var key = $("#rpw_key").val();
        var pw = $("#rpw_pw").val();
        if (!regexString.password.test(pw) || pw.length <= 0) {
            $(".rpw_err_msg").html("密码格式错误").hide();
            $(".rpw_err_msg").fadeIn(0);
            $(".rpw_err_msg").fadeOut(6000);
            $("#rpw_pw").focus();
            return false;
        }
        $.ajax({
            type: "POST",
            url: "doreset",
            data: { email: email, vcode: key, pass: pw},
            datatype: 'text',
            success: function (e) {
                if (e.length == 2) {
                    $(".rpw_err_msg").html("密码重设成功，请重新登陆").css({'color': 'green'}).hide();
                    $(".rpw_err_msg").fadeIn(0);
                    window.setTimeout('window.location.reload()', 3000);
                } else if (e.length == 4) {
                    $(".rpw_err_msg").html("密码重设错误").hide();
                    $(".rpw_err_msg").fadeIn(0);
                    $(".rpw_err_msg").fadeOut(6000);
                    return false;
                }
            }
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
            content:"账号不能低于 "+minleng+" 位或者高于 "+maxleng+" 位",
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
function logout() {
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
        $(".alert").alert("账号长度不能少于 1 位或者高于 20 位");
        return false;
    } else {
        $("#nametip").removeClass().addClass("iptok").html("账号输入正确。");
        return true;
    }
}