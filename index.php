<?php get_header();?>
	
	<div id="content">
	    <?php include (TEMPLATEPATH . "/bloc_left.php"); ?>
	    
	    <div class="bloc-content bloc-center">
		    <?php include (TEMPLATEPATH . "/sous_menu.php"); ?>
		    
		    <section class="main">
				<?php get_template_part('loop'); ?>
		    </section>
	    </div>
	</div>
<?php get_footer();?>