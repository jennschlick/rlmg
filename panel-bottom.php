<?php
$bottom_panel = get_field('bottom_panel');
if( $bottom_panel && in_array('enable', $bottom_panel) ): ?>
<section class="panel panel-callout <?php if( get_field('bottom_panel_bg_color') ) : ?>bg-<?php the_field('bottom_panel_bg_color'); ?><?php endif; ?>">
  <div class="container">
    <?php if( get_field('bottom_panel_title') ) : ?>
      <h2 class="text-xlarge"><?php the_field('bottom_panel_title'); ?></h2>
    <?php endif; ?>
    <?php if( get_field('bottom_panel_content') ) : ?>
      <?php the_field('bottom_panel_content'); ?>
    <?php endif; ?>
    <?php if( get_field('bottom_panel_button_text') && get_field('bottom_panel_button_link') ) : ?>
      <p><a href="<?php the_field('bottom_panel_button_link'); ?>" class="button button-reverse"><?php the_field('bottom_panel_button_text'); ?></a></p>
    <?php endif; ?>
  </div>
</section>
<?php endif; ?>
