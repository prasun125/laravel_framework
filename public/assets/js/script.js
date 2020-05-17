$(window, document).ready(function () {
    $('header > i.menu').click(function () {
        $('nav.mobile-menu-link-container').addClass('opened');
        $('div.grey-overlay').removeClass('display-none');
        $('body').css('overflow', 'hidden');
    });
    $('div.grey-overlay').click(function () {
        $('nav.mobile-menu-link-container').removeClass('opened');
        $('div.grey-overlay').addClass('display-none');
        $('body').css('overflow', 'auto');
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
