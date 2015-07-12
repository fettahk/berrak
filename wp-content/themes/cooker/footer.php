		</div><!--Closing Wrapper Div-->	
		 
		 <?php global  $social_links, $cooker_options; ?>
		 
		<footer>
			<div class="footer-holder">
						<div class="links social-links first">
							<h6>follow us on...</h6>
							<ul>
								<?php 
									if(!empty($social_links)) :
										foreach ($social_links as $name => $link):?>
											<li class="<?php echo $name; ?>"><a href="<?php echo $link; ?>"><?php echo $name; ?></a></li>
								<?php 
										endforeach;
									endif;
								?>
								<li class="rss"><a href="<?php bloginfo_rss('rss_url') ?>">Rss feed</a></li>
							</ul>
						</div>
						<?php if ( is_active_sidebar( 'footer-list-ckrw' ) ) {
								dynamic_sidebar('footer-list-ckrw'); 
						}1?>
						<div class="credits">
							<div class="copyright-text">
								<?php if(isset($cooker_options['footer_copyright_text'])){
										echo $cooker_options['footer_copyright_text'];
									}else{
									?>
									Copyright &copy; 2011 Cooker. All rights reserved Designmania.eu
									<?php } ?>
									</div>
							<div class="flogo">&nbsp;</div>
						</div>
			</div>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>