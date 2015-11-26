			<footer>
				<?php global $link;?>
				<a href="#"><img class="actions-site" alt="ouverture / fermeture du site" src="<?php echo get_bloginfo('template_directory');?>/img/site_unlock.png" width="300px" height="80px"/></a>
				<div class="footer-content">
					<div>
						<p>
							<a href="<?php echo get_bloginfo('url');echo '/'.$link['planDuSite'];?>">Plan du site</a> | <a href="<?php echo get_bloginfo('url');echo '/'.$link['mentionsLegales'];?>">Mentions légales</a><br />
						</p>
						<p style="padding-top:15px;">	
							<span>Culture et Cultures - 275 chemin de Gouste-Soulet - 26400 GRANE</span><br />
							<span>Téléphone : 09.88.77.33.15</span><br />
							<span>Association régie par la loi du 1er juillet 1901</span>
						</p>
					</div>
				</div>
			</footer>
		
		</div>
		<script type="text/javascript">
			$(window).load(function(){
				$('#wait').hide();
				$("#content").fadeIn(1000); 
				calTailleBlocCentral();
			});
		</script>
		<?php wp_footer();?>
	</body>
</html>
