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

            if(jQuery(".block-commerce-product-comparison") .length > 0) {
                var num = jQuery(".block-commerce-product-comparison").find("ul li").size();
                var text = jQuery(".block-commerce-product-comparison").find(".num-compare").text();
                text = text.replace("%", num);
                jQuery(".block-commerce-product-comparison").find(".num-compare").text(text);
            }
    	});
    } // End Attach
  }; // End Behaviors
})(jQuery, Drupal);