<?php get_header(); ?>
	<div id="content">
	    <?php include (TEMPLATEPATH . "/bloc_left.php"); ?>
	    
	    <div class="bloc-content bloc-center">
		    <?php include (TEMPLATEPATH . "/sous_page.php"); ?>
		    
		    <section class="main">
		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
				<div class="post">
					<h1 class="post-title"><?php the_title(); ?></h1>
					<p class="post-info">
						Posté le <?php the_date(); ?> dans <?php the_category(', '); ?> par <?php the_author(); ?>.
					</p>
					<div class="post-content">
						<?php the_content(); ?>
					</div>
				</div>
			<?php endwhile; ?>
		<?php endif; ?>
		    </section>
    </div>
    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
