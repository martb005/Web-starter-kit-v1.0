/*
 * @author Martin Bussières
 * @copyright Martin Bussières
 */

$(document).ready(function() {

	// SVG to PNG
	if ($.browser.msie && $.browser.version < 9) {
		$('img[src$=".svg"]').each(function() {
	        $(this).attr('src', $(this).attr('src').replace('.svg', '.png'));
	    });
	}

});

$(document).ready(function() {
	// SVG to PNG
	if ($.browser.msie && $.browser.version < 9) {
		$('img[src$=".svg"]').each(function() {
			$(this).attr('src', $(this).attr('src').replace('.svg', '.png'));
		});
	}
});