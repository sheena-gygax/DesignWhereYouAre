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
		}

	}

	$(window).on("debouncedresize", function(e){
		designWhereYouAre.resizeMenu();
	});

	$(document).ready(function($) {
		designWhereYouAre.alterHamburgerMenu();
	});
});