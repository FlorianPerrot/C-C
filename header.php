<!DOCTYPE html>
<html>
	<head <?php language_attributes(); ?>>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php the_title(); ?></title>

        <!-- CSS -->
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">
        <!-- Police Ubuntu -->
        <link rel="stylesheet" type="text/css" href="js/police.css"><!-- http://fonts.googleapis.com/css?family=Ubuntu:regular,bold&subset=Latin -->

        <!-- JavaScript -->
        <script type="text/javascript" language="JavaScript" src="<?php echo get_bloginfo('template_directory');?>/js/jquery.min.js"></script>
        <script type="text/javascript" language="javascript" src="<?php echo get_bloginfo('template_directory');?>/js/functions.js"></script>

		<?php wp_head(); ?>
	</head>
	<body>
		<div class="wrap">
			<header>
				<div class="barre-top"></div>
				<div class="header-content">
					
					<div class="bloc-logo"><a href="<?php echo network_site_url( '/' );?>"><img alt="logo de culture et cultures" src="<?php echo get_bloginfo('template_directory');?>/img/logo.png" width="150px" height="150px"/></a></div>
                	
                	<div class="bloc-titre"><a href="<?php echo network_site_url( '/' );?>"> <img class="titre-fond titre-asso" alt="Culture et cultures" src="<?php echo get_bloginfo('template_directory');?>/img/titre-fond.png" width="390px" height="205px"/> <img class="titre-anime titre-asso" alt="Culture et cultures" src="<?php echo get_bloginfo('template_directory');?>/img/titre-anime.gif" width="390px" height="205px"/> </a></div>
       				
                	<?php get_search_form( $echo ); ?>
                	
            	</div>
			</header>
               