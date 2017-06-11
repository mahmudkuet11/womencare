<?php //Share Widget in Blog and Portfolio ?>
<?php $btn = _option('share_button');?>

<div class="grid_12 alpha omega share-post mb50 mt50 clearfix">
	
    <div class="clearfix">
        <h3 class="col-title"><?php echo _option('share_title_' . get_post_type()); ?></h3>
        <span class="liner"></span>
    </div>
	
    <?php if($btn['twitter']) { ?>
    <div class="btn-share"><a href="https://twitter.com/share" class="twitter-share-button" data-count="vertical">Tweet</a></div>
    <?php } ?>
    
	<?php if($btn['facebook']) { ?>
    <div class="btn-share"><div id="fb-root"></div><div class="fb-like" data-send="false" data-layout="box_count" data-show-faces="false"></div></div>
    <?php } ?>
    
    <?php if($btn['linkedin']) { ?>
    <div class="btn-share"><script type="IN/Share" data-counter="top"></script></div>
    <?php } ?>
    
    <?php if($btn['xing']) { ?>
    <div class="btn-share"><script data-counter="top" type="XING/Share"></script></div>
    <?php } ?>
    
    <?php if($btn['google']) { ?>
    <div class="btn-share"><g:plusone size="tall"></g:plusone></div>
    <?php } ?>
    
    <?php if($btn['digg']) { ?>
    <div class="btn-share"><a class='DiggThisButton DiggMedium'></a></div>
    <?php } ?>
    
    <?php if($btn['reddit']) { ?>
    <div class="btn-share"><script type="text/javascript" src="//www.reddit.com/static/button/button2.js"></script></div>
    <?php } ?>
    
</div><!-- close share post -->

<script type="text/javascript">	
	/* <![CDATA[ */
	
		<?php if($btn['twitter']) { ?>
		// Twitter Share
		! function (d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0],
				p = /^http:/.test(d.location) ? 'http' : 'https';
			if (!d.getElementById(id)) {
				js = d.createElement(s);
				js.id = id;
				js.src = p + '://platform.twitter.com/widgets.js';
				fjs.parentNode.insertBefore(js, fjs);
			}
		}(document, 'script', 'twitter-wjs');
		<?php } ?>
		
		<?php if($btn['facebook']) { ?>
		// Facebook Like
		(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s); js.id = id;
			js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=138798126277575";
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
		<?php } ?>
		
		<?php if($btn['xing']) { ?>
		// Xing
		;(function (d, s) {
			var x = d.createElement(s),
			s = d.getElementsByTagName(s)[0];
			x.src = "https://www.xing-share.com/js/external/share.js";
			s.parentNode.insertBefore(x, s);
		})(document, "script");
		<?php } ?>
	/* ]]> */
	</script>
    <?php if($btn['digg']) { ?>
	<script type="text/javascript" src="//widgets.digg.com/buttons.js"></script>
    <?php } ?>
    <?php if($btn['google']) { ?>
	<script type="text/javascript" src="//apis.google.com/js/plusone.js"></script>
    <?php } ?>
    <?php if($btn['linkedin']) { ?>
	<script type="text/javascript" src="//platform.linkedin.com/in.js"></script>
    <?php } ?>