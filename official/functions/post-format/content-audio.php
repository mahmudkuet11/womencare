<?php 
	global $thdglkr_blog_style,$thdglkr_blog_thumb_class,$thdglkr_blog_img,$thdglkr_blog_iframe_class;
	global $thdglkr_masonry;
	$masonry_class ='';
	$masonry_meta = $thdglkr_blog_style;
	if ($thdglkr_masonry == true){
		$masonry_class = 'mitem grid_4 ';
		$masonry_meta = 'masonry';
		}
		
	$player_id = 'jplayer_' . rand();
	$player_inline = 'jplayer_inline_' . rand();
?>

<div id="post-<?php the_ID(); ?>" <?php post_class($masonry_class . ' clearfix'); ?> >
    <div id="<?php echo $player_id ; ?>" class="jp-jplayer"></div>
    <div id="jp_container_1" class="jp-audio jp<?php echo $thdglkr_blog_style; ?> <?php echo $thdglkr_blog_iframe_class; ?>">
        <div class="jp-type-single">
            <div class="jp-gui jp-interface" id="int<?php echo $player_id ; ?>">
                <ul class="jp-controls">
                    <li><a href="javascript:;" class="jp-play" tabindex="1"><i class="icon-play"></i></a></li>
                    <li><a href="javascript:;" class="jp-pause" tabindex="1"><i class="icon-pause"></i></a></li>
                    <li><a href="javascript:;" class="jp-mute" tabindex="1" title="mute"><i class="icon-volume-up"></i></a></li>
                    <li><a href="javascript:;" class="jp-unmute" tabindex="1" title="unmute"><i class="icon-volume-off"></i></a></li>
                </ul>
                <div class="jp-progress">
                    <div class="jp-seek-bar">
                        <div class="jp-play-bar"></div>
                    </div>
                </div>
                <div class="jp-volume-bar"><div class="jp-volume-bar-value"></div></div>
                <div class="jp-time-holder">
                    <div class="jp-current-time"></div>
                    <div class="jp-duration"></div>
                </div>
            </div>
        </div>
    </div><!-- end player -->

    
    <?php get_template_part('functions/post-format/content-meta',$masonry_meta); ?>
    
    <?php wp_enqueue_style( 'jplayer' ); ?>
	<?php wp_enqueue_script('jquery.jplayer'); ?>

	<?php

	$thdglkr_audio_embed=get_post_meta($post->ID, 'official_format_audio_embed', true);

	?>
		<script type="text/javascript">
			jQuery(document).ready(function ($) {
				try{js_audioPlayer('<?php echo $player_id ; ?>','<?php echo $thdglkr_audio_embed ?>');}catch(e){}
			});
		</script>
</div><!-- post -->

	

