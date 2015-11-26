<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head <?php language_attributes(); ?>>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php the_title(); ?></title>
		<link rel="icon" type="image/png" href="<?php echo get_bloginfo('template_directory');?>/img/favicon.ico" />
        <!-- CSS -->
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">
		<!--[if lte IE 7]>
		<link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo('template_directory');?>/style_ie.css" />
		<![endif]-->
		<!--[if lte IE 8]>
		<link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo('template_directory');?>/style_ie.css" />
		<![endif]-->
		
        <!-- Police Ubuntu -->
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Ubuntu:regular,bold&subset=Latin"><!-- http://fonts.googleapis.com/css?family=Ubuntu:regular,bold&subset=Latin -->

		<?php wp_head(); ?>
		
		<!-- JavaScript -->
		<script type="text/javascript" src="<?php echo get_bloginfo('template_directory');?>/js/jquery.js"></script>
        <script type="text/javascript" src="<?php echo get_bloginfo('template_directory');?>/js/functions.js"></script>
		
		<noscript>
			<style>.wrap{display:none;}#OLD{display:block}</style>
		</noscript>
		
        <?php
        	global $url, $link;
			
			/* Recherche la page */
	        if( $url[0] == $link['presentation'])
				$page = $url[1];
			elseif(($url[0] == $link['forum']) || ($url[0] == 'forum'))
				$page = "forum";
			elseif ($url[1] == 'galerie' || ($url[0] == 'galerie'))
				$page = "galerie";
			elseif ($url[0] == $link['articles'])
				$page = "articles";
			elseif ( $url[0] == $link["contact"])
				$page = 'contact';
			elseif ( $url[0] == $link['accueil'])
				$page = "accueil";
			else
				$page = "other";
		?>
		
		<script type="text/javascript" language="javascript">$(function(){border_page("<?php echo $page?>")});</script>	
	</head>
	<body>
		<div id="OLD">
			<p style="text-align:center;margin-top:150px;">
			Il faut un navigateur internet plus récent.
			<br />
			Vous pouvez faire les mises à jour de votre navigateur ou en télécharger un parmi les suivants :
			<br/>
			<a href="https://www.google.com/intl/fr/chrome/browser/">Google Chrome</a> / <a href="http://www.mozilla.org/fr/firefox/new/">FireFox</a>
			</p>
		</div>
			
		<div class="wrap">
			<header id="header">
				<div class="header-content">
					
					<div class="bloc-logo"><a href="<?php echo network_site_url( '/' );?>"><img alt="logo de culture et cultures" src="<?php echo get_bloginfo('template_directory');?>/img/logo.png" width="150px" height="150px"/></a></div>
                	
                	<div class="bloc-titre"><a href="<?php echo network_site_url( '/' );?>"> <img class="titre-fond" alt="Culture et cultures" src="<?php echo get_bloginfo('template_directory');?>/img/titre-fond.png" width="320px" height="200px"/> <img class="titre-anime" alt="Culture et cultures" src="<?php echo get_bloginfo('template_directory');?>/img/titre-anime.gif" width="320px" height="200px"/> </a></div>
					
					<div class="bloc-user">
						<?php $user = wp_get_current_user();?>
						<?php if($user->ID == 0): ?>
							<p>
								<a href="<?php echo bloginfo('wpurl');?>/wp-login.php">Se connecter</a> / <a href="<?php echo bloginfo('wpurl');?>/wp-login.php?action=register"> S'inscrire</a>
							</p>
						<?php else:?>
							<p>
								Bonjour, <?php echo $user->user_login;?> 
							<a href="<?php echo bloginfo('wpurl');?>/wp-admin/profile.php">Mon profil</a> / <a href="<?php echo bloginfo('url');?>/logout">Se déconnecter</a>
							</p>
						<?php endif; ?>
                	</div>
            	</div>
			</header>
			<div id="wait"><img src="<?php echo get_bloginfo('template_directory');?>/img/chargement.gif" alt="chargement"/></div>
