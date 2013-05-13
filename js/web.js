$(document).ready(function() {
	$('.carousel').carousel({
		interval: 2000
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