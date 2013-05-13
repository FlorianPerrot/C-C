<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
		<div class="post">
			<div class="info post-info">
				<div class="date post-date">
				  <span class="day"><?php the_time('d') ?></span> 
				  <span class="month"><?php the_time('M') ?></span> 
				  <span class="year"><?php the_time('Y') ?></span>
				</div>
			</div>

			<h2 class="main-title post-title">
				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			</h2>

			<div class="post-content">
			<?php the_content(); ?>
			</div>
		</div>
	<?php endwhile; ?>
<?php else : ?>
	<p class="nothing">
		Il n'y a pas de Post à afficher !
	</p>
<?php endif; ?>