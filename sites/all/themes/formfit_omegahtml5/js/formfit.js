(function ($, Drupal) {
  Drupal.behaviors.formfit_omega = {
    attach: function(context, settings) {
    	$(document).ready(function(){
    		/* Over images lines in home */
    		if(jQuery(".banner-lineas").length > 0) {
                jQuery(".banner-lineas").find(".views-field-name").find(".field-content").addClass('color_display');
    			jQuery(".banner-lineas").find(".views-field-name").on({
    				mouseenter: function() {
                        jQuery(this).next(".field-name-field-image").addClass( "img_filter_grey" );
                    }, mouseleave: function() {
                        //jQuery(this).find(".field-content").removeClass('color_display');
                        jQuery(this).next(".field-name-field-image").removeClass( "img_filter_grey" );
                    }
    			});
    		}

            if(jQuery(".block-commerce-product-comparison") .length > 0) {
                var num = jQuery(".block-commerce-product-comparison").find("form ul li").size();
                var text = jQuery(".block-commerce-product-comparison").find(".num-compare").text();
                text = text.replace("%", num);
                jQuery(".block-commerce-product-comparison").find(".num-compare").text(text);
                /*jQuery(".block-commerce-product-comparison").on({
                    mouseenter: function() {
                        $( this ).find(".content").show();
                    }, mouseleave: function() {
                        $( this ).find(".content").hide();
                    }

                });*/
            }

            if(jQuery(".all-products").length > 0) {
                jQuery(".all-products").find("form").on({
                    mouseenter: function() {
                        jQuery(this).find(".form-submit").show();
                        jQuery(this).prev(".commerce-product-field-field-imagenes").addClass( "img_filter_white" );
                    }, mouseleave: function() {
                        jQuery(this).find(".form-submit").hide();
                        jQuery(this).prev(".commerce-product-field-field-imagenes").removeClass( "img_filter_white" );
                    }
                });
            }

            if(jQuery(".all-products-home").length > 0) {
                jQuery(".all-products-home").find("form").on({
                    mouseenter: function() {
                        jQuery(this).find(".form-submit").show();
                        jQuery(this).prev(".commerce-product-field-field-imagenes").addClass( "img_filter_white" );
                    }, mouseleave: function() {
                        jQuery(this).find(".form-submit").hide();
                        jQuery(this).prev(".commerce-product-field-field-imagenes").removeClass( "img_filter_white" );
                    }
                });
            }
    	});
    } // End Attach
  }; // End Behaviors
})(jQuery, Drupal);