<?php 
$sidebar_args_side = array(
	'id' => 'sidebar1',
	'name' => 'Main Sidebar',
	'before_widget' => '<div class="sidebar_item">',
	'after_widget' => '</div>');
$sidebar_args_bottom= array(
	'id' => 'sidebar_bottom',
	'name' => 'Bottom Sidebar',
	'before_widget' => '<div class="content_beige_container_box">',
	'after_widget' => '</div>');
register_sidebar($sidebar_args_side);
register_sidebar($sidebar_args_bottom);

function register_my_menu() {
	register_nav_menu('header-menu', __('Header Menu') );
}
add_action ('init', 'register_my_menu');
add_filter( 'wp_title', 'baw_hack_wp_title_for_home' );



function baw_hack_wp_title_for_home( $title )
{
  if( empty( $title ) && ( is_home() || is_front_page() ) ) {
    return __( 'Home', 'theme_domain' );
  }
  return $title;
}
?>