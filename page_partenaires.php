<?php
/*
Template Name: Partenaires
*/
?>
<?php get_header(); ?>

<div id="main">
	<?php wp_reset_postdata(); ?>
	<?php query_posts('posts_per_page=1&post_type=page'); ?>
	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
			<div class="partenaires">
				<h3 class="partenaires-name"><?php the_title(); ?></h3>
				<p class="partenaires-description"><?php the_excerpt(); ?></p>
				<?php the_post_thumbnail(); ?>
			</div>
		<?php endwhile; ?>
	<?php endif; ?>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>