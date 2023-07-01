<?php
/**
 * Template: Project
 */
get_header(); ?>

<section class="panel panel-bg panel-top" style="background-image:url(<?php $hero_bg_image = get_field('hero_bg_image'); if( !empty($hero_bg_image) ): ?><?php echo $hero_bg_image['url']; ?><?php endif; ?>)">
  <img class="panel-bg-image" src="<?php $hero_bg_image = get_field('hero_bg_image'); if( !empty($hero_bg_image) ): ?><?php echo $hero_bg_image['url']; ?><?php endif; ?>">
  <div class="container">
    <div class="panel-bg-content">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <h1><?php the_title(); ?></h1>
      <?php if( get_field('page_subtitle') ) : ?>
  			<h2><?php the_field('page_subtitle'); ?></h2>
  		<?php endif; ?>
      <?php endwhile; endif; ?>
    </div>
  </div>
</section>

<section class="panel">
  <div class="container">
    <div class="row">
      <div class="col-lg-3">
        <?php
        $services = get_field('services');
        if( $services ): ?>
          <div class="panel bg-lightgray padding margin-bottom">
            <h3>Project Services</h3>
            <ul class="list-unstyled text-small-mobile">
          	<?php foreach( $services as $service ): ?>
          		<li><?php echo $service; ?></li>
          	<?php endforeach; ?>
            </ul>
          </div>
        <?php endif; ?>
      </div>
      <div class="col-lg-9">
        <?php if( get_field('content_top') ) : ?>
          <?php the_field('content_top'); ?>
        <?php endif; ?>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <?php if( get_field('content_large_media') ) : ?>
          <?php the_field('content_large_media'); ?>
        <?php endif; ?>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-9 offset-lg-3">
        <?php if( get_field('content_small_media') ) : ?>
          <?php the_field('content_small_media'); ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>

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

<?php
$press_panel = get_field('press_panel');
if( $press_panel && in_array('enable', $press_panel) ): ?>
<section class="panel bg-lightgray text-center">
  <div class="container">
    <h4>Press</h4>
    <?php if( get_field('press_panel_content') ) : ?>
      <p><?php the_field('press_panel_content'); ?></p>
    <?php endif; ?>
    <?php if( get_field('press_panel_button_link') ) : ?>
      <p><a href="<?php the_field('press_panel_button_link'); ?>" class="button button-outline">Read Article</a></p>
    <?php endif; ?>
  </div>
</section>
<?php endif; ?>

<section class="panel">
  <div class="container">
    <h4 class="text-center">More Work</h4>
    <?php $query = new WP_Query( array( 'post_type' => 'project', 'posts_per_page' => 6 ) ); if ( $query->have_posts() ) : ?>
      <div class="grid">
        <?php while ( $query->have_posts() ) : $query->the_post(); ?>
          <div class="grid-item grid-item-project grid-item-third">
            <a href="<?php the_permalink(); ?>">
              <img class="grid-item-image" src="<?php $thumbnail_bg_image = get_field('thumbnail_bg_image'); if( !empty($thumbnail_bg_image) ): ?><?php echo $thumbnail_bg_image['url']; ?><?php endif; ?>">
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

<?php get_footer(); ?>
