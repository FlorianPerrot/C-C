<?php
/*
Template Name: Contact
*/
?>
<?php get_header(); ?>

<div id="content">
    <?php include (TEMPLATEPATH . "/bloc_left.php"); ?>
    
    <div class="bloc-content bloc-center">
	    <?php include (TEMPLATEPATH . "/sous_page.php"); ?>
	    
	    <section class="main">
			<?php if (have_posts()) : the_post();?>
				<h2 class="main-title"><a>Nous contacter</a></h2>
				<div class="contact-left">
					<?php the_content(); ?>
				</div>
				<div class="contact-right">
					<form>
						<input type="email"/>
						<input type="text"/>
						<textarea></textarea>
					</form>
				</div>
			<?php endif; ?>
	    </section>
    </div>
    <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>