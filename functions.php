<?php
add_theme_support( 'post-thumbnails' );

add_action('init', 'my_init');
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
