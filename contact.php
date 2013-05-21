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
					<iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.fr/maps?f=d&amp;source=s_d&amp;saddr=&amp;daddr=44.731545,4.874797&amp;hl=fr&amp;geocode=&amp;sll=44.732254,4.877522&amp;sspn=0.005145,0.011362&amp;t=h&amp;mra=mift&amp;mrsp=1&amp;sz=17&amp;ie=UTF8&amp;ll=44.734662,4.878316&amp;spn=0.01067,0.018239&amp;z=15&amp;output=embed"></iframe><br /><small><a href="https://maps.google.fr/maps?f=d&amp;source=embed&amp;saddr=&amp;daddr=44.731545,4.874797&amp;hl=fr&amp;geocode=&amp;sll=44.732254,4.877522&amp;sspn=0.005145,0.011362&amp;t=h&amp;mra=mift&amp;mrsp=1&amp;sz=17&amp;ie=UTF8&amp;ll=44.734662,4.878316&amp;spn=0.01067,0.018239&amp;z=15" style="color:#0000FF;text-align:left">Agrandir le plan</a></small>
				</div>
			<?php endif; ?>
	    </section>
    </div>
</div>

<?php get_footer(); ?>