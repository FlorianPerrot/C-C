<?php
add_theme_support( 'post-thumbnails' );
add_action('send_headers','site_router');
add_action('init', 'my_init');
add_action("login_head", "my_custom_logo");
add_filter('login_headerurl', 'my_custom_url');
add_filter('login_headertitle', 'my_custom_title');


$url;
$link;	

if (!current_user_can('manage_options')) {
	add_filter('show_admin_bar', '__return_false');
}

function my_custom_title(){
	return "Culture & Cultures";
}

function my_custom_url(){
	return "http://asso-cultureetcultures.com/";
}

function my_custom_logo() {
	echo '<style type="text/css"> h1 a { background-image:url('.get_bloginfo('template_directory').'/img/log.png) !important; } </style>';
}
	
function my_init()
{
	global $link;
	$link = array('accueil'=>'','presentation'=>'presentation','objectifs'=>'presentation/objectifs',
	'pole1'=>'presentation/pole-tourisme-adapte','pole2'=>'presentation/pole-culture-de-liens','documents'=>'presentation/documents',
	'galerie'=>'category/galerie/','forum'=>'forums','articles'=>'articles','contact'=>'contact',
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
	$url = str_replace("//", '', "/".$_SERVER['REQUEST_URI']);
	$url = explode('/', $url);

	if(count($url) == 1 && $url[0] == 'logout'){
		wp_logout();
		header('location:'.$root.'/');
		die();
	}
}
?>
