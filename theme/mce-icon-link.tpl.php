<div class="<?php print $classes ?>"<?php print $attributes; ?>>
  <a href="<?php print $link_url; ?>">
   <?php if ($icon_position == 'right' || $icon_position == 'bottom'): ?>
    <span class="text"><?php print $link_text; ?></span>
    <span class="icon"><?php print render($icon); ?></span>
   <?php else: ?>
    <span class="icon"><?php print render($icon); ?></span>
    <span class="text"><?php print $link_text; ?></span>
   <?php endif; ?>
  </a>
</div>