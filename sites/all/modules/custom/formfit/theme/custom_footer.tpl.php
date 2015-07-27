<div class="large-12 columns row">
  <div class="large-4 columns">
    <h3><?php print t('Information');?></h3>
    <?php print render($items[0]); ?>
  </div>
  <div class="large-3 columns">
    <h3><?php print t('Services client');?></h3>
    <?php print render($items[1]); ?>
  </div>
  <div class="large-3 columns">
    <h3><?php print t('Newsletter');?></h3>
    <?php print t('Be the first to know about our promotions and new products');?>
    <?php print $items[2]['content']; ?>
  </div>
  <div class="large-2 columns">
    <?php print t('Powered by ');?> <a href="">Dayscript</a>
    <span><a class="fi-social-twitter large" href="#"></a></span>
    <span><a class="fi-social-facebook large" href="#"></a></span>
  </div>
</div>

