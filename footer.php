			<footer>
				<?php global $link;?>
				<a href="#" onclick="return false;"><img class="actions-site" alt="ouverture / fermeture du site" src="<?php echo get_bloginfo('template_directory');?>/img/site_unlock.png" width="300px" height="80px"/></a>
				<div class="footer-content">
					<div>
						<p><a href="<?php echo get_bloginfo('url');echo '/'.$link['planDuSite'];?>">Plan du site</a> | <a href="<?php echo get_bloginfo('url');echo '/'.$link['mentionsLegales'];?>">Mentions légales</a><br />
							Culture et Cultures - 275 chemin de Gouste-Soulet - 26400 GRANE<br />
							Tél. : 06.78.72.46.85 - Mail : <a class="link-courriel" href="mailto:asso.cultureetcultures at laposte.net"><span class="text-courriel">asso.cultureetcultures at laposte.net</span></a><br />
							Conception & réalisation : <a href="http://arg-studio.fr">Arg STUDIO</a>
						</p>
					</div>
				</div>
			</footer>
		
		</div>
		<?php wp_footer();?>
	</body>
</html>