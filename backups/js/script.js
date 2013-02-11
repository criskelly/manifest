/* Author: Cris Kelly

*/

$(document).ready(function() {

	// makes list of cities and bands visible
	$('li').click(function() {
			$(this).next().removeClass('disappear');
  	}); // end click
}); // end ready




