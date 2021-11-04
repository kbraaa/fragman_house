$(document).ready(function() {
	$('.owl1').owlCarousel({

		loop:true,
		dots:false,
		items:6,
		margin:10,
		responsiveClass:true,
		stagePadding: 50,
		autoplayHoverPause: true,
		autoplay:true,
		autoplayTimeout:3000,
		nav: true,
		navText: ["<i class='fas fa-chevron-left'></i>", "<i class='fas fa-chevron-right'></i>"],

		responsive:{
			0:{
				items:1,
				nav:false
			},
			600:{
				items:2,
				nav:false
			},
			900:{
				items:3,
				nav:false
			},
				901:{
				items:6,
			}
		},

	});

	$('.owl2').owlCarousel({

		loop:true,
		dots:false,
		items:6,
		margin:10,
		responsiveClass:true,
		autoplay:true,
		nav:true,
		autoplayHoverPause: true,
		autoplayTimeout:3000,
		navText: ["<i class='fas fa-chevron-left'></i>", "<i class='fas fa-chevron-right'></i>"],

		responsive:{
			0:{
				items:1,
				nav:false
			},
			600:{
				items:2,
				nav:false
			},
			900:{
				items:3,
				nav:false
			},
			901:{
				items:6,
			}

		},

	});


});

