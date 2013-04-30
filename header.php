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
        <script src="<?php echo get_bloginfo('template_directory');?>/js/jquery.min.js"></script>
        <script src="<?php echo get_bloginfo('template_directory');?>/js/functions.js"></script>

		<?php wp_head(); ?>
	</head>
	<body>
		<div class="wrap">
			<header>
				<div class="barre-top"></div>
				<div class="header-content">
					<a href="<?php echo network_site_url( '/' );?>"><img class="titre-asso" alt="Culture et cultures" src="<?php echo get_bloginfo('template_directory');?>/img/titre-asso.gif" width="390px" height="205px"/>
				
					<div class="logo"><a href="<?php echo network_site_url( '/' );?>"><img alt="logo de culture et cultures" src="<?php echo get_bloginfo('template_directory');?>/img/logo.jpg" width="100px" height="100px"/></a></div>
                	<?php get_search_form( $echo ); ?>
                </div>
			</header>
               