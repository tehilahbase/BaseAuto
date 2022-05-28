(function ($) {

	"use strict";


	//Hide Loading Box (Preloader)
	function handlePreloader() {
		if ($('.preloader').length) {
			$('.preloader').delay(200).fadeOut(500);
		}
	}


	//Update Header Style and Scroll to Top
	function headerStyle() {
		if ($('.main-header').length) {
			var windowpos = $(window).scrollTop();
			var siteHeader = $('.main-header');
			var scrollLink = $('.scroll-to-top');
			if (windowpos >= 200) {
				siteHeader.addClass('fixed-header');
				scrollLink.fadeIn(300);
			} else {
				siteHeader.removeClass('fixed-header');
				scrollLink.fadeOut(300);
			}
		}
	}

	headerStyle();


	//Submenu Dropdown Toggle
	if ($('.main-header li.dropdown ul').length) {
		$('.main-header li.dropdown').append('<div class="dropdown-btn"><span class="fa fa-angle-down"></span></div>');

		//Dropdown Button
		$('.main-header li.dropdown .dropdown-btn').on('click', function () {
			$(this).prev('ul').slideToggle(500);
		});


		//Disable dropdown parent link
		$('.navigation li.dropdown > a').on('click', function (e) {
			e.preventDefault();
		});
	}


	//Revolution Slider
	if ($('.main-slider .tp-banner').length) {

		var MainSlider = $('.main-slider');
		var strtHeight = MainSlider.attr('data-start-height');
		var slideOverlay = "'" + MainSlider.attr('data-slide-overlay') + "'";

		$('.main-slider .tp-banner').show().revolution({
			dottedOverlay: slideOverlay,
			delay: 100000,
			startwidth: 1200,
			startheight: strtHeight,
			hideThumbs: 600,

			thumbWidth: 80,
			thumbHeight: 50,
			thumbAmount: 5,

			navigationType: "bullet",
			navigationArrows: "0",
			navigationStyle: "preview3",

			touchenabled: "on",
			onHoverStop: "off",

			swipe_velocity: 0.7,
			swipe_min_touches: 1,
			swipe_max_touches: 1,
			drag_block_vertical: false,

			parallax: "mouse",
			parallaxBgFreeze: "on",
			parallaxLevels: [7, 4, 3, 2, 5, 4, 3, 2, 1, 0],

			keyboardNavigation: "off",

			navigationHAlign: "center",
			navigationVAlign: "bottom",
			navigationHOffset: 0,
			navigationVOffset: 40,

			soloArrowLeftHalign: "left",
			soloArrowLeftValign: "center",
			soloArrowLeftHOffset: 20,
			soloArrowLeftVOffset: 20,

			soloArrowRightHalign: "right",
			soloArrowRightValign: "center",
			soloArrowRightHOffset: 20,
			soloArrowRightVOffset: 20,

			shadow: 0,
			fullWidth: "on",
			fullScreen: "off",

			spinner: "spinner4",

			stopLoop: "off",
			stopAfterLoops: -1,
			stopAtSlide: -1,

			shuffle: "off",

			autoHeight: "off",
			forceFullWidth: "on",

			hideThumbsOnMobile: "on",
			hideNavDelayOnMobile: 1500,
			hideBulletsOnMobile: "on",
			hideArrowsOnMobile: "on",
			hideThumbsUnderResolution: 0,

			hideSliderAtLimit: 0,
			hideCaptionAtLimit: 0,
			hideAllCaptionAtLilmit: 0,
			startWithSlide: 0,
			videoJsPath: "",
			fullScreenOffsetContainer: ""
		});

	}


	// Fact Counter
	function factCounter() {
		if ($('.fact-counter').length) {
			$('.fact-counter .counter-column.animated').each(function () {

				var $t = $(this),
					n = $t.find(".count-text").attr("data-stop"),
					r = parseInt($t.find(".count-text").attr("data-speed"), 10);

				if (!$t.hasClass("counted")) {
					$t.addClass("counted");
					$({
						countNum: $t.find(".count-text").text()
					}).animate({
						countNum: n
					}, {
							duration: r,
							easing: "linear",
							step: function () {
								$t.find(".count-text").text(Math.floor(this.countNum));
							},
							complete: function () {
								$t.find(".count-text").text(this.countNum);
							}
						});
				}

			});
		}
	}


	//Tabs Box
	if ($('.tabs-box').length) {
		$('.tabs-box .tab-buttons .tab-btn').on('click', function (e) {
			e.preventDefault();
			var target = $($(this).attr('data-tab'));

			if ($(target).is(':visible')) {
				return false;
			} else {
				target.parents('.tabs-box').find('.tab-buttons').find('.tab-btn').removeClass('active-btn');
				$(this).addClass('active-btn');
				target.parents('.tabs-box').find('.tabs-content').find('.tab').fadeOut(0);
				target.parents('.tabs-box').find('.tabs-content').find('.tab').removeClass('active-tab');
				$(target).fadeIn(300);
				$(target).addClass('active-tab');
			}
		});
	}


	//Testimonials Carousel Slider
	if ($('.testimonials-carousel').length) {
		$('.testimonials-carousel').owlCarousel({
			loop: true,
			margin: 30,
			nav: true,
			smartSpeed: 500,
			autoplay: 4000,
			navText: ['<span class="fa fa-angle-left"></span>', '<span class="fa fa-angle-right"></span>'],
			responsive: {
				0: {
					items: 1
				},
				600: {
					items: 1
				},
				800: {
					items: 2
				},
				1024: {
					items: 3
				},
				1200: {
					items: 3
				}
			}
		});
	}


	//Sponsors Slider
	if ($('.sponsors-slider').length) {
		$('.sponsors-slider').owlCarousel({
			loop: true,
			margin: 30,
			nav: true,
			smartSpeed: 500,
			autoplay: 4000,
			navText: ['<span class="fa fa-angle-left"></span>', '<span class="fa fa-angle-right"></span>'],
			responsive: {
				0: {
					items: 1
				},
				600: {
					items: 3
				},
				800: {
					items: 3
				},
				1024: {
					items: 4
				},
				1200: {
					items: 5
				}
			}
		});
	}


	//Single Item Slider
	if ($('.single-item-carousel').length) {
		$('.single-item-carousel').owlCarousel({
			loop: true,
			margin: 0,
			nav: true,
			smartSpeed: 700,
			autoplay: 4000,
			navText: ['<span class="fa fa-angle-left"></span>', '<span class="fa fa-angle-right"></span>'],
			responsive: {
				0: {
					items: 1
				},
				600: {
					items: 1
				},
				1200: {
					items: 1
				}
			}
		});
	}

	//Date Picker
	if ($('.datepicker').length) {
		$('.datepicker').datepicker();
	}

	//LightBox / Fancybox
	if ($('.lightbox-image').length) {
		$('.lightbox-image').fancybox({
			openEffect: 'fade',
			closeEffect: 'fade',
			helpers: {
				media: {}
			}
		});
	}


	//Mixitup Gallery
	if ($('.filter-list').length) {
		$('.filter-list').mixItUp({});
	}

	//Sortable Masonary with Filters
	function enableMasonry() {
		if ($('.masonry-gallery').length) {

			var winDow = $(window);
			// Needed variables
			var $container = $('.masonry-gallery .items-container');
			var $filter = $('.filter-btns');

			$container.isotope({
				filter: '*',
				masonry: {
					columnWidth: 0
				},
				animationOptions: {
					duration: 500,
					easing: 'linear'
				}
			});


			// Isotope Filter
			$filter.find('li').on('click', function () {
				var selector = $(this).attr('data-filter');

				try {
					$container.isotope({
						filter: selector,
						animationOptions: {
							duration: 500,
							easing: 'linear',
							queue: false
						}
					});
				} catch (err) {

				}
				return false;
			});


			winDow.on('resize', function () {
				var selector = $filter.find('li.active').attr('data-filter');

				$container.isotope({
					filter: selector,
					animationOptions: {
						duration: 500,
						easing: 'linear',
						queue: false
					}
				});
			});


			var filterItemA = $('.filter-btns li');

			filterItemA.on('click', function () {
				var $this = $(this);
				if (!$this.hasClass('active')) {
					filterItemA.removeClass('active');
					$this.addClass('active');
				}
			});
		}
	}

	enableMasonry();


	//Contact Form Validation
	if ($('#contact-form').length) {
		$('#contact-form').submit(function (event) {
			event.preventDefault();
		});

		$('#contact-form').validate({
			rules: {
				firstname: {
					required: true
				},
				lastname: {
					required: true
				},
				email: {
					required: true,
					email: true
				},
				phone: {
					required: true
				},
				message: {
					required: true
				}
			},
			submitHandler: function () {
				send_mail();
			}
		});

		function send_mail() {
			var firstname = $('#contact-form input[name="firstname"]').val();
			var lastname = $('#contact-form input[name="lastname"]').val();
			var email = $('#contact-form input[name="email"]').val();
			var phone = $('#contact-form input[name="phone"]').val();
			var message = $('#contact-form textarea[name="message"]').val();
			$('#contact-form .response').html('<div class="text-center col-lg-12"><i class="fa fa-spinner fa-spin fa-2x fa-fw"></i> please wait...</div>');

			$.ajax({
				url: $('#contact-form').attr('formURL'),
				type: 'POST',
				data: { firstname: firstname, lastname: lastname, email: email, phone: phone, message: message },
				success: function (data) {
					$('#contact-form .response').html(data);
					$('#contact-form input[name="firstname"]').val('');
					$('#contact-form input[name="lastname"]').val('');
					$('#contact-form input[name="email"]').val('');
					$('#contact-form input[name="phone"]').val('');
					$('#contact-form textarea[name="message"]').val('');
				}
			});
		}
	}


	// Product Carousel
	if ($('.prod-image-carousel').length && $('.prod-thumbs-carousel').length) {

		var $sync3 = $(".prod-image-carousel"),
			$sync4 = $(".prod-thumbs-carousel"),
			flag = false,
			duration = 500;

		$sync3
			.owlCarousel({
				loop: false,
				items: 1,
				margin: 0,
				nav: true,
				navText: ['<span class="fa fa-angle-left"></span>', '<span class="fa fa-angle-right"></span>'],
				dots: false,
				autoplay: true,
				autoplayTimeout: 5000
			})
			.on('changed.owl.carousel', function (e) {
				if (!flag) {
					flag = false;
					$sync4.trigger('to.owl.carousel', [e.item.index, duration, true]);
					flag = false;
				}
			});

		$sync4
			.owlCarousel({
				loop: false,
				margin: 20,
				items: 1,
				nav: false,
				navText: ['<span class="icon fa fa-long-arrow-left"></span>', '<span class="icon fa fa-long-arrow-right"></span>'],
				dots: false,
				center: false,
				autoplay: true,
				autoplayTimeout: 5000,
				responsive: {
					0: {
						items: 1,
						autoWidth: false
					},
					400: {
						items: 2,
						autoWidth: false
					},
					600: {
						items: 3,
						autoWidth: false
					},
					1000: {
						items: 4,
						autoWidth: false
					},
					1200: {
						items: 4,
						autoWidth: false
					}
				},
			})

			.on('click', '.owl-item', function () {
				$sync3.trigger('to.owl.carousel', [$(this).index(), duration, true]);
			})
			.on('changed.owl.carousel', function (e) {
				if (!flag) {
					flag = true;
					$sync3.trigger('to.owl.carousel', [e.item.index, duration, true]);
					flag = false;
				}
			});

	}


	//Price Range Slider
	if ($('.range-slider-price').length) {

		var priceRange = document.getElementById('range-slider-price');

		noUiSlider.create(priceRange, {
			start: [100, 500],
			limit: 2000,
			behaviour: 'drag',
			connect: true,
			range: {
				'min': 100,
				'max': 2000
			}
		});

		var limitFieldMin = document.getElementById('min-value-rangeslider');
		var limitFieldMax = document.getElementById('max-value-rangeslider');

		priceRange.noUiSlider.on('update', function (values, handle) {
			(handle ? limitFieldMax : limitFieldMin).value = values[handle];
		});
	}


	//Hide Confirmation Popup
	if ($('.popup-outer').length) {
		$('.popup-outer .close-btn a').on('click', function (e) {
			e.preventDefault();
			$('.backdrop-overlay').fadeOut(500);
			$('.popup-outer').fadeOut(500);
			$('body').removeClass('popup-visible');
		});
	}


	// Scroll to a Specific Div
	if ($('.scroll-to-target').length) {
		$(".scroll-to-target").on('click', function () {
			var target = $(this).attr('data-target');
			// animate
			$('html, body').animate({
				scrollTop: $(target).offset().top
			}, 1000);

		});
	}


	// Elements Animation
	if ($('.wow').length) {
		var wow = new WOW(
			{
				boxClass: 'wow',      // animated element css class (default is wow)
				animateClass: 'animated', // animation css class (default is animated)
				offset: 0,          // distance to the element when triggering the animation (default is 0)
				mobile: false,       // trigger animations on mobile devices (default is true)
				live: true       // act on asynchronously loaded content (default is true)
			}
		);
		wow.init();
	}


	/* ==========================================================================
	   When document is Scrollig, do
	   ========================================================================== */

	$(window).on('scroll', function () {
		headerStyle();
		factCounter();
	});


	/* ==========================================================================
	   When document is loaded, do
	   ========================================================================== */

	$(window).on('load', function () {
		handlePreloader();
		enableMasonry();
	});



})(window.jQuery);