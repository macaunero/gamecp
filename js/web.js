$(document).ready(function() {
	var options = {
		target:        '#member_panel',   // target element(s) to be updated with server response
		beforeSubmit:  showRequest,  // pre-submit callback
		success:       showResponse  // post-submit callback
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
	$('#login').ajaxForm(options); 
	$('.carousel').carousel({
		interval: 3000
	});
	$('#forgot').click(function(){
		$('#fpw').dialog('open');
		return false;
	});
	$('#fpw').dialog({
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
		},*/
		open: function(event, ui) {
			//$(".ui-dialog-titlebar-close").text(Save);
		}
	});
});
function showRequest(formData, jqForm, options) {
	var form = jqForm[0]; 
	if (!form.username.value || !form.password.value) {
		alert('请输入用户名或密码');
		return false;
	}
	//return true;
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