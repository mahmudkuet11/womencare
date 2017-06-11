<?php 

	/*
	Widget Name: Custom Subscription Widget
	Version: 1.2
	Author: Tohid Golkar
	Author URI: http://tohidgolkar.com
	Description: A Widget for Subscription by Google Feedburner.
	*/


	class official_subscription_widget extends WP_Widget {
	
		public function __construct() {
			parent::__construct(
				'official_subscription',
				' OFFICIAL : SUBSCRIPTION',
				array('description' => __('Subscription by Google Feedburner.', 'official'))
			); 
		}
		
		public function widget($args, $instance) {
			
			extract($args);
			echo $args['before_widget'];
			
			$page_url='//feedburner.google.com/fb/a/mailverify';
			if ( ! empty( $instance['page_url'] ) ) {
			$page_url = $instance['page_url'];
			}
			
			
			$title = '';
			if ( ! empty( $instance['title'] ) ) {
				$title = apply_filters( 'widget_title', empty( $instance['title'] ) ? '' : $instance['title'], $instance, $this->id_base );
				
				echo $args['before_title'] . $title . $args['after_title'];
			
			}

			?>
            
            <form method="post" id="subscriptionform" action="<?php echo esc_url($page_url); ?>" target="popupwindow" onsubmit="window.open('<?php echo esc_url($page_url); ?>', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true">
                <input type="email" name="Email" class="inputer" placeholder="<?php _e('Type Your Email', 'official'); ?>" required>
                <input type="submit" id="subscribe-button" value="&#61694;" />
            </form>
            
            <?php
	
			echo $args['after_widget'];
			
			
		}
		
		public function form($instance) {
	
				
			?>
			<p>
				<label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title:', 'bizpro'); ?></label>
				<input class="widefat" style="width: 216px;" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" value="<?php echo esc_attr($instance['title']); ?>" />
			</p>
            
            <p>
				<label for="<?php echo esc_attr($this->get_field_id('page_url')); ?>"><?php esc_html_e('Your Feed URL:', 'bizpro'); ?></label>
				<input class="widefat" style="width: 216px;" id="<?php echo esc_attr($this->get_field_id('page_url')); ?>" name="<?php echo esc_attr($this->get_field_name('page_url')); ?>" value="<?php echo esc_url($instance['page_url']); ?>" />
			</p>
            
			<?php

		
		}

		public function update($new_instance, $old_instance) {
			$instance = $old_instance;
			$instance['title'] = strip_tags(stripslashes($new_instance['title']));
			$instance['page_url'] = $new_instance['page_url'];
			return $instance;
		}
		
		
	}

function official_register_widgets_subscription() {
	register_widget('official_subscription_widget');
}

add_action( 'widgets_init', 'official_register_widgets_subscription' );

?>