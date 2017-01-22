jQuery(function($) { 
	var designWhereYouAre = {

		slideOutNav: function(){
			if ($(window).width() <= 978){
				return true;
			}
		},

		resizeMenu: function(){
			var slideNav = $.find('.shiftnav-open-target');
			if (!this.slideOutNav() === true && slideNav.length == 1) {
				$('body').removeClass('shiftnav-open');
			}
		},

		alterHamburgerMenu: function(){
			var spans = ("<span></span> \
  								 <span></span> \
  								 <span></span>"),
					menu = $.find('.shiftnav-toggle-burger');

			$(menu).append(spans);
			$(menu).find('i').remove();
		},

		shiftContent: function(){
			var content = $.find('.single-post #main aside');
			if ($(window).width() <= 978 && content.length > 0) {
				$(content[0]).insertBefore('.single-post #main section');
			} else {
				$(content[0]).insertAfter('.single-post #main section');
			}
		},

		mobileLogo: function(){
			var mobileNav = $.find('.shiftnav-main-toggle-content');
			var logo = $.find('.site-branding');
			if ($(window).width() <= 978 && mobileNav.length > 0) {
				$(mobileNav).append(logo);
			} else {
				$('.site-header-main').prepend(logo);
			}
		}

	}

	$(window).on("debouncedresize", function(e){
		designWhereYouAre.resizeMenu();
		designWhereYouAre.shiftContent();
		designWhereYouAre.mobileLogo();
	});

	$(document).ready(function($) {
		designWhereYouAre.alterHamburgerMenu();
		designWhereYouAre.shiftContent();
		designWhereYouAre.mobileLogo();
	});
});