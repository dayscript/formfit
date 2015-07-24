<?php
  $compare = block_load('commerce_product_comparison', 'compare_list');
  $block = _block_get_renderable_array(_block_render_blocks(array($compare)));
  $output = drupal_render($block);
  print($output);
?>
