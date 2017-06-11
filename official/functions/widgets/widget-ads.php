<?php 

	/*
	Widget Name: Custom Ads Widget
	Version: 1.0
	Author: Tohid Golkar
	Author URI: http://tohidgolkar.com
	Description: A Widget to display Ads.
	*/

	class official_ads_widget extends WP_Widget {
	
		public function __construct() {
			parent::__construct(
				'official_ads',
				' OFFICIAL : Ads',
				array('description' => __('Displays ads.', 'official'))
			); 
		}
		
		public function form($instance) {
			
			$default_ad = 'http://lorempixel.com/125/125/city/';
			$defaults = array(
				'title' => 'Advertisement',
				'url1' => '#',
				'ads1' => $default_ad,
				'url2' => '#',
				'ads2' => $default_ad,
				'url3' => '#',
				'ads3' => $default_ad,
				'url4' => '#',
				'ads4' => $default_ad,
				 );
				 
			$instance = wp_parse_args( (array) $instance, $defaults ); ?>
			
			<p>
				<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e('Title: <small>(Optional)</small>', 'official'); ?></label>
				<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" />
			</p>
            
			<P>
            	Best Image width is 125px (2 Columns)
            </P>
            
			<p>
				<label for="<?php echo $this->get_field_id( 'url1' ); ?>"><?php _e('Ads #1 Link:', 'official'); ?></label>
				<input class="widefat" id="<?php echo $this->get_field_id( 'url1' ); ?>" name="<?php echo $this->get_field_name( 'url1' ); ?>" value="<?php echo $instance['url1']; ?>" />
			</p>
	
			<p>
				<label for="<?php echo $this->get_field_id( 'ads1' ); ?>"><?php _e('Ads #1 Image URL:', 'official'); ?></label>
				<input class="widefat" id="<?php echo $this->get_field_id( 'ads1' ); ?>" name="<?php echo $this->get_field_name( 'ads1' ); ?>" value="<?php echo $instance['ads1']; ?>" />
			</p>
			
			<p>
				<label for="<?php echo $this->get_field_id( 'url2' ); ?>"><?php _e('Ads #2 Link:', 'official'); ?></label>
				<input class="widefat" id="<?php echo $this->get_field_id( 'url2' ); ?>" name="<?php echo $this->get_field_name( 'url2' ); ?>" value="<?php echo $instance['url2']; ?>" />
			</p>
	
			<p>
				<label for="<?php echo $this->get_field_id( 'ads2' ); ?>"><?php _e('Ads #2 Image URL:', 'official'); ?></label>
				<input class="widefat" id="<?php echo $this->get_field_id( 'ads2' ); ?>" name="<?php echo $this->get_field_name( 'ads2' ); ?>" value="<?php echo $instance['ads2']; ?>" />
			</p>
			
			<p>
				<label for="<?php echo $this->get_field_id( 'url3' ); ?>"><?php _e('Ads #3 Link:', 'official'); ?></label>
				<input class="widefat" id="<?php echo $this->get_field_id( 'url3' ); ?>" name="<?php echo $this->get_field_name( 'url3' ); ?>" value="<?php echo $instance['url3']; ?>" />
			</p>
	
			<p>
				<label for="<?php echo $this->get_field_id( 'ads3' ); ?>"><?php _e('Ads #3 Image URL:', 'official'); ?></label>
				<input class="widefat" id="<?php echo $this->get_field_id( 'ads3' ); ?>" name="<?php echo $this->get_field_name( 'ads3' ); ?>" value="<?php echo $instance['ads3']; ?>" />
			</p>
			
			<p>
				<label for="<?php echo $this->get_field_id( 'url4' ); ?>"><?php _e('Ads #4 Link:', 'official'); ?></label>
				<input class="widefat" id="<?php echo $this->get_field_id( 'url4' ); ?>" name="<?php echo $this->get_field_name( 'url4' ); ?>" value="<?php echo $instance['url4']; ?>" />
			</p>
	
			<p>
				<label for="<?php echo $this->get_field_id( 'ads4' ); ?>"><?php _e('Ads #4 Image URL:', 'official'); ?></label>
				<input class="widefat" id="<?php echo $this->get_field_id( 'ads4' ); ?>" name="<?php echo $this->get_field_name( 'ads4' ); ?>" value="<?php echo $instance['ads4']; ?>" />
			</p>
            
			<?php
		}
		
		public function update($new_instance, $old_instance) {
			$instance = $old_instance; 
		
			$instance['title'] = strip_tags( $new_instance['title'] );
			
			$instance['url1'] = strip_tags( $new_instance['url1'] );
			$instance['ads1'] = strip_tags( $new_instance['ads1'] );
			
			$instance['url2'] = strip_tags( $new_instance['url2'] );
			$instance['ads2'] = strip_tags( $new_instance['ads2'] );
			
			$instance['url3'] = strip_tags( $new_instance['url3'] );
			$instance['ads3'] = strip_tags( $new_instance['ads3'] );
			
			$instance['url4'] = strip_tags( $new_instance['url4'] );
			$instance['ads4'] = strip_tags( $new_instance['ads4'] );
	
			return $instance;
		}
		
		public function widget($args, $instance) {
			
			extract($args);
			$title = apply_filters('widget_title', $instance['title']);
			
			$url1 = $instance['url1'];
			$ads1 = $instance['ads1'];
			
			$url2 = $instance['url2'];
			$ads2 = $instance['ads2'];
			
			$url3 = $instance['url3'];
			$ads3 = $instance['ads3'];
			
			$url4 = $instance['url4'];
			$ads4 = $instance['ads4'];
			
			echo $before_widget;
			
			if($title) {
				echo $before_title.$title.$after_title;
			}
			
			echo '<div class="ads clearfix">';
				if (!empty($ads1)) { echo '<a href="'.$url1.'" target="_blank"><img src="'.$ads1.'" /></a>';}
				if (!empty($ads2)) { echo '<a href="'.$url2.'" target="_blank"><img src="'.$ads2.'" /></a>';}
				if (!empty($ads3)) { echo '<a href="'.$url3.'" target="_blank"><img src="'.$ads3.'" /></a>';}
				if (!empty($ads4)) { echo '<a href="'.$url4.'" target="_blank"><img src="'.$ads4.'" /></a>';}
			echo '</div>';
	
			echo $after_widget; 
		}
	}

	register_widget('official_ads_widget');

?>