<div class="side">
	<?php dynamic_sidebar(); ?>
	<?php wp_insert_user();?>

	<!-- Bouton RSS -->
	<a class="rss" href="<?php bloginfo('rss2_url'); ?>">
        <object type="image/svg+xml" data="wp-content/themes/CetC_theme/img/rss.svg" width="55" height="55">
            <img src="http://blog.advertstream.com/wp-content/uploads/2009/12/rss.png" width="55" height="55"/>
        </object>
    </a>

	<!-- Formulaire de recherche -->
	<?php //get_search_form(); ?>

	<!-- Archives -->
    <!--
	<ul class="list">
		<?php wp_get_archives('type=monthly'); ?>
	</ul>
    -->

</div>
