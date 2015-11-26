<?php get_header();?>	
	<div id="content">
	    <?php include (TEMPLATEPATH . "/bloc_left.php"); ?>
	    
	    <div class="bloc-content bloc-center">
		    <?php include (TEMPLATEPATH . "/sous_menu.php"); ?>
		    
		    <section class="main">
				<?php if (have_posts()) : the_post()?>
					<div class="presentation <?php echo $_GET['presentation'];?>">
						<h2 class="main-title presentation-title">
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						</h2>
						<?php	if ( has_post_thumbnail() ): ?>
							<div class="presentation-thumbnail"><?php the_post_thumbnail();?></div>
						<?php endif;?> 			
						<div class="presentation-content">
							<?php the_content(); ?>
						</div>
					</div>
				<?php else : ?>
					<p class="nothing">
						Il n'y a pas de présentation à afficher !
					</p>
				<?php endif; ?>
		    </section>
	    </div>
	</div>
	<?php get_footer();?>
