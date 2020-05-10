$(window, document).ready(function () {
	$(document).scroll(function () {
		if ($(document).scrollTop() > 64) {
			$('header').addClass('shadow');
			$('header > nav.menu-link-container > a.menu-link').addClass('scrolled');
			$('header > nav.menu-link-container > i.more_vert').css('color', 'rgba(0, 0, 0, 1)');
		}
		else {
			$('header').removeClass('shadow');
			$('header > nav.menu-link-container > a.menu-link').removeClass('scrolled');
			$('header > nav.menu-link-container > i.more_vert').css('color', 'rgba(255, 255, 255, 1)');
		}
	});
    $('header > i.menu').click(function () {
        $('nav.mobile-menu-link-container').addClass('opened');
        $('div.grey-overlay').removeClass('display-none');
        $('body').css('overflow', 'hidden');
    });
    $('nav.mobile-menu-link-container > div:first-child > i:first-child').click(function () {
        $('nav.mobile-menu-link-container').removeClass('opened');
        $('div.grey-overlay').addClass('display-none');
        $('body').css('overflow', 'auto');
    });
    $('.slider-active').owlCarousel({
        loop: true,
        navText: ['<i class="material-icons">chevron_left</i>', '<i class="material-icons">chevron_right</i>'],
        //animateOut: slideInLeft,
        //animateIn: slideInRight,
        nav: true,
        autoplay: true,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1
            }
        },
        slideSpeed : 5000,
        autoplaySpeed:2000,
    });
	$(window).scroll(function () {
		if ($(this).scrollTop() > $(window).height()) {
			$('div.up-arrow').addClass('display-block');
		}
		else {
			$('div.up-arrow').removeClass('display-none');
		}
	}).resize(function () {
		$(window).height = $(this).height();
	});
});
