<?php if( get_field('hero_type') == 'color' ): ?>
<section class="panel panel-top panel-callout <?php if( get_field('hero_bg_color') ) : ?>bg-<?php the_field('hero_bg_color'); ?><?php endif; ?>">
  <div class="container">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <h1><?php the_title(); ?></h1>
    <?php if( get_field('subtitle') ) : ?>
      <p><?php the_field('subtitle'); ?></p>
    <?php endif; ?>
    <?php endwhile; endif; ?>
  </div>
</section>
<?php endif; ?>

<?php if( get_field('hero_type') == 'image' ): ?>
<section class="panel panel-bg" style="background-image:url(<?php $hero_bg_image = get_field('hero_bg_image'); if( !empty($hero_bg_image) ): ?><?php echo $hero_bg_image['url']; ?><?php endif; ?>)">
  <img class="panel-bg-image" src="<?php $hero_bg_image = get_field('hero_bg_image'); if( !empty($hero_bg_image) ): ?><?php echo $hero_bg_image['url']; ?><?php endif; ?>">
  <div class="container">
    <div class="panel-bg-content">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <h1><?php the_title(); ?></h1>
      <?php if( get_field('subtitle') ) : ?>
  			<h2><?php the_field('subtitle'); ?></h2>
  		<?php endif; ?>
      <?php endwhile; endif; ?>
    </div>
  </div>
</section>
<?php endif; ?>

<?php if( get_field('hero_type') == 'video' ): ?>
<section class="panel panel-top panel-top-home">
  <div class="bg-darkergray">
    <video loop muted autoplay<?php if( get_field('hero_bg_video_poster') ) : ?> poster="<?php the_field('hero_bg_video_poster'); ?>"<?php endif; ?> class="panel-bg-video">
      <?php if( get_field('hero_bg_video_webm') ) : ?>
        <source src="<?php the_field('hero_bg_video_webm'); ?>" type="video/webm">
      <?php endif; ?>
      <?php if( get_field('hero_bg_video_mp4') ) : ?>
        <source src="<?php the_field('hero_bg_video_mp4'); ?>" type="video/mp4">
      <?php endif; ?>
    </video>
    <video muted class="panel-bg-video-hidden">
      <?php if( get_field('hero_bg_video_webm') ) : ?>
        <source src="<?php the_field('hero_bg_video_webm'); ?>" type="video/webm">
      <?php endif; ?>
      <?php if( get_field('hero_bg_video_mp4') ) : ?>
        <source src="<?php the_field('hero_bg_video_mp4'); ?>" type="video/mp4">
      <?php endif; ?>
    </video>
  </div>
  <div class="container">
    <div class="panel-bg-content">
      <?php if ( is_front_page() ) : ?>
        <?php if( get_field('subtitle') ) : ?>
    			<?php the_field('subtitle'); ?>
    		<?php endif; ?>
      <?php else : ?>
        <h1><?php the_title(); ?></h1>
        <?php if( get_field('subtitle') ) : ?>
    			<h2><?php the_field('subtitle'); ?></h2>
    		<?php endif; ?>
      <?php endif; ?>
    </div>
  </div>
</section>
<?php endif; ?>
