<?php
/*
Template Name: Home
*/
?>
<?php get_header(); ?>

<section id="content">
    <?php include 'menu.php';?>
    <div id="main">
	    <?php if (have_posts()) : the_post(); ?>
            <h2 class="main-titre"><?php the_title(); ?></h2>
			<div class="home">
			    <h3 class="home-name"><?php the_title(); ?></h3>
			    <article class="home-description"><?php the_content(); ?></article>
			</div>
	    <?php endif; ?>
    </div>
    <?php get_sidebar(); ?>
</section>

<?php get_footer(); ?>