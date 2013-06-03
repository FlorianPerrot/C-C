<?php
add_theme_support( 'post-thumbnails' );
add_action('send_headers','site_router');
add_action('init', 'my_init');
$url;
$link;	

if (!current_user_can('manage_options')) {
	add_filter('show_admin_bar', '__return_false');
}
	
function my_init()
{
	global $link;
	$link = array('accueil'=>'','presentation'=>'presentation','objectifs'=>'presentation/objectifs',
	'pole1'=>'presentation/pole-tourisme-adapte','pole2'=>'presentation/pole-culture-de-liens','documents'=>'documents',
	'galerie'=>'galerie','forum'=>'forums','articles'=>'articles','contact'=>'contact',
	'mentionsLegales'=>'mentions-legales','planDuSite' => 'plan-du-site');
	register_sidebar();
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
