jQuery(document).ready(function(){	







$('#load_file_head .view_check').change(function(){
	if ($(this).is(':checked')) {
		view_check_on();
	} else {
		view_check_off();
	}
});




}); //jQuery(document).ready







function view_check_on(){
	$(".view_check").prop("checked",true);
}
function view_check_off(){
	$(".view_check").prop("checked",false);
}






























var w;
var timer = false;
$(window).on('load resize', function(){
	SwitchDevice();
});

SwitchDevice();
function SwitchDevice(){
	w = window.innerWidth || document.documentElement.clientWidth;
	if (w > 768) {
	jQuery("html").addClass('device-desktop');
	jQuery("html").removeClass('device-mobile');
	} else {
	jQuery("html").addClass('device-mobile');
	jQuery("html").removeClass('device-desktop');
	}
};