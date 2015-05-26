<section class="large-1 columns">
  <a aria-expanded="false" aria-controls="car-sale" data-dropdown="car-sale" class="button car-menu"><i class="fi-shopping-cart"></i> <?php print render($block->subject);?></a>
</section>
<ul aria-autoclose="false" aria-hidden="true" tabindex="-1" data-dropdown-content="" class="medium f-dropdown" id="car-sale" style="position: absolute; left: -99999px; top: 48px;">
    <h5><?php print t('Recently added items (s)');?></h5>
    <?php print render($content);?>
</ul>
