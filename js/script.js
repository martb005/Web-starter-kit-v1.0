/*
 * @author Martin Bussières
 * @copyright Martin Bussières
 */

jQuery(function($) {

	// SVG to PNG
	if ($.browser.msie){
		$('html').addClass('ie').addClass('ie'+parseInt($.browser.version,10));
	}

	$(function() {
		svgeezy.init();
	});

});