var regexString = {username: /^[A-Za-z0-9_]+$/,password: /^[A-Za-z0-9 _~!@#$%^&*()=+-.,;]+$/}
$(document).ready(function() {
	var options = {
		target:        '#member_panel',   // target element(s) to be updated with server response
		beforeSubmit:  showRequest,  // pre-submit callback
		//success:       showResponse  // post-submit callback
		// other available options:
		//url:       url         // override for form's 'action' attribute
		//type:      type        // 'get' or 'post', override for form's 'method' attribute
		//dataType:  null        // 'xml', 'script', or 'json' (expected server response type)
		//clearForm: true        // clear all form fields after successful submit
		//resetForm: true        // reset the form after successful submit
		// $.ajax options can be used here too, for example:
		//timeout:   3000
	};
	// bind form using 'ajaxForm' 
	/*$('#login').ajaxForm({
		beforeSubmit:  showRequest,
		url: 'login',
		target: '#member_panel',
		success: function (msg) {
			$('#member_panel').html(msg);
			return false;
			/*$('#member_panel').fadeIn('slow', function () {
				
			});
		}
	});*/
	$('.carousel').carousel({
		interval: 3000
	});
	$('#forgot').click(function(){
		$('#fpw').modal({
			//backdrop: false
		});
		return false;
	});
	/*$('#fpw').dialog({
		height: 150,
		autoOpen: false,
		modal: true,
		/*buttons: {
			"Close": {
				text: 'o',
				class: 'btn',
				click:function() {
					$(this).dialog("close");
				}
			}
		},
		open: function(event, ui) {
			$(".ui-widget-overlay").css({
				opacity: 0.8,
				filter: "Alpha(Opacity=80)",
				background: "#000"
			});
			//$(".ui-dialog-titlebar-close").text(Save);
		}
	});*/
});
function showRequest(formData, jqForm, options) {
	var form = jqForm[0]; 
	if (!form.username.value || !form.password.value || !form.vcode.value) {
		alert('请输入用户名或密码或验证码');
		return false;
	}
}
function showResponse(responseText, statusText, xhr, $form) {
	// for normal html responses, the first argument to the success callback
	// is the XMLHttpRequest object's responseText property
	// if the ajaxSubmit method was passed an Options Object with the dataType
	// property set to 'xml' then the first argument to the success callback
	// is the XMLHttpRequest object's responseXML property
	// if the ajaxSubmit method was passed an Options Object with the dataType
	// property set to 'json' then the first argument to the success callback
	// is the json data object returned by the server
	alert('status: ' + statusText + '\n\nresponseText: \n' + responseText + '\n\nThe output div should have already been updated with the responseText.');
}
function login() {
	var name = $("#username").val();
	var pw = $("#password").val();
	var code = $("#vcode").val();
	//console.log(regexString.password.test(pw));
	$("#username").alert();
	/*if (!regexString.username.test(name) || !regexString.password.test(pw) || !regexString.vcode.test(code)) {
		
	}*/
	//if (regexString.username.test(name) && regexString.password.test(pw))
	//alert(regexEnum);
	//if(reg.test($("#username").val())) alert('a');
	//alert('b');
	/*if ($("#username").val().length < allowLen || $("#txtUserName").val().length > 32) {
        $("#nametip").removeClass().addClass("ipterror").html("账号不能低于"+allowLen+"为或者高于32位。");
        return false;
    } else {
        $("#nametip").removeClass().addClass("iptok").html("账号输入正确。");
        return true;
    }*/
}
function checkUN(username) {
    if (username.length < 1 || username.length > 20 ) {
        //alert();
        $(".alert").alert("账号长度不能少于 1 为或者高于 20 位");
        return false;
    } else {
        $("#nametip").removeClass().addClass("iptok").html("账号输入正确。");
        return true;
    }
}