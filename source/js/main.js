$(window).load(function(){
     $('.preloader').fadeOut('slow');
});


/* =Main INIT Function
-------------------------------------------------------------- */
function initializeSite() {

	"use strict";

	//OUTLINE DIMENSION AND CENTER
	(function() {
	    function centerInit(){

			var sphereContent = $('.sphere'),
				sphereHeight = sphereContent.height(),
				parentHeight = $(window).height(),
				topMargin = (parentHeight - sphereHeight) / 2;

			sphereContent.css({
				"margin-top" : topMargin+"px"
			});

			var heroContent = $('.hero'),
				heroHeight = heroContent.height(),
				heroTopMargin = (parentHeight - heroHeight) / 2;

			heroContent.css({
				"margin-top" : heroTopMargin+"px"
			});

	    }

	    $(document).ready(centerInit);
		$(window).resize(centerInit);
	})();

	// Init effect 
	$('#scene').parallax();

};
/* END ------------------------------------------------------- */

/* =Document Ready Trigger
-------------------------------------------------------------- */
$(window).load(function(){

	initializeSite();
	(function() {
		setTimeout(function(){window.scrollTo(0,0);},0);
	})();

	//$.ajax({
	//	url: '../../models/getgift.php?action=getgiftdata',
	//	method: 'POST',
	//	success: function(gift_data){
	//		data_gift = gift_data.split(";");
	//		data_length = data_gift.length-1;
	//		$('.gift').text(data_length);
	//	}
	//});

});
/* END ------------------------------------------------------- */


(function(){
    $(".getgift").on('click', function(){
		$.ajax({
			url: '../../models/getgift.php',
			method: 'POST',
			success: function(gift_data){
				$('.gift').text(gift_data);
			}
		});
	});	
})();