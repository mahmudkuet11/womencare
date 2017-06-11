<?php 

	/*
	Widget Name: Custom Facebook Box Widget
	Version: 1.0
	Author: Tohid Golkar
	Author URI: http://tohidgolkar.com
	Description: A Widget to display Facebook Box.
	*/

	class official_facebook_widget extends WP_Widget {
	
		public function __construct() {
			parent::__construct(
				'official_facebook',
				' OFFICIAL : Facebook Box',
				array('description' => __('Displays a Facebook Box', 'official'))
			); 
		}
		
		public function form($instance) {
			
			$defaults = array('title' => 'Find us on Facebook', 'page_url' => '', 'color_scheme' => 'light', 'show_faces' => 'on', 'show_stream' => false, 'show_header' => 'on');
			$instance = wp_parse_args((array) $instance, $defaults); ?>
			
			<p>
				<label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title: <small>(Optional)</small>', 'official'); ?></label>
				<input class="widefat" style="width: 216px;" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo $instance['title']; ?>" />
			</p>
			
			<p>
				<label for="<?php echo $this->get_field_id('page_url'); ?>"><?php _e('Facebook Page URL:', 'official'); ?></label>
				<input class="widefat" style="width: 216px;" id="<?php echo $this->get_field_id('page_url'); ?>" name="<?php echo $this->get_field_name('page_url'); ?>" value="<?php echo $instance['page_url']; ?>" />
			</p>
			
			
			<p>
				<label for="<?php echo $this->get_field_id('color_scheme'); ?>"><?php _e('Color Scheme:', 'official'); ?></label> 
				<select id="<?php echo $this->get_field_id('color_scheme'); ?>" name="<?php echo $this->get_field_name('color_scheme'); ?>" class="widefat" style="width:100%;">
					<option <?php if ('light' == $instance['color_scheme']) echo 'selected="selected"'; ?>>light</option>
					<option <?php if ('dark' == $instance['color_scheme']) echo 'selected="selected"'; ?>>dark</option>
				</select>
			</p>
			
			<p>
				<input class="checkbox" type="checkbox" <?php checked($instance['show_faces'], 'on'); ?> id="<?php echo $this->get_field_id('show_faces'); ?>" name="<?php echo $this->get_field_name('show_faces'); ?>" /> 
				<label for="<?php echo $this->get_field_id('show_faces'); ?>"><?php _e('Show faces', 'official'); ?></label>
			</p>
			
			<p>
				<input class="checkbox" type="checkbox" <?php checked($instance['show_stream'], 'on'); ?> id="<?php echo $this->get_field_id('show_stream'); ?>" name="<?php echo $this->get_field_name('show_stream'); ?>" /> 
				<label for="<?php echo $this->get_field_id('show_stream'); ?>"><?php _e('Show stream', 'official'); ?></label>
			</p>
			
			<p>
				<input class="checkbox" type="checkbox" <?php checked($instance['show_header'], 'on'); ?> id="<?php echo $this->get_field_id('show_header'); ?>" name="<?php echo $this->get_field_name('show_header'); ?>" /> 
				<label for="<?php echo $this->get_field_id('show_header'); ?>"><?php _e('Show facebook header', 'official'); ?></label>
			</p>
			
		<?php
       
		}
		
		public function update($new_instance, $old_instance) {
			$instance = $old_instance; 
		
			$instance['title'] = strip_tags($new_instance['title']);
			$instance['page_url'] = $new_instance['page_url'];
			$instance['color_scheme'] = $new_instance['color_scheme'];
			$instance['show_faces'] = $new_instance['show_faces'];
			$instance['show_stream'] = $new_instance['show_stream'];
			$instance['show_header'] = $new_instance['show_header'];
	
			return $instance;
		}
		
		public function widget($args, $instance) {
			
			extract($args);

			$title = apply_filters('widget_title', $instance['title']);
			$page_url = $instance['page_url'];
			$width = '340';
			$color_scheme = $instance['color_scheme'];
			$show_faces = isset($instance['show_faces']) ? 'true' : 'false';
			$show_stream = isset($instance['show_stream']) ? 'true' : 'false';
			$show_header = isset($instance['show_header']) ? 'true' : 'false';
			
			
			$height = 68;
			
			if($show_faces == 'true') {
				$height +=306;
			}
			
			if($show_stream == 'true') {
				$height += 302;
			}
			
			if($show_header == 'true' && ($show_stream == 'true' || $show_faces == 'true')) {
				$height += 28;
			}

			echo $before_widget;
	
			if($title) {
				echo $before_title.$title.$after_title;
			}
			
			if($page_url): ?>
				<iframe src="//www.facebook.com/plugins/likebox.php?href=<?php echo urlencode($page_url); ?>&amp;width=<?php echo $width; ?>&amp;colorscheme=<?php echo $color_scheme; ?>&amp;show_faces=<?php echo $show_faces; ?>&amp;stream=<?php echo $show_stream; ?>&amp;header=<?php echo $show_header; ?>&amp;height=<?php echo $height; ?>&amp;border_color=%23FFF" scrolling="no" frameborder="0" style="overflow:hidden; width:<?php echo $width; ?>px; height: <?php echo $height; ?>px;" allowTransparency="true"></iframe>
			<?php endif;
			
			echo $after_widget;
		
		}
	}

	register_widget('official_facebook_widget');

?>