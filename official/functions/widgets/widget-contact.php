<?php 

	/*
	Widget Name: Custom Contact Widget
	Version: 1.1
	Author: Tohid Golkar
	Author URI: http://tohidgolkar.com
	Description: A Widget to display Quick Contact Information.
	*/

	class official_contact_widget extends WP_Widget {
	
		public function __construct() {
			parent::__construct(
				'official_contact',
				' OFFICIAL : Contact',
				array('description' => __('Displays a quick contact information', 'official'))
			); 
		}
		
		public function form($instance) {
			$defaults = array(
				'title' => __('Contact', 'official'),
				'address' => '',
				'tel' => '',
				'email' => '',
				'fax' => '',
				'map' => 'http://'
				
			);
			
			$instance = wp_parse_args((array) $instance, $defaults);
			
			?>
			<!-- Title -->
			<p>
				<label for="<?php echo $this->get_field_id('title') ?>"><?php _e('Title: <small>(Optional)</small>', 'official'); ?></label>
				<input type="text" class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo esc_attr($instance['title']); ?>" />
			</p>
            
            <!-- Address -->
			<p>
				<label for="<?php echo $this->get_field_id('address') ?>"><?php _e('Address:', 'official'); ?></label>
				<input type="text" class="widefat" id="<?php echo $this->get_field_id('address'); ?>" name="<?php echo $this->get_field_name('address'); ?>" value="<?php echo esc_attr($instance['address']); ?>" />
			</p>
			
            
			<!-- Tel -->
			<p>
				<label for="<?php echo $this->get_field_id('tel') ?>"><?php _e('Tel:', 'official'); ?></label>
				<input type="text" class="widefat" id="<?php echo $this->get_field_id('tel'); ?>" name="<?php echo $this->get_field_name('tel'); ?>" value="<?php echo esc_attr($instance['tel']); ?>" />
			</p>
            
            <!-- Fax -->
			<p>
				<label for="<?php echo $this->get_field_id('fax') ?>"><?php _e('Fax:', 'official'); ?></label>
				<input type="text" class="widefat" id="<?php echo $this->get_field_id('fax'); ?>" name="<?php echo $this->get_field_name('fax'); ?>" value="<?php echo esc_attr($instance['fax']); ?>" />
			</p>
            
            <!-- Email -->
			<p>
				<label for="<?php echo $this->get_field_id('email') ?>"><?php _e('Email:', 'official'); ?></label>
				<input type="text" class="widefat" id="<?php echo $this->get_field_id('email'); ?>" name="<?php echo $this->get_field_name('email'); ?>" value="<?php echo esc_attr($instance['email']); ?>" />
			</p>
            
            <!-- Map -->
			<p>
				<label for="<?php echo $this->get_field_id('map') ?>"><?php _e('Map URL:', 'official'); ?></label>
				<input type="text" class="widefat" id="<?php echo $this->get_field_id('map'); ?>" name="<?php echo $this->get_field_name('map'); ?>" value="<?php echo esc_attr($instance['map']); ?>" />
			</p>
            
			<?php
		}
		
		public function update($new_instance, $old_instance) {
			$instance = $old_instance;
			
			$instance['title'] = strip_tags($new_instance['title']);
			$instance['address'] = $new_instance['address'];
			$instance['tel'] = $new_instance['tel'];
			$instance['fax'] = $new_instance['fax'];
			$instance['email'] = $new_instance['email'];
			$instance['map'] = $new_instance['map'];

			return $instance;
		}
		
		public function widget($args, $instance) {
			extract($args);
			

			$title = apply_filters('widget_title', $instance['title']);
			$address =  apply_filters('widget_text', $instance['address']);
			$tel = apply_filters('widget_text',$instance['tel']);
			$fax = apply_filters('widget_text',$instance['fax']);
			$email = $instance['email'];
			$map = $instance['map'];
			
			echo $before_widget;
			
			if ($title) {
				echo $before_title . $title . $after_title;
			}
			
			echo '<div class="address">';
			
			if ($address) : ?>
            	<p> <?php echo $address; ?> </p>
			<?php endif; 

			
			if ($tel) : ?>
            	<div> <?php echo do_shortcode('[icon icon="phone" size="xs"]'); echo $tel; ?> </div>
			<?php endif; 
			
			if ($fax) : ?>
            	<div> <?php echo do_shortcode('[icon icon="print" size="xs"]'); echo $fax; ?> </div>
			<?php endif; 
			
			if ($email) : ?>
            	<div><a href="mailto:<?php echo $email; ?>" target="_blank"><?php echo do_shortcode('[icon icon="envelope-alt" size="xs"]'); echo $email; ?></a> </div>
			<?php endif; 
			
			if ($map) : ?>
            	<div><a href="<?php echo $map; ?>" target="_blank"><?php echo do_shortcode('[icon icon="globe" size="xs"]'); _e('See Map','official')?></a> </div>
			<?php endif; 
			
			
			
			echo '</div>';
			echo $after_widget; 
		}
	}

	register_widget('official_contact_widget');

?>