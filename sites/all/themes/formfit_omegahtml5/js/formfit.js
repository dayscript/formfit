(function ($, Drupal) {
  Drupal.behaviors.formfit_omega = {
    attach: function(context, settings) {
    	$(document).ready(function(){
    		/* Over images lines in home */
    		if(jQuery(".block-banner-home-lineas").length > 0) {
    			jQuery(".block-banner-home-lineas").find(".views-field-name").on({
    				mouseenter: function() {
                        jQuery(this).find(".field-content").addClass('color_display');
                        jQuery(this).next(".views-field-field-image").addClass( "img_filter_grey" );
                    }, mouseleave: function() {
                        jQuery(this).find(".field-content").removeClass('color_display');
                        jQuery(this).next(".views-field-field-image").removeClass( "img_filter_grey" );
                    }
    			});
    		}
    	});
    } // End Attach
  }; // End Behaviors
})(jQuery, Drupal);