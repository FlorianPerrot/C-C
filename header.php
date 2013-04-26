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
				<div class="bande-top"></div>
				<div class="header-content">
					<div class="logo"><img alt="logo de culture et cultures" src="<?php echo get_bloginfo('template_directory');?>/img/logo.jpg" width="155px" height="155px"/></div>
					<img class="titre-asso" alt="Culture et cultures" src="<?php echo get_bloginfo('template_directory');?>/img/titre-asso.gif" width="390px" height="205px"/>
                	<?php get_search_form( $echo ); ?>
                </div>
			</header>
               