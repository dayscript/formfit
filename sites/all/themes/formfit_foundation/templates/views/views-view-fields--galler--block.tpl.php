<div class="large-12 ccolumns">
  <?php if ($row->taxonomy_term_data_weight == 0): ?>
    <div class="large-8 columns">
      <?php print render($fields['field_image']->content);?>
      <span><?php print render($fields['name']->content);?></span>
    </div>
  <?php else: ?>
    <div class="large-4 columns">
      <?php print render($fields['field_image']->content);?>
      <span><?php print render($fields['name']->content);?></span>
    </div>
  <?php endif ?>
</div>
