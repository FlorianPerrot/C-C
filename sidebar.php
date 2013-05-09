<div class="bloc-content side">
	<section>
		<h4>Mini-galerie</h4>
		<div id="mini-galerie" class="crayon article-css-35 demoTime">
			<div id="demoWrap">
		    	<a id="wrap1" class="ancre"></a>
		        <a id="wrap2" class="ancre"></a>
		        <div id="liens">
		        	<ul>
		            	<li><a href="#wrap1"><span>Voir l'image 1</span></a></li>
		                <li><a href="#wrap2"><span>Voir l'image 2</span></a></li>
		             </ul>
		         </div>
		         <div id="imgs">
		         	<ul>
		            	<li><img src="<?php echo get_bloginfo('template_directory');?>/img/galerie/gite1.jpg" alt="Image de nature abstraite" width='150' height='94' style='height:94px;width:150px;' /></li>
		                <li><img src="<?php echo get_bloginfo('template_directory');?>/img/galerie/gite2.jpg" alt="Image de nature abstraite" width='150' height='94' style='height:94px;width:150px;' /></li>
		            </ul>
		         </div>
			</div>
		</div>
	</section>
	<!-- The meta -->
	<section>
		<h4>Mes informations</h4>
		<?php $user = wp_get_current_user();?>
		<?php if($user->ID == 0): ?>
				<a href="<?php echo bloginfo('url');?>/wp-login.php">Se connecter</a> / <a href="<?php echo bloginfo('url');?>/wp-login.php?action=register"> S'inscrire</a>
		<?php else:?>
				Salut, <?php echo $user->user_login;?>
				<a href="<?php echo bloginfo('url');?>/logout">Se déconnecter</a>
		<?php endif; ?>
	</section>
</div>