<?php
$top_panel = get_field('top_panel');
if( $top_panel && in_array('enable', $top_panel) ): ?>
<section class="panel panel-callout <?php if( get_field('top_panel_bg_color') ) : ?>bg-<?php the_field('top_panel_bg_color'); ?><?php endif; ?>">
  <div class="container">
    <?php if( get_field('top_panel_title') ) : ?>
      <h2 class="text-xlarge"><?php the_field('top_panel_title'); ?></h2>
    <?php endif; ?>
    <?php if( get_field('top_panel_content') ) : ?>
      <?php the_field('top_panel_content'); ?>
    <?php endif; ?>
    <?php if( get_field('top_panel_button_text') && get_field('top_panel_button_link') ) : ?>
      <p><a href="<?php the_field('top_panel_button_link'); ?>" class="button button-reverse"><?php the_field('top_panel_button_text'); ?></a></p>
    <?php endif; ?>
  </div>
</section>
<?php endif; ?>
