jQuery(document).ready(function(){	








$(".view_colum span").click(function () {
	sort_switch($(this));
	return false;
});



$('.view_head .view_check').change(function(){
	if ($(this).is(':checked')) {
		view_check_on();
	} else {
		view_check_off();
	}
});


$('.old-select option:selected').change(function(){
	alert($(this).val());
});





$(".view_row").hover(
  function () {
    $(this).addClass('hover');
  },
  function () {
    $(this).removeClass('hover');
  }
);





// プルダウン
// Design tiré du site flatuicolors.com

var countOption = $('.old-select option').size();

function openSelect(){
var heightSelect = $('.new-select').height();
var j=1;
$('.new-select .new-option').each(function(){
    $(this).addClass('reveal');
    $(this).css({
        'box-shadow':'0 1px 1px rgba(0,0,0,0.1)',
        'left':'0',
        'right':'0',
        'top': j*(heightSelect+1)+'px'
    });
    j++;
});
}

function closeSelect(){
var i=0;
$('.new-select .new-option').each(function(){
    $(this).removeClass('reveal');
    if(i<countOption-3){
        $(this).css('top',0);
        $(this).css('box-shadow','none');
    }
    else if(i===countOption-3){
        $(this).css('top','3px');
    }
    else if(i===countOption-2){
        $(this).css({
            'top':'7px',
            'left':'2px',
            'right':'2px'
        });
    }
    else if(i===countOption-1){
        $(this).css({
            'top':'11px',
            'left':'4px',
            'right':'4px'
        });
    }
    i++;
});
}

// Initialisation
if($('.old-select option[selected]').size() === 1){
$('.selection p span').html($('.old-select option[selected]').html());
}
else{
$('.selection p span').html($('.old-select option:first-child').html());
}

$('.old-select option').each(function(){
newValue = $(this).val();
newHTML = $(this).html();
$('.new-select').append('<div class="new-option" data-value="'+newValue+'"><p>'+newHTML+'</p></div>');
});

var reverseIndex = countOption;
$('.new-select .new-option').each(function(){
$(this).css('z-index',reverseIndex);
reverseIndex = reverseIndex-1;        
});

closeSelect();


// Ouverture / Fermeture
$('.selection').click(function(){
$(this).toggleClass('open');
if($(this).hasClass('open')===true){openSelect();}
else{closeSelect();}
});


// Selection 
$('.new-option').click(function(){
var newValue = $(this).data('value');

// Selection New Select
$('.selection p span').html($(this).find('p').html());
$('.selection').click();

// Selection Old Select
$('.old-select option[selected]').removeAttr('selected');
$('.old-select option[value="'+newValue+'"]').attr('selected','');

// Visuellement l'option dans le old-select ne change pas
// mais la value selectionnée est bien pris en compte lors 
// de l'envoi du formulaire. Test à l'appui.

});






}); //jQuery(document).ready


















  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  


// ヘッダソート
function sort_switch(_this){
	if(_this.hasClass('des')){
		$(".view_colum span").removeClass("des");
		$(".view_colum span").removeClass("asc");
		_this.removeClass("des");
		_this.addClass("asc");
	}else{
		$(".view_colum span").removeClass("des");
		$(".view_colum span").removeClass("asc");
		_this.removeClass("asc");
		_this.addClass("des");
	}
	
	
}




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