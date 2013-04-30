<?php
/*
Template Name: Home
*/
?>
<?php get_header(); ?>

<div id="content">
    <?php include (TEMPLATEPATH . "/bloc_left.php"); ?>
    
    <div class="bloc-content bloc-center">
	    <?php include (TEMPLATEPATH . "/sous_page.php"); ?>
	    
	    <section class="main">
		    <?php if (have_posts()) : the_post(); ?>
	            <h2 class="main-titre"><?php the_title(); ?></h2>
				<article>
				    <h3 class="article-name"><?php the_title(); ?></h3>
				    <article class="article-description"><?php the_content(); ?></article>
				</article>
		    <?php endif; ?>
	    </section>
    </div>
    <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>