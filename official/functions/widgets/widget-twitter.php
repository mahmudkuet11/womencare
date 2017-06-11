<?php 

	/*
	Widget Name: Custom Twitter Widget
	Version: 1.0
	Author: Tohid Golkar
	Author URI: http://tohidgolkar.com
	Description: A Widget to display Twitter tweets.
	*/

	class official_twitter_widget extends WP_Widget {
	
		public function __construct() {
			parent::__construct(
				'official_twitter',
				' OFFICIAL : Twitter',
				array('description' => __('Displays Twitter tweets', 'official'))
			); 
		}
		
		public function form($instance) {
			
			$defaults = array(
				'title' => 'Twitter',
				'posts' => '5',
				'username' => 'tohidgolkar',
				'loading' => 'Loading ...',
				'avatar' => 'on'
				);
			$instance = wp_parse_args( (array) $instance, $defaults ); ?>
			
			<p>
				<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e('Title:', 'official'); ?></label>
				<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" />
			</p>
			<p>
				<label for="<?php echo $this->get_field_id( 'username' ); ?>"><?php _e('Twitter Username:', 'official'); ?></label>
				<input class="widefat" id="<?php echo $this->get_field_id( 'username' ); ?>" name="<?php echo $this->get_field_name( 'username' ); ?>" value="<?php echo $instance['username']; ?>" />
			</p>
	
			<p>
				<label for="<?php echo $this->get_field_id( 'posts' ); ?>"><?php _e('Number of Posts:', 'official'); ?></label>
				<input style="width:50px" class="widefat" id="<?php echo $this->get_field_id( 'posts' ); ?>" name="<?php echo $this->get_field_name( 'posts' ); ?>" value="<?php echo $instance['posts']; ?>" />
			</p>
            
            <p>
				<label for="<?php echo $this->get_field_id( 'loading' ); ?>"><?php _e('Loading Text:', 'official'); ?></label>
				<input class="widefat" id="<?php echo $this->get_field_id( 'loading' ); ?>" name="<?php echo $this->get_field_name( 'loading' ); ?>" value="<?php echo $instance['loading']; ?>" />
			</p>
            
            
            <p>
			<input class="checkbox" type="checkbox" <?php checked($instance['avatar'], 'on'); ?> id="<?php echo $this->get_field_id('avatar'); ?>" name="<?php echo $this->get_field_name('avatar'); ?>" /> 
			<label for="<?php echo $this->get_field_id('avatar'); ?>"><?php _e('Show Avatar', 'official'); ?></label>
			</p>
            
			<?php
		}
		
		public function update($new_instance, $old_instance) {
			$instance = $old_instance; 
		
			$instance['title'] = strip_tags( $new_instance['title'] );
			$instance['username'] = strip_tags( $new_instance['username'] );
			$instance['posts'] = strip_tags( $new_instance['posts'] );
			$instance['loading'] = strip_tags( $new_instance['loading'] );
			$instance['avatar'] = strip_tags( $new_instance['avatar'] );
			
			return $instance;
		}
		
		public function widget($args, $instance) {
			
			extract($args);
			
			$rndid = rand();
			$title = apply_filters('widget_title', $instance['title']);
			$username = $instance['username'];
			$posts = $instance['posts'];
			$loading = $instance['loading'];
			$avatar = $instance['avatar'];
			
			$avatar_size = "";
			if ($avatar=='on'){$avatar_size="avatar_size:40,";}

			echo $before_widget;
			
			if($title) {
				echo $before_title.$title.$after_title;
			}
			
			$get_uri = get_template_directory_uri();
			
			
			echo '<div id="twitter-'.$rndid.'" class="twitter_widget"></div>';
			echo "<script type='text/javascript'>
					jQuery(document).ready(function($){
						$('#twitter-".$rndid."').tweet({
						  modpath: '" .  $get_uri . "/js/twitter/',
						  username: '". $username . "',
						  count: " . $posts . ",
						  loading_text: '" . $loading . "',
						  " . $avatar_size . "
						  template: '{avatar}{text} {time}'
						});
					});
				  </script>";
			echo $after_widget;
		
		}
	}

	register_widget('official_twitter_widget');

?>