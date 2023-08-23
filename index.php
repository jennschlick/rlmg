<?php
/**
 * Template: Index
 */
get_header(); ?>

<?php if( get_field('hero_type', 2698) == 'color' ): ?>
<section class="panel panel-top panel-callout <?php if( get_field('hero_bg_color', 2698) ) : ?>bg-<?php the_field('hero_bg_color', 2698); ?><?php endif; ?>">
  <div class="container">
    <h1><?php echo get_the_title(2698); ?></h1>
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
      <h1><?php echo get_the_title(2698); ?></h1>
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
      <h1><?php echo get_the_title(2698); ?></h1>
      <?php if( get_field('subtitle', 2698) ) : ?>
  			<h2><?php the_field('subtitle', 2698); ?></h2>
  		<?php endif; ?>
    </div>
  </div>
</section>
<?php endif; ?>

<?php
$top_panel = get_field('top_panel', 2698);
if( $top_panel && in_array('enable', $top_panel) ): ?>
<section class="panel panel-callout <?php if( get_field('top_panel_bg_color', 2698) ) : ?>bg-<?php the_field('top_panel_bg_color', 2698); ?><?php endif; ?>">
  <div class="container">
    <?php if( get_field('top_panel_title', 2698) ) : ?>
      <h2 class="text-xlarge"><?php the_field('top_panel_title', 2698); ?></h2>
    <?php endif; ?>
    <?php if( get_field('top_panel_content', 2698) ) : ?>
      <?php the_field('top_panel_content', 2698); ?>
    <?php endif; ?>
    <?php if( get_field('top_panel_button_text', 2698) && get_field('top_panel_button_link', 2698) ) : ?>
      <p><a href="<?php the_field('top_panel_button_link', 2698); ?>" class="button button-reverse"><?php the_field('top_panel_button_text', 2698); ?></a></p>
    <?php endif; ?>
  </div>
</section>
<?php endif; ?>

<section class="panel">
	<div class="container">
		<div class="row">
			<?php $post = get_post(2698);
			$the_content = apply_filters('the_content', $post->post_content);
			if ( !empty($the_content) ) { ?>
			<div class="col-lg-3">
				<div class="text-lead">
					<?php echo $the_content; ?>
				</div>
			</div>
			<?php } ?>
			<div class="col-lg-8<?php $post = get_post(2698); $the_content = apply_filters('the_content', $post->post_content); if ( empty($the_content) ) { ?> offset-lg-2<?php } ?> ">
				<div class="grid-blog">
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<div class="grid-item-blog-post">
							<? if ( has_post_thumbnail() ) { echo '<a href="' . get_the_permalink() . '"><img src="' . get_the_post_thumbnail_url() . '"></a>'; } ?>
							<p class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
							<p class="post-date"><?php echo get_the_date('l, F j, Y'); ?></p>
						</div>
					<?php endwhile; ?>
				</div>
				<div class="pagination">
				<?php if ( get_previous_posts_link() ) { ?><?php previous_posts_link( 'Previous page' ); ?><?php } ?>
				<?php if ( get_next_posts_link() ) { ?><?php next_posts_link( 'Next page' ); ?><?php } ?>
			</div>
			</div>
		</div>
	</div>
</section>

<?php else: ?>

There are no posts to display.

<?php endif; ?>

<?php
$bottom_panel = get_field('bottom_panel', 2698);
if( $bottom_panel && in_array('enable', $bottom_panel) ): ?>
<section class="panel panel-callout <?php if( get_field('bottom_panel_bg_color', 2698) ) : ?>bg-<?php the_field('bottom_panel_bg_color', 2698); ?><?php endif; ?>">
  <div class="container">
    <?php if( get_field('bottom_panel_title', 2698) ) : ?>
      <h2 class="text-xlarge"><?php the_field('bottom_panel_title', 2698); ?></h2>
    <?php endif; ?>
    <?php if( get_field('bottom_panel_content', 2698) ) : ?>
      <?php the_field('bottom_panel_content', 2698); ?>
    <?php endif; ?>
    <?php if( get_field('bottom_panel_button_text', 2698) && get_field('bottom_panel_button_link', 2698) ) : ?>
      <p><a href="<?php the_field('bottom_panel_button_link', 2698); ?>" class="button button-reverse"><?php the_field('bottom_panel_button_text', 2698); ?></a></p>
    <?php endif; ?>
  </div>
</section>
<?php endif; ?>

<?php get_footer(); ?>
