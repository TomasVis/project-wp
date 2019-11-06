"use strict";


$(document).ready(function(){


	$('.burger').click(function(){


					$('.nav').toggleClass('show');
				});
	$('li a').click(function(){

					$('.nav').toggleClass('show');
				});

	$('.container').owlCarousel({
		items:3,
		margin: 0,
		nav: true,
		dots: false,
		loop: true,
		stagePadding:0,
		navText: ["&#x3008;","&#x3009;"],
		responsiveClass:true,
    		responsive:{
	        0:{
	            items:1           
	        },
	        600:{
	            items:1
	      
	
	        },
	        900:{
	        	items:2
	        },
	        1200:{
	        	items:3
	        }
	        
    }
		
	});

	$('.container1').owlCarousel({
		items:1,
		nav: true,
		dots: false,
		loop: true,
		stagePadding:50,
		margin:50,
		
		onInitialized:init,
		stagePadding:0,
		navText: ["&#x3008;","&#x3009;"],
		responsiveClass:true,
/*    		responsive:{
	        0:{
	            items:1           
	        },
	        600:{
				items:1
	
	        },
	        900:{
	        	items:1
	        },
	        1200:{
	        	items:1
	        }
	        
    }*/
	       		
	});


 function init (e){
  $('.numbering').text(e.relatedTarget.relative(e.item.index)+1 + ' / ' + e.item.count)
}


	$('.container1').on('changed.owl.carousel', function(e) {
  if (!e.namespace || e.property.name != 'position') return
  $('.numbering').text(e.relatedTarget.relative(e.item.index)+1 + ' / ' + e.item.count)
});




});
