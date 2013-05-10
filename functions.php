<?php
add_theme_support( 'post-thumbnails' );
add_action('send_headers','site_router');
add_action('init', 'my_init');
$url;
	
function my_init()
{
	
	register_post_type('presentation', array(
	  'label' => __('Presentation'),
	  'singular_label' => __('Presentation'),
	  'public' => true,
	  'show_ui' => true,
	  'capability_type' => 'post',
	  'hierarchical' => false,
	  'supports' => array('title', 'editor', 'thumbnail')
	));
}
function site_router(){
	global $url;
	$root = str_replace('index.php', '', $_SERVER['SCRIPT_NAME']);
	$url = str_replace($root, '', $_SERVER['REQUEST_URI']);
	$url = explode('/', $url);
	if(count($url) == 1 && $url[0] == 'logout'){
		wp_logout();
		header('location:'.$root.'/');
		die();
	}
}
?>
