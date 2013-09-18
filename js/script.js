/*
 * @author Martin Bussières
 * @copyright Martin Bussières
 */

jQuery(function($) {

	// Add Class to HTML tag if lte IE 10
	if ($.browser.msie){
		$('html').addClass('ie').addClass('ie'+parseInt($.browser.version,10));
	}
	// SVG to PNG
	$(function() {
		svgeezy.init();
	});

});

// Contact form
$(function() {
	$('#form-contact').submit(function() { // Replace usual .PHP form action by javascript to decrease SPAM
		$(this).attr('action','sendmail.php');
	});
});