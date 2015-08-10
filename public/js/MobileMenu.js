var MobileMenu = {

	nav: $('.main-nav').clone(),
	aside: $('.main-sidebar').clone(),
	hamburger: $("#hamburger"),
	mobileNavWrapper: $('#mobile-nav-wrapper'),
	showing: false,

	init : function() {
		MobileMenu.hamburger.on('click touchstart', this.showMenu);
	},

	showMenu : function(e) {
		e.preventDefault();
		if (!MobileMenu.showing) {
			MobileMenu.hamburger.addClass('open');
			MobileMenu.mobileNavWrapper.prepend(MobileMenu.aside).addClass('open');
			MobileMenu.showing = true;
		}
		else {
			MobileMenu.hamburger.removeClass('open');
			MobileMenu.mobileNavWrapper.removeClass('open');
			setTimeout(function() {
				MobileMenu.mobileNavWrapper.empty();
				MobileMenu.showing = false;
			}, 255);
		}
	},
};

$(document).on('ready', function() {
	MobileMenu.init();
});