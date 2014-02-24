jQuery(function($) {

	// SVG to PNG
	$(function() {
		svgeezy.init();
	});

});

$(function() {
	// Contact form
	$('#form-contact').submit(function() { // Replace usual .PHP form action by javascript to decrease SPAM
		$(this).attr('action','sendmail.php');
	});

	// Transform placeholder to value for old browsers.
	if (!Modernizr.input.placeholder){
		$('input[placeholder],textarea[placeholder]').each(function() {
			$(this).data('placeholder',$(this).attr('placeholder'));
			$(this).focus(function() {
				if ($(this).val()==$(this).data('placeholder'))  $(this).val('');
			}).blur(function() { 
				if ($(this).val()=='')  $(this).val($(this).data('placeholder'));
			}).blur();
		});
	};

	// Smooth scrollling
	$('a[href*=#]:not([href=#])').click(function() {
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			if (target.length) {
				$('html,body').animate({
					scrollTop: target.offset().top
				}, 1000);
			return false;
			}
		}
	});

	// Scrollspy
	$('body').scrollspy({ target: '.navbar-collapse' })

});

// Responsive Menu
// var navigation = responsiveNav(".nav-collapse", { // Selector: The ID of the wrapper
// 	animate: true, // Boolean: Use CSS3 transitions, true or false
// 	transition: 200, // Integer: Speed of the transition, in milliseconds
// 	label: "Nav", // String: Label for the navigation toggle
// 	insert: "after", // String: Insert the toggle before or after the navigation
// 	customToggle: "", // Selector: Specify the ID of a custom toggle
// 	openPos: "relative", // String: Position of the opened nav, relative or static
// 	jsClass: "js", // String: 'JS enabled' class which is added to <html> el
// 	debug: false, // Boolean: Log debug messages to console, true or false
// 	init: function(){}, // Function: Init callback
// 	open: function(){}, // Function: Open callback
// 	close: function(){} // Function: Close callback
// });
