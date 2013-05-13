<?php get_header(); ?>
	<div id="content">
	    <?php include (TEMPLATEPATH . "/bloc_left.php"); ?>
	    
	    <div class="bloc-content bloc-center">
		    <?php include (TEMPLATEPATH . "/sous_page.php"); ?>
		    
		    <section class="page main">
				<?php if (have_posts()) : the_post();?>
					<div class="post">
						<h2 class="main-titre"><a><?php the_title(); ?></a></h2>
						<div class="post-content">
							<?php the_content(); ?>
						</div>
					</div>
				<?php endif; ?>
		    </section>
	    </div>
	    
	    <?php get_sidebar(); ?>
	</div>
<?php get_footer(); ?>
