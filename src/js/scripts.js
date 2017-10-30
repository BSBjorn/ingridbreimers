(function( root, $, undefined ) {
	"use strict";

	$(function () {
		// DOM ready, take it away

			$(".unSlider").unslider({
				nav: true,
				autoplay: true,
				infinite: true
			});

			$( "figure" ).click(function() {
				$( "figure").css({
					"flex":"0 0 33.3332%"
				});
  			$(this).css({
					"flex":"0 0 100%"
				});
			});
	});

} ( this, jQuery ));
