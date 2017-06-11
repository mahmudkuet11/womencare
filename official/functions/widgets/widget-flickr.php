<?php 

	/*
	Widget Name: Custom Flickr Widget
	Version: 1.0
	Author: Tohid Golkar
	Author URI: http://tohidgolkar.com
	Description: A Widget to display Flickr Photos.
	*/

	class official_flickr_widget extends WP_Widget {
	
		public function __construct() {
			parent::__construct(
				'official_flickr',
				' OFFICIAL : Flickr',
				array('description' => __('Displays Flickr Photos', 'official'))
			); 
		}
		
		public function form($instance) {
			$defaults = array(
				'title' => 'Flickr',
				'photos' => '9',
				'fid' => '29394465@N03'
				);
		$instance = wp_parse_args( (array) $instance, $defaults );
		
		?>
        
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e('Title: <small>(Optional)</small>', 'official'); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" />
		</p>
        <p>
			<label for="<?php echo $this->get_field_id( 'fid' ); ?>"><?php _e('Flickr ID:', 'official'); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'fid' ); ?>" name="<?php echo $this->get_field_name( 'fid' ); ?>" value="<?php echo $instance['fid']; ?>" />
            <br /><a href="http://idgettr.com/" target="_blank"><?php _e('Find your Flickr ID @ idGettr','official'); ?></a>
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'photos' ); ?>"><?php _e('Number of Photos:', 'official'); ?></label>
			<input style="width:50px;" class="widefat" id="<?php echo $this->get_field_id( 'photos' ); ?>" name="<?php echo $this->get_field_name( 'photos' ); ?>" value="<?php echo $instance['photos']; ?>" />
		</p>
            
		<?php
		
		}
		
		
		public function update($new_instance, $old_instance) {
			$instance = $old_instance; 
		
			$instance['title'] = strip_tags( $new_instance['title'] );
			$instance['fid'] = strip_tags( $new_instance['fid'] );
			$instance['photos'] = strip_tags( $new_instance['photos'] );
	
			return $instance;
		}
		
		public function widget($args, $instance) {
			
			extract($args);
			$title = apply_filters('widget_title', $instance['title']);
			$fid = $instance['fid'];
			$photos = $instance['photos'];

			echo $before_widget;
			
			if($title) {
				echo $before_title.$title.$after_title;
			}
			
			echo '<div id="wrap_flickr" class="clearfix">';
			echo '<script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count='.$photos.'&display=latest&size=s&layout=x&source=user&user='.$fid.'"></script>';
			echo '</div>';
	
			echo $after_widget;
		
		}
	}

	register_widget('official_flickr_widget');

?>