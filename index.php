<?php get_header();?>
	
	<div id="content">
	    <?php include (TEMPLATEPATH . "/bloc_left.php"); ?>
	    
	    <div class="bloc-content bloc-center">
		    <?php include (TEMPLATEPATH . "/sous_page.php"); ?>
		    
		    <section class="main">
				<?php get_template_part('loop'); ?>
		    </section>
	    </div>
	    <?php get_sidebar(); ?>
	</div>
	<?php get_footer();?>
?>
