<?php
/**
 * Template Name: People
 */
get_header(); ?>

<?php get_template_part( 'hero' ); ?>

<?php get_template_part( 'panel-top' ); ?>

<section class="panel">
  <div class="container">
    <?php $query = new WP_Query( array( 'post_type' => 'person', 'posts_per_page' => -1 ) ); if ( $query->have_posts() ) : ?>
      <section class="image-grid">
        <?php while ( $query->have_posts() ) : $query->the_post(); ?>
          <div class="image__cell is-collapsed">
            <div class="image--basic">
              <a href="#expand-jump-<?php the_ID(); ?>">
                <div class="basic__imgwrapper">
                  <img id="expand-jump-<?php the_ID(); ?>" class="basic__img" src="<?php $person_photo = get_field('person_photo'); if( !empty($person_photo) ): ?><?php echo $person_photo['url']; ?><?php endif; ?>" />
                </div>
                <p class="person-name"><?php the_title(); ?></p>
                <?php if( get_field('person_title') ) : ?>
                  <p class="person-title"><?php the_field('person_title'); ?></p>
                <?php endif; ?>
              </a>
              <div class="arrow--up"></div>
            </div>
            <div class="image--expand">
              <a href="#close-jump-<?php the_ID(); ?> " class="expand__close"></a>
              <div class="image__contentwrapper">
                <img class="image--large" src="<?php $person_photo = get_field('person_photo'); if( !empty($person_photo) ): ?><?php echo $person_photo['url']; ?><?php endif; ?>" />
                <div class="image__content">
                  <p class="person-name"><?php the_title(); ?></p>
                  <?php if( get_field('person_title') ) : ?>
                    <p class="person-title"><?php the_field('person_title'); ?></p>
                  <?php endif; ?>
                  <?php if( get_field('person_bio') ) : ?>
                    <?php the_field('person_bio'); ?>
                  <?php endif; ?>
                </div>
              </div>
            </div>
          </div>
        <?php endwhile; wp_reset_postdata(); ?>
      </section>
    <?php else : ?>
    <?php endif; ?>
  </div>
</section>

<?php get_template_part( 'panel-bottom' ); ?>

<?php get_footer(); ?>
