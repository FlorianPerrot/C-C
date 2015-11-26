<?php
/*
Template Name: Contact
*/
?>
<?php get_header(); ?>

<div id="content">
    <?php include (TEMPLATEPATH . "/bloc_left.php"); ?>
    
    <div class="bloc-content bloc-center">
	    <?php include (TEMPLATEPATH . "/sous_menu.php"); ?>
	    
	    <section class="main contact">
			<?php if (have_posts()) : the_post();?>
				<h2 class="main-title"><a>Nous contacter</a></h2>
				<div class="contact-left">
					<?php the_content(); ?>
				</div>
				<div class="contact-right">
					<h3> <strong> Le plan </strong> </h3>
					<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.fr/maps?f=d&amp;source=embed&amp;saddr=&amp;daddr=44.731545,+4.874797&amp;geocode=FZmMqgIdLWJKAA&amp;sll=44.736735,4.917068&amp;sspn=0.140962,0.308647&amp;hl=fr&amp;mra=ls&amp;ie=UTF8&amp;t=m&amp;z=12&amp;output=embed"></iframe><br /><small><a href="https://maps.google.fr/maps?f=d&amp;source=embed&amp;saddr=&amp;daddr=44.731545,+4.874797&amp;geocode=FZmMqgIdLWJKAA&amp;sll=44.736735,4.917068&amp;sspn=0.140962,0.308647&amp;hl=fr&amp;mra=ls&amp;ie=UTF8&amp;t=m&amp;z=12" style="color:#0000FF;text-align:left">Agrandir le plan</a></small>
					</div>
			<?php endif; ?>
	    </section>
    </div>
</div>

<?php get_footer(); ?>