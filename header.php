<!DOCTYPE html>
<html>
	<head <?php language_attributes(); ?>>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php the_title(); ?></title>

        <!-- CSS -->
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">
        <!-- Police Ubuntu -->
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Ubuntu:regular,bold&subset=Latin">

        <!-- JavaScript -->
        <script src="wp-content/themes/C-C/js/jquery.min.js"></script>
        <script src="wp-content/themes/C-C/js/menu.js"></script>

		<?php wp_head(); ?>
	</head>
	<body>
		<div class="wrap">
			<header>
                <p><?php bloginfo('theme_url')?></p>
                <img alt="logo" src="wp-content/themes/C-C/img/logo.jpg"/>
				<h1><a><?php bloginfo('name'); ?></a></h1>
				<h2><?php bloginfo('description'); ?></h2>
                <?php get_search_form( $echo ); ?>
			</header>
               