 <?php 
 /*
 Template for Footer
 */
 ?>


 	<footer>
 		
	 	<div class="footer_area">
	 		<div class="top_section">
	 			<div class="links">
			 		<div class="column">
			 			<span><?php echo _option('first_footer_menu_title') ?></span>
			 			
						<?php wp_nav_menu( array( 'theme_location' => 'footer-first-menu', 'container' => false, 'depth'=>1 ) ); ?>


			 		</div>

			 		<div class="column">
			 			<span><?php echo _option('second_footer_menu_title') ?></span>
			 			<?php wp_nav_menu( array( 'theme_location' => 'footer-second-menu', 'container' => false, 'depth'=>1 ) ); ?>
			 		</div>

			 		<div class="column">
			 			<span><?php echo _option('third_footer_menu_title') ?></span>
			 			<?php wp_nav_menu( array( 'theme_location' => 'footer-third-menu', 'container' => false, 'depth'=>1 ) ); ?>
			 		</div>
	 			</div>

	 			<div class="social_area">
	 				<ul>
	 					<li>
	 						<a  target="_blank" href="<?php echo _option('facebook_link') ?>">
	 							<span class="fa-stack fa-lg">
								  <i class="fa fa-circle fa-stack-2x facebook"></i>
								  <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
								</span>
	 						</a>
	 					</li>
	 					<li>
	 						<a  target="_blank" href="<?php echo _option('twitter_link') ?>">
	 							<span class="fa-stack fa-lg">
								  <i class="fa fa-circle fa-stack-2x twitter"></i>
								  <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
								</span>
	 						</a>
	 					</li>
	 					<!--<li>
	 						<a href="<?php /*echo _option('youtube_link') */?>">
	 							<span class="fa-stack fa-lg">
								  <i class="fa fa-circle fa-stack-2x youtube"></i>
								  <i class="fa fa-youtube fa-stack-1x fa-inverse"></i>
								</span>
	 						</a>
	 					</li>
	 					<li>
	 						<a href="<?php /*echo _option('google_plus_link') */?>">
	 							<span class="fa-stack fa-lg">
								  <i class="fa fa-circle fa-stack-2x google-plus"></i>
								  <i class="fa fa-google-plus fa-stack-1x fa-inverse"></i>
								</span>
	 						</a>
	 					</li>-->
	 					<li>
	 						<a target="_blank" href="<?php echo _option('instagram_link') ?>">
	 							<span class="fa-stack fa-lg">
								  <i class="fa fa-circle fa-stack-2x instagram"></i>
								  <i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
								</span>
	 						</a>
	 					</li>
	 				</ul>
	 			</div>

	 			<div class="clearfix"></div>

	 		</div>
	 		<div class="copyright"><?php echo _option('copyright_text') ?></div>
	 	</div>

 	</footer>

	</div><!-- end layout -->
	</div><!-- end frame -->


	<?php if (_option('footer_gototop')==1): ?>
		<div id="toTop"><i class="icon-angle-up"></i></div><!-- Back to top -->
	<?php endif; ?>
    



<?php wp_footer(); ?>


</body>
</html>