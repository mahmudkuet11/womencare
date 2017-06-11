<?php 

	/*
	Widget Name: Custom Embed Widget
	Version: 1.0
	Author: Tohid Golkar
	Author URI: http://tohidgolkar.com
	Description: A Widget to Embed.
	*/

	class official_embed_widget extends WP_Widget {
	
		public function __construct() {
			parent::__construct(
				'official_embed',
				' OFFICIAL : Embed Videos',
				array('description' => __('Displays Embed Videos', 'official'))
			); 
		}
		
		public function form($instance) {
			$defaults = array(
				'title' => 'Video',
				'embed' => '',
				'youtube_video' => '',
				'vimeo_video' =>'',
				'description' => ''
				);
			$instance = wp_parse_args( (array) $instance, $defaults ); ?>
			
			<p>
				<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e('Title: <small>(Optional)</small>', 'official'); ?></label>
				<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" />
			</p>
			<p>
				<label for="<?php echo $this->get_field_id( 'embed' ); ?>"><?php _e('Embed Code:', 'official'); ?>:</label>
				<textarea class="widefat" rows="4" cols="20" id="<?php echo $this->get_field_id( 'embed' ); ?>" name="<?php echo $this->get_field_name( 'embed' ); ?>"><?php echo $instance['embed']; ?></textarea>
			</p>
            
            <em style="display:block; border-bottom:1px solid #ddd; margin:25px 0 10px; color:#cc0000;">OR</em>
            <p>
                <label for="<?php echo $this->get_field_id( 'youtube_video' ); ?>"> <?php _e('Youtube Video ID:', 'official'); ?></label>
                <input id="<?php echo $this->get_field_id( 'youtube_video' ); ?>" name="<?php echo $this->get_field_name( 'youtube_video' ); ?>" value="<?php echo $instance['youtube_video']; ?>" class="widefat" type="text" />
                <small>if video url : http://www.youtube.com/watch?v=t0HiDgoLkAr  Enter above <strong>t0HiDgoLkAr</strong></small>
            </p>
            <em style="display:block; border-bottom:1px solid #ddd; margin:25px 0 10px; color:#cc0000;">OR</em>
            <p>
                <label for="<?php echo $this->get_field_id( 'vimeo_video' ); ?>"><?php _e('Vimeo Video ID:', 'official'); ?></label>
                <input id="<?php echo $this->get_field_id( 'vimeo_video' ); ?>" name="<?php echo $this->get_field_name( 'vimeo_video' ); ?>" value="<?php echo $instance['vimeo_video']; ?>" class="widefat" type="text" />
                <small>if video url : http://vimeo.com/62371769  Enter above <strong>62371769</strong></small>
            </p>
        
			<p>
				<label for="<?php echo $this->get_field_id( 'description' ); ?>"><?php _e('Description: (optional)', 'official'); ?></label>
				<textarea class="widefat" rows="2" cols="20" id="<?php echo $this->get_field_id( 'description' ); ?>" name="<?php echo $this->get_field_name( 'description' ); ?>"><?php echo $instance['description']; ?></textarea>
				<small>Description will display under the video</small>
            </p>
            
			<?php
		}
		
		public function update($new_instance, $old_instance) {
			$instance = $old_instance; 
		
			$instance['title'] = strip_tags( $new_instance['title'] );
			$instance['embed'] = $new_instance['embed'];
			$instance['description'] = $new_instance['description'];
			$instance['youtube_video'] = $new_instance['youtube_video'];
			$instance['vimeo_video'] = $new_instance['vimeo_video'];
			
			return $instance;
			}
			
			public function widget($args, $instance) {
				extract($args);
				$title = apply_filters('widget_title', $instance['title']);
				$embed = $instance['embed'];
				$youtube_video = $instance['youtube_video'];
				$vimeo_video = $instance['vimeo_video'];
				$description = $instance['description'];
				
				
				echo $before_widget;
				
				
				if($title) {
					echo $before_title.$title.$after_title;
				}
				
				echo '<div class="embed">';
				
					if ( $embed ){
						 
						echo $embed ;
		
					} elseif ( $youtube_video ){
						
						// Youtube Video
						echo '<iframe width="100%" height="auto" src="http://www.youtube.com/embed/' . $youtube_video . '?rel=0" frameborder="0" allowfullscreen></iframe>' ;
					 
					} elseif ( $vimeo_video ){
						
						// Vimeo Video
						echo '<iframe src="http://player.vimeo.com/video/' . $vimeo_video . '" width="100%" height="auto" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>';
					}
					
					// Description
					if (!empty($description)) { echo '<p>' . $description . '</p>'; }
				
				echo '</div>';

				echo $after_widget;
		}
	}

	register_widget('official_embed_widget');

?>