<?php
/**
 * Template Name: Work
 */
get_header(); ?>

<?php get_template_part( 'hero' ); ?>

<?php get_template_part( 'panel-top' ); ?>

<section class="panel">
  <div class="container">
    <details class="js-filter-mobile filter filter--mobile">
      <summary>Sort</summary>
      <button class="button button-outline is-checked" data-filter="*">View All</button>
      <?php $categories = get_categories('taxonomy=project-category&post_type=project'); ?>
      <?php foreach ($categories as $category) : ?>
      <button class="button button-outline" data-filter=".<?php echo $category->slug; ?>"><?php echo $category->name; ?></button>
      <?php endforeach; ?>
    </details>
    <div class="js-filter-desktop filter filter--desktop">
      <button class="button button-outline is-checked" data-filter="*">View All</button>
      <?php $categories = get_categories('taxonomy=project-category&post_type=project'); ?>
      <?php foreach ($categories as $category) : ?>
      <button class="button button-outline" data-filter=".<?php echo $category->slug; ?>"><?php echo $category->name; ?></button>
      <?php endforeach; ?>
    </div>
    <?php $query = new WP_Query( array( 'post_type' => 'project', 'posts_per_page' => -1 ) ); if ( $query->have_posts() ) : ?>
      <div class="grid">
        <?php while ( $query->have_posts() ) : $query->the_post(); ?>
          <div class="grid-item grid-item-project <?php $categories = get_the_terms( $post->ID, 'project-category' ); foreach( $categories as $category ) { echo ' ' . $category->slug; } ?>">
            <a href="<?php the_permalink(); ?>">
              <img class="grid-item-image" src="
              <?php
              $thumbnail_bg_image = get_field('thumbnail_bg_image');
              if( !empty($thumbnail_bg_image) ):
                echo $thumbnail_bg_image['url'];
              else :
                $hero_bg_image = get_field('hero_bg_image');
                if( !empty($hero_bg_image) ):
                  echo $hero_bg_image['url'];
                endif;
              endif;
              ?>">
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

<?php get_template_part( 'panel-bottom' ); ?>

<?php get_footer(); ?>
