<?php
/**
 * Template: Page
 */
get_header(); ?>

<?php get_template_part( 'hero' ); ?>

<?php get_template_part( 'panel-top' ); ?>

<?php if ( is_front_page() ) : ?>
<section class="panel">
  <div class="container">
    <?php $query = new WP_Query( array( 'post_type' => 'project', 'posts_per_page' => 6 ) ); if ( $query->have_posts() ) : ?>
      <div class="grid">
        <?php while ( $query->have_posts() ) : $query->the_post(); ?>
          <div class="grid-item grid-item-project">
            <a href="<?php the_permalink(); ?>">
              <img class="grid-item-image" src="<?php $thumbnail_bg_image = get_field('thumbnail_bg_image'); if( !empty($thumbnail_bg_image) ): echo $thumbnail_bg_image['url']; else : $hero_bg_image = get_field('hero_bg_image'); if( !empty($hero_bg_image) ): echo $hero_bg_image['url']; endif; endif; ?>">
              <div class="grid-item-content">
                <div class="grid-item-content-inner">
                  <p class="grid-item-title"><?php the_title(); ?></p>
                  <?php if( get_field('preview_subtitle') ) : ?>
              			<p class="grid-item-subtitle"><?php the_field('preview_subtitle'); ?></p>
              		<?php endif; ?>
                </div>
              </div>
            </a>
          </div>
        <?php endwhile; wp_reset_postdata(); ?>
      </div>
    <?php else : ?>
    <?php endif; ?>
  </div>
</section>
<?php else : ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<section class="panel">
  <div class="container">
    <?php the_content(); ?>
  </div>
</section>
<?php endwhile; endif; ?>
<?php endif; ?>

<?php get_template_part( 'panel-bottom' ); ?>

<?php get_footer(); ?>
