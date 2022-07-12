(function ($, root, undefined) {
	
	$(function () {
		'use strict';

		$("header input.search-input").attr({"placeholder": "Digite aqui"});

		$(document).on("click", "button.search-submit", function (e) {
			let text = $("header input.search-input").eq(0)
			text.css({"placeholder": "Digite aqui"});

			if ( $("header input.search-input").css("opacity") === "0" && text.val() == "" ) {
				e.preventDefault();
				text.val("").css({"opacity":"1"}).focus();
			}
			console.log( $("header input.search-input").css("opacity") );
		})



		// Hide Header on on scroll down ---
		var didScroll;
		var lastScrollTop = 0;
		var delta = 5;
		var navbarHeight = $('.header .stm-header').outerHeight() - 50;

		$(window).scroll(function(event){
			didScroll = true;

			if (didScroll) {
				hasScrolled();
				didScroll = false;
			}
		});


		function hasScrolled() {
			var st = $(window).scrollTop();

			if(Math.abs(lastScrollTop - st) <= delta)
				return;

			// If they scrolled down and are past the navbar, add class .nav-up.
			// This is necessary so you never see what is "behind" the navbar.
			if (st > lastScrollTop && st > navbarHeight){
			// Scroll Down
			$('.header').addClass('active');
		} else {
			// Scroll Up
			if(st < lastScrollTop && st < navbarHeight) {
				$('.header').removeClass('active');
			}
		}

		lastScrollTop = st;
	}


	$('.scrollTop').click(function(){
		$("html, body").animate({ scrollTop: 0 }, 600);
		return false;
	});

	if ($('.slider-1')) {
		$('.slider-1').slick({
			autoplay: true,
			dots: false,
			infinite: true,
			speed: 4000,
			slidesToShow: 4,
			slidesToScroll: 4,
			prevArrow:'.slider-1-seta-esquerda',
			nextArrow:'.slider-1-seta-direita',
			responsive: [
			{
				breakpoint: 1024,
				settings: {
					slidesToShow: 4,
					slidesToScroll: 4,
					infinite: true,
				}
			},
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 3,
				}
			},
			{
				breakpoint: 600,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 2
				}
			},
			{
				breakpoint: 480,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 2
				}
			},
			]
		});
	}


	$('select option[value="Como nos conheceu?"]').val("");

	$('[name="nos-conheceu"]').change(function () {
		if ($(this).val() == "Outros" ) {
			$(".form-group.nos-conheceu").prepend('<input type="text" name="nos-conheceu" placeholder="Digite aqui como nos conheceu?" />')
			$(this).attr("disabled",true).hide();

		}
	})


	$(document).ready(function () {
		Utils.Masks();
	})

});
	
})(jQuery, this);
