<?php
/**
 * @file
 * Returns the HTML for a block.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728246
 */
?>
<div id="<?php print $block_html_id; ?>" class="panel"<?php print $attributes; ?>>
  <?php print render($title_prefix); ?>
  <?php if ($title): ?>
      <div class="panel-heading">
		<?php print $title; ?>
		</div>
  <?php endif; ?>
  <?php print render($title_suffix); ?>
<div class="panel-body">
 <?php print $content; ?>
</div>
</div>
