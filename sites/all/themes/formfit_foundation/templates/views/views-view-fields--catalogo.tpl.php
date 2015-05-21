<div class="row">
  <div class="item">
    <?php print ($fields['field_image']->content);?>
    <div class="panel">
      <h5 class="title"><?php print($fields['title']->content);?></h5>
      <span class="subheader add-cart"><?php print ($fields['add_to_cart_form']->content);?></span>
      <span class="subheader votes"><?php print render($fields['field_votes']->content);?></span>
      <span class="subheader price"><?php print render($fields['commerce_price']->content);?></span>
    </div>
  </div>
</div>
