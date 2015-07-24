/* Implement custom javascript here */
(function ($) {
  Drupal.behaviors.formfit = {
    attach: function (context, settings) {
      jQuery('.views-row button').empty();
    }
  };
})(jQuery);
