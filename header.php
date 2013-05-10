<!DOCTYPE html>
<html>
	<head <?php language_attributes(); ?>>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php the_title(); ?></title>

        <!-- CSS -->
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">
        <!-- Police Ubuntu -->
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Ubuntu:regular,bold&subset=Latin"><!-- http://fonts.googleapis.com/css?family=Ubuntu:regular,bold&subset=Latin -->

		<?php wp_head(); ?>
		
		<!-- JavaScript -->
		<script type="text/javascript" src="<?php echo get_bloginfo('template_directory');?>/js/jquery.js"></script>
        <script type="text/javascript" src="<?php echo get_bloginfo('template_directory');?>/js/functions.js"></script>
        <?php
        	global $url;
	        if( !empty($_GET['presentation']) ) 
				$page = $_GET['presentation'];
			elseif( !empty($_GET['post_type']) && $_GET['post_type'] == 'forum'|| !empty($_GET['forum']))
				$page = "forum";
			elseif (!empty($_GET['gallery']) || !empty($_GET['page_id']) && $_GET['page_id'] == 22)
				$page = "gallery";
			elseif (!empty($_GET['p']) || !empty($_GET['post_type']) && $_GET['post_type'] == 'post')
				$page = "article";
			elseif (!empty($_GET['page_id']) && $_GET['page_id'] == 39){
				$page = 'documents';}
			else 
				$page = "accueil";
		?>
		
		<script type="text/javascript" language="javascript">$(function(){border_page("<?php echo $page?>")});</script>	
	</head>
	<body>
		<div class="wrap">
			<header>
				<div class="barre-top"></div>
				<div class="header-content">
					
					<div class="bloc-logo"><a href="<?php echo network_site_url( '/' );?>"><img alt="logo de culture et cultures" src="<?php echo get_bloginfo('template_directory');?>/img/logo.png" width="150px" height="150px"/></a></div>
                	
                	<div class="bloc-titre"><a href="<?php echo network_site_url( '/' );?>"> <img class="titre-fond" alt="Culture et cultures" src="<?php echo get_bloginfo('template_directory');?>/img/titre-fond.png" width="320px" height="200px"/> <img class="titre-anime" alt="Culture et cultures" src="<?php echo get_bloginfo('template_directory');?>/img/titre-anime.gif" width="320px" height="200px"/> </a></div>
       				
                	<?php get_search_form( $echo ); ?>
                	
            	</div>
			</header>
               