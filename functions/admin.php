<?php

/**
 * Admin
 */

// Customize the admin menus.
function rlmg_remove_admin_menu_links() {
  remove_menu_page('edit-comments.php');
  // remove_menu_page('edit.php');
}
add_action('admin_menu', 'rlmg_remove_admin_menu_links');

function rlmg_remove_comment_support() {
  remove_post_type_support( 'post', 'comments' );
  remove_post_type_support( 'page', 'comments' );
}
add_action('init', 'rlmg_remove_comment_support', 100);

function rlmg_admin_bar_render() {
  global $wp_admin_bar;
  $wp_admin_bar->remove_menu('comments');
  $wp_admin_bar->remove_menu('customize');
  $wp_admin_bar->remove_menu('new-content');
  $wp_admin_bar->remove_menu('search');
}
add_action('wp_before_admin_bar_render', 'rlmg_admin_bar_render');

function rlmg_replace_howdy($wp_admin_bar) {
	$my_account=$wp_admin_bar->get_node('my-account');
	$newtitle = str_replace('Howdy, ', '', $my_account->title);
	$wp_admin_bar->add_node(array(
		'id' => 'my-account',
		'title' => $newtitle,
	));
}
add_filter('admin_bar_menu', 'rlmg_replace_howdy', 12);

// Customize the login page.
function rlmg_login_logo() { ?>
<style type="text/css">
#login h1 a,
.login h1 a {
background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/logo.svg);
height: 40px;
width: 100%;
background-size: contain;
background-repeat: no-repeat;
padding-bottom: 30px;
}
</style>
<?php } add_action( 'login_enqueue_scripts', 'rlmg_login_logo' );

function rlmg_login_logo_url() {
  return home_url();
}
add_filter( 'login_headerurl', 'rlmg_login_logo_url' );
