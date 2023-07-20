<?php
/**
 * Template: Post
 */
get_header(); ?>

<?php if( get_field('hero_type', 2698) == 'color' ): ?>
<section class="panel panel-top panel-callout <?php if( get_field('hero_bg_color', 2698) ) : ?>bg-<?php the_field('hero_bg_color', 2698); ?><?php endif; ?>">
  <div class="container">
    <h1><a href="<?php echo get_the_permalink(2698); ?>"><?php echo get_the_title(2698); ?></a></h1>
    <?php if( get_field('subtitle', 2698) ) : ?>
      <p><?php the_field('subtitle', 2698); ?></p>
    <?php endif; ?>
  </div>
</section>
<?php endif; ?>

<?php if( get_field('hero_type', 2698) == 'image' ): ?>
<section class="panel panel-bg" style="background-image:url(<?php $hero_bg_image = get_field('hero_bg_image', 2698); if( !empty($hero_bg_image) ): ?><?php echo $hero_bg_image['url']; ?><?php endif; ?>)">
  <img class="panel-bg-image" src="<?php $hero_bg_image = get_field('hero_bg_image', 2698); if( !empty($hero_bg_image) ): ?><?php echo $hero_bg_image['url']; ?><?php endif; ?>">
  <div class="container">
    <div class="panel-bg-content">
      <h1><a href="<?php echo get_the_permalink(2698); ?>"><?php echo get_the_title(2698); ?></a></h1>
      <?php if( get_field('subtitle', 2698) ) : ?>
  			<h2><?php the_field('subtitle', 2698); ?></h2>
  		<?php endif; ?>
    </div>
  </div>
</section>
<?php endif; ?>

<?php if( get_field('hero_type', 2698) == 'video' ): ?>
<section class="panel panel-top panel-top-home">
  <div class="bg-darkergray">
    <video loop muted autoplay<?php if( get_field('hero_bg_video_poster', 2698) ) : ?> poster="<?php the_field('hero_bg_video_poster', 2698); ?>"<?php endif; ?> class="panel-bg-video">
      <?php if( get_field('hero_bg_video_webm', 2698) ) : ?>
        <source src="<?php the_field('hero_bg_video_webm', 2698); ?>" type="video/webm">
      <?php endif; ?>
      <?php if( get_field('hero_bg_video_mp4') ) : ?>
        <source src="<?php the_field('hero_bg_video_mp4', 2698); ?>" type="video/mp4">
      <?php endif; ?>
    </video>
    <video muted class="panel-bg-video-hidden">
      <?php if( get_field('hero_bg_video_webm', 2698) ) : ?>
        <source src="<?php the_field('hero_bg_video_webm', 2698); ?>" type="video/webm">
      <?php endif; ?>
      <?php if( get_field('hero_bg_video_mp4') ) : ?>
        <source src="<?php the_field('hero_bg_video_mp4', 2698); ?>" type="video/mp4">
      <?php endif; ?>
    </video>
  </div>
  <div class="container">
    <div class="panel-bg-content">
      <h1><a href="<?php echo get_the_permalink(2698); ?>"><?php echo get_the_title(2698); ?></a></h1>
      <?php if( get_field('subtitle', 2698) ) : ?>
  			<h2><?php the_field('subtitle', 2698); ?></h2>
  		<?php endif; ?>
    </div>
  </div>
</section>
<?php endif; ?>

<section class="panel">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 offset-lg-2">
				<?php while ( have_posts() ) : the_post(); ?>
					<h1><?php the_title(); ?></h1>
					<time datetime="<?php echo get_the_date('Y-m-d'); ?>" itemprop="datePublished"><?php echo get_the_date('l, F j, Y'); ?></time>

					<?php the_content(); ?>
					<div class="pagination-posts">
		        <?php the_post_navigation( array(
		            'next_text' => '<p>' . __( 'Next post:<br>' ) . '' . '<span class="post-title">%title</span></p>',
		            'prev_text' => '<p>' . __( 'Previous post:<br>' ) . '' . '<span class="post-title">%title</span></p>',
		        ) ); ?>
		      </div>
        <?php endwhile; ?>
        	<div class="pagination">
						<a href="<?php echo get_the_permalink(2698); ?>">Back to the blog</a>
					</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
