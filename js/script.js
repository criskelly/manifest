$(document).ready(function() {

	// makes list of cities and bands visible
	$('li').click(function() {
			$(this).next('ul').toggleClass('disappear');
			if ( $(this).hasClass('hideBg')) {
				$(this).removeClass('hideBg');
			} else {	
				$(this).addClass('hideBg');
			}
  	}); // end click


	// makes band self-description and website link appear
	$('.band').click(function() {
  		$(this).next('li').addClass('selfDesc').fadeToggle('400').toggleClass('webSite');
  	}); // end click

}); // end ready







 

