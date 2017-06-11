<?php 

// Template fo NiceScroll 
// by: ThemeTor (Tohid Golkar)
// Version 1.1
// www.themetor.com


if (_option('nicescroll',1)==1){
		
	
	add_action( 'wp_footer', 'nicescroll_script' );
	
	function nicescroll_script() {
		
		wp_register_script('jquery.nicescroll', get_template_directory_uri() . '/js/jquery.nicescroll.min.js','jquery','3.5.1', true);
		wp_enqueue_script('jquery.nicescroll');
		
		$cursorwidth = _option('nicescroll_width','7px');
		$cursorborderradius = _option('nicescroll_radius','7px');
		if ($cursorwidth==''){$cursorwidth='7px';}
		if ($cursorborderradius==''){$cursorborderradius='7px';}
		
			?>
				<script type="text/javascript">
					jQuery(document).ready(function ($) {
						var ua = navigator.userAgent;
						if (!/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini|Mobile|mobile|Chrome&&Android/i.test(ua)){
							$("html").niceScroll({zindex:999,cursorborder:"",cursorwidth:"<?php echo esc_js($cursorwidth); ?>",cursorborderradius:"<?php echo esc_js($cursorborderradius); ?>",cursorcolor:"#191919",cursoropacitymin:.5,horizrailenabled:0}); 
						}
					});
				</script>
				<?php
	}

}
?>