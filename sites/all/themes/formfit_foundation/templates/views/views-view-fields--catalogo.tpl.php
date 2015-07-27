<div class="principal">
  <div class="container">
    <?php print $fields['field_image']->content;?>
    <div class="content-car-title">
      <span class="large-10 columns"><?php print $fields['title']->content;?></span>
      <span class="large-2 columns"><?php print $fields['add_to_cart_form']->content;?></span>
    </div>
  </div>
  <span clas="large-12 columns">
    <span class="large-7 columns"><?php print $fields['field_votes']->content;?></span>
    <span class="large-5 columns"><?php print $fields['commerce_price']->content ?></span>
  </span>
</div>
