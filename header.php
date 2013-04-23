<!DOCTYPE html>
<html>
	<head <?php language_attributes(); ?>>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php the_title(); ?></title>
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">
		<?php wp_head(); ?>
	</head>
	<body>
		<div class="wrap">
			<header>
				<h1><a><?php bloginfo('name'); ?></a></h1>
				<h2><?php bloginfo('description'); ?></h2>
			</header>

            <div id="menu">
                <h2>MENU</h2>
                <ul>
                    <li><a href="#">Accueil</a></li>
                    <li><a href="">Présentation</a></li>
                    <!-- MODE FUFU
                    <ul>
                        <li>Objectif</li>
                        <li>Tourisme adapté</li>
                        <li>Pôle intégration</li>
                    </ul>
                    -->
                    <li><a href="#">Articles</a></li>
                    <li><a href="#">Forum</a></li>
                    <li><a href="#">Documents</a></li>
                </ul>

                <h2>PARTENAIRE</h2>
                <ul>
                    <li><a href="#">part1</a></li>
                    <li><a href="#">part2</a></li>
                    <li><a href="#">part3</a></li>
                </ul>
            </div>
