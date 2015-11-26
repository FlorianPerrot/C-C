<?php get_header();?>
	<div id="content">
	    <?php include (TEMPLATEPATH . "/bloc_left.php"); ?>
	    
	    <div class="bloc-content bloc-center">
		    <?php include (TEMPLATEPATH . "/sous_menu.php"); ?>
		    
		    <section class="main">
				<?php if ($url[0] == "category") :?>
				<div class="post" style="padding:10px 20px 10px 20px;background:white;margin-bottom:20px">
					<h2>Les galeries</h2>
					<p>Un grand merci à tous les "Jeunes" pour les moments magiques qu'ils nous permettent de vivre<br/></p>
					<p style="text-align:right"> L'équipe de Culture & Cultures</p>
				</div>
				<?php elseif ($url[0] == "articles") :?>
				<div class="post" style="padding:10px;background:white;margin-bottom:20px;min-heigth:0px;">
					<h2 style="text-align: center">Les Articles</h2>
				</div>
				<?php endif; ?>
				<?php get_template_part('loop'); ?>
		    </section>
	    </div>
	</div>
<?php get_footer();?>
