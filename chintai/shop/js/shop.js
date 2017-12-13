//<![CDATA[








var tohomap = '<iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.jp/maps?f=d&amp;source=s_d&amp;saddr=33.233483,+131.606530&amp;daddr=33.235316,+131.612284&amp;geocode=FUsa-wEdAijYBw%3BFXQh-wEdfD7YBw&amp;sll=33.234434,131.610407&amp;sspn=0.00586,0.008701&amp;hl=ja&amp;brcurrent=3,0x35469f6514a73ae5:0x82858b3d8d5872d9,0&amp;dirflg=w&amp;mra=ltm&amp;ie=UTF8&amp;t=m&amp;ll=33.23456,131.609087&amp;spn=0.009871,0.011995&amp;z=16&amp;output=embed"></iframe>';
var carmap = '<iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d520.1375266999361!2d131.61229521536794!3d33.2354576375675!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d33.2355744!2d131.6121372!4m5!1s0x0%3A0x72b40743700986b1!2zKOagqinjgr_jgqvjg6nkuI3li5XnlKM!3m2!1d33.2352838!2d131.6122172!5e0!3m2!1sja!2sjp!4v1492326048514" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>';


function SwitchMaps(obj , coad){
	jQuery('.info_more a').removeClass( 'on' );
	jQuery(obj).addClass( 'on' );
	jQuery('.shopmap').html( coad );
}





jQuery(document).ready(function(){
	
	jQuery('.slider').glide({
        autoplay: 5000,
		hoverpause:true,
        arrows: true,
        nav: true
    });
	

	jQuery('.toho .info_more a').click(function() {
		SwitchMaps(jQuery(this) , tohomap);
		return false;
	});
	
	jQuery('.bus .info_more a').click(function() {
		SwitchMaps(jQuery(this) , carmap);
		return false;
	});




});
// ]] > 