
<?php $player_id = 'jplayer_' . rand(); ?>

<div id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> >
    <div id="<?php echo $player_id ; ?>" class="jp-jplayer"></div>
    <div id="jp_container_1" class="jp-audio">
        <div class="jp-type-single">
            <div class="jp-gui jp-interface">
                <ul class="jp-controls">
                    <li><a href="javascript:;" class="jp-play" tabindex="1"><i class="icon-play"></i></a></li>
                    <li><a href="javascript:;" class="jp-pause" tabindex="1"><i class="icon-pause"></i></a></li>
                    <li><a href="javascript:;" class="jp-mute" tabindex="1" title="mute"><i class="icon-volume-up"></i></a></li>
                    <li><a href="javascript:;" class="jp-unmute" tabindex="1" title="unmute"><i class="icon-volume-down"></i></a></li>
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

    
    <?php get_template_part('functions/post-format/single-meta'); ?>
    
    
</div><!-- post -->

<?php wp_enqueue_style( 'jplayer' ); ?>
<?php wp_enqueue_script('jquery.jplayer'); ?>

<script type="text/javascript">
/* <![CDATA[ */
	jQuery(document).ready(function($) {
		jQuery("#<?php echo $player_id ; ?>").jPlayer({
			ready: function () {
				$(this).jPlayer("setMedia", {
					mp3:"<?php echo get_post_meta($post->ID, 'official_format_audio_embed', true); ?>"
				});
			},
			swfPath: "js",
			supplied: "mp3",
			wmode: "window",
			smoothPlayBar: true,
			keyEnabled: true
		});
	});
/* ]]> */
</script>