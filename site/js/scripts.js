(function ($) {
	"use strict";



	/*

	Menu

	*/
	var primaryNav = $('.primary-nav'),
		primaryNavTopPosition = primaryNav.offset().top,
		taglineOffesetTop = $('#home h1').offset().top + $('#home h1').height() + parseInt($('#home h1').css('paddingTop').replace('px', '')),
		contentSections = $('.section');
	$(window).on('scroll', function(){
		if($(window).scrollTop() > primaryNavTopPosition ) {
			primaryNav.addClass('is-fixed');
			setTimeout(function() {
				primaryNav.addClass('animate-children');
			}, 50);
		} else {
			primaryNav.removeClass('is-fixed');
			setTimeout(function() {
				primaryNav.removeClass('animate-children');
			}, 50);
		}
	});
	primaryNav.find('ul a').on('click', function(event){
		event.preventDefault();
		var target= $(this.hash);
		$('body,html').animate({
			'scrollTop': target.offset().top - primaryNav.height() + 1
			}, 400
		);
		primaryNav.find('ul').removeClass('is-visible');
	});




	/*

	Responsive Menu

	*/
	var offset = 300;
	var navigationContainer = $('#rwd-nav'),
		mainNavigation = navigationContainer.find('#rwd-main-nav ul');
	checkMenu();
	$(window).scroll(function(){
		checkMenu();
	});
	$('.rwd-nav-trigger').on('click', function(){
		$(this).toggleClass('menu-is-open');
		mainNavigation.off('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend').toggleClass('is-visible');
	});
	$('#rwd-nav li a').on('click', function(event){
		event.preventDefault();
		var target= $(this.hash);
		$('body,html').animate({
			'scrollTop': target.offset().top - primaryNav.height() + 1
			}, 400
		);
		$('.rwd-nav-trigger').toggleClass('menu-is-open');
		mainNavigation.off('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend').toggleClass('is-visible');
	});
	function checkMenu() {
		if( $(window).scrollTop() > offset && !navigationContainer.hasClass('is-fixed')) {
			navigationContainer.addClass('is-fixed').find('.rwd-nav-trigger').one('webkitAnimationEnd oanimationend msAnimationEnd animationend', function(){
				mainNavigation.addClass('has-transitions');
			});
		} else if ($(window).scrollTop() <= offset) {
			if( mainNavigation.hasClass('is-visible')  && !$('html').hasClass('no-csstransitions') ) {
				mainNavigation.addClass('is-hidden').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
					mainNavigation.removeClass('is-visible is-hidden has-transitions');
					navigationContainer.removeClass('is-fixed');
					$('.rwd-nav-trigger').removeClass('menu-is-open');
				});
			} else if( mainNavigation.hasClass('is-visible')  && $('html').hasClass('no-csstransitions') ) {
					mainNavigation.removeClass('is-visible has-transitions');
					navigationContainer.removeClass('is-fixed');
					$('.rwd-nav-trigger').removeClass('menu-is-open');
			} else {
				navigationContainer.removeClass('is-fixed');
				mainNavigation.removeClass('has-transitions');
			}
		} 
	}




	/*

	Scroll To Top

	*/
	var offset = 300,
		offset_opacity = 1200,
		scroll_top_duration = 700,
		$back_to_top = $('.go-top');
	$(window).scroll(function(){
		( $(this).scrollTop() > offset ) ? $back_to_top.addClass('go-top-is-visible') : $back_to_top.removeClass('go-top-is-visible go-top-fade-out');
		if( $(this).scrollTop() > offset_opacity ) { 
			$back_to_top.addClass('go-top-fade-out');
		}
	});
	$back_to_top.on('click', function(event){
		event.preventDefault();
		$('body,html').animate({
			scrollTop: 0 ,
		 	}, scroll_top_duration
		);
	});



	/*

	SMOOTH MOUSEWHEEL SCROLL

	*/
	var $window = $(window);
	var scrollTime = .35;
	var scrollDistance = 170;
	$window.on("mousewheel DOMMouseScroll", function(event){
		event.preventDefault();
		var delta = event.originalEvent.wheelDelta/120 || -event.originalEvent.detail/3;
		var scrollTop = $window.scrollTop();
		var finalScroll = scrollTop - parseInt(delta*scrollDistance);
		TweenMax.to($window, scrollTime, {
			scrollTo : { y: finalScroll, autoKill:true },
				ease: Power1.easeOut,
				overwrite: 5
			});
	});



	/*

	CLIENT SLIDER

	*/
	$('#client-slider').owlCarousel({
		autoPlay: false,
		items: 5
	});



	/*

	ALERTS

	*/
	$('.alert').bind('inview', function(event, isInView, visiblePartX, visiblePartY) {
		if (isInView) {
			$(this).addClass('in');
		}
	});



	/*

	TESTIMONIAL SLIDER

	*/
	$('#testimonial-slider').owlCarousel({
		slideSpeed: 300,
		autoPlay: true,
		singleItem: true
	});
	$('#testimonial-detail-slider').owlCarousel({
		navigation: true,
		pagination: false,
		slideSpeed: 300,
		transitionStyle: "fade",
		autoPlay: true,
		singleItem: true,
		navigationText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>']
	});



	$('.tool-tip').tooltip();



	/*

	CONTACT FORM

	*/
	$('#contact-form').submit(function() {
		$('#contact-error').fadeOut();
		$('#contact-success').fadeOut();
		$('#contact-loading').fadeOut();
		$('#contact-loading').fadeIn();
		if (validateEmail($('#contact-email').val()) && $('#contact-email').val().length !== 0 && $('#contact-name').val().length !== 0 && $('#contact-message').val().length !== 0) {
			var action = $(this).attr('action');
			$.ajax({
				type: "POST",
				url : action,
				data: {
					contact_name: $('#contact-name').val(),
					contact_email: $('#contact-email').val(),
					contact_subject: $('#contact-subject').val(),
					contact_message: $('#contact-message').val()
				},
				success: function() {
					$('#contact-error').fadeOut();
					$('#contact-success').fadeOut();
					$('#contact-loading').fadeOut();
					$('#contact-success').html('Success! Thanks for contacting us!').fadeIn();
				},
				error: function() {
					$('#contact-error').fadeOut();
					$('#contact-success').fadeOut();
					$('#contact-loading').fadeOut();
					$('#contact-error').html('Sorry, an error occurred.').fadeIn();
				}
			});
		} else if (!validateEmail($('#contact-email').val()) && $('#contact-email').val().length !== 0 && $('#contact-name').val().length !== 0 && $('#contact-message').val().length !== 0) {
			$('#contact-error').fadeOut();
			$('#contact-success').fadeOut();
			$('#contact-loading').fadeOut();
			$('#contact-error').html('Please enter a valid email.').fadeIn();
		} else {
			$('#contact-error').fadeOut();
			$('#contact-success').fadeOut();
			$('#contact-loading').fadeOut();
			$('#contact-error').html('Please fill out all the fields.').fadeIn();
		}
		return false;
	});



	/*

	NEWSLETTER FORM

	*/
	$('#newsletter-form').submit(function() {
		$('#newsletter-error').fadeOut();
		$('#newsletter-success').fadeOut();
		$('#newsletter-loading').fadeOut();
		$('#newsletter-loading').fadeIn();
		if (validateEmail($('#newsletter-email').val()) && $('#newsletter-email').val().length !== 0) {
			var action = $(this).attr('action');
			$.ajax({
				url: action,
				type: 'POST',
				data: {
					newsletter_email: $('#newsletter-email').val()
				},
				success: function(data) {
					$('#newsletter-error').fadeOut();
					$('#newsletter-success').fadeOut();
					$('#newsletter-loading').fadeOut();
                    $('#newsletter-success').html(data).fadeIn();
                },
                error: function() {
					$('#newsletter-error').fadeOut();
					$('#newsletter-success').fadeOut();
					$('#newsletter-loading').fadeOut();
                    $('#newsletter-error').html('Sorry, an error occurred.').fadeIn();
                }
			});
		} else {
			$('#newsletter-error').fadeOut();
			$('#newsletter-success').fadeOut();
			$('#newsletter-loading').fadeOut();
			$('#newsletter-error').html('Please enter a valid email.').fadeIn();
		}
		return false;
	});


	
	/*

	VALIDATE EMAIL

	*/
	function validateEmail($validate_email) {
		var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
		if( !emailReg.test( $validate_email ) ) {
			return false;
		} else {
			return true;
		}
	}



	/*

	INTENSE

	*/
	var elements = document.querySelectorAll('.img-popup');
	Intense(elements);

	

})($);