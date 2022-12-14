 /*global jQuery:false */
 jQuery(document).ready(function($) {
 	"use strict";

 	


 // for hover dropdown menu
 jQuery('ul.nav li.dropdown').hover(function() {
 	jQuery(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(200);
 }, function() {
 	jQuery(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(200);
 });


//  isotope
$('#projects').waitForImages(function () {
	var $container = $('.portfolio_container');
	$container.isotope({
		filter: '*',
	});

	$('.portfolio_filter a').click(function () {
		$('.portfolio_filter .active').removeClass('active');
		$(this).addClass('active');

		var selector = $(this).attr('data-filter');
		$container.isotope({
			filter: selector,
			animationOptions: {
				duration: 500,
				animationEngine: "jquery"
			}
		});
		return false;
	});

});


	var ssLightGallery = function() {

		$('#folio-wrap').lightGallery({  
			showThumbByDefault: false,
			hash: false,
			selector: ".item-wrap"		
		});
	}; 

//animatedModal
$("#mid1,#mid2,#mid3").animatedModal();

$("#rau1,#rau2,#rau3").animatedModal2();

$("#vic1,#vic2,#vic3").animatedModal3();

});

