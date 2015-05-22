<section class="large-1 columns">
  <a class="button car-menu" data-dropdown="car-sale" aria-controls="car-sale" aria-expanded="false"><i class="fi-shopping-cart"></i> <?php print render($block->subject);?></a>
  <ul id="car-sale" class="medium f-dropdown" data-dropdown-content tabindex="-1" aria-hidden="true" aria-autoclose="false" tabindex="-1">
    <?php print render($content);?>
  </ul>
</section>
