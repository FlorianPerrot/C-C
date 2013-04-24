<?php
/*
Template Name: Home
*/
?>
<?php get_header(); ?>

<section id="content">
	<?php include 'menu.php';?>
    <?php include 'sous_page.php';?>
    <div class="main">
	    <?php if (have_posts()) : the_post(); ?>
            <h2 class="main-titre"><?php the_title(); ?></h2>
			<article>
			    <h3 class="article-name"><?php the_title(); ?></h3>
			    <p class="article-description"><?php the_content(); ?></p>
			</article>
	    <?php endif; ?>
    </div>
    <?php get_sidebar(); ?>
</section>

<?php get_footer(); ?>