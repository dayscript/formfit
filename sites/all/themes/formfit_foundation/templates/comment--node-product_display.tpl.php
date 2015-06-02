<div class="comments">
  <?php print render($title_prefix); ?>
  <h3<?php print $title_attributes; ?>><?php print $title ?></h3>
  <?php print render($title_suffix); ?>
  <span class="submitted"><?php print $submitted ?></span>
  <div class="content"<?php print $content_attributes; ?>>
    <?php hide($content['links']); print render($content); ?>
    <?php if ($signature): ?>
    <div class="clearfix">
      <div>—</div>
      <?php print $signature ?>
    </div>
    <?php endif; ?>
  </div>
</div>
