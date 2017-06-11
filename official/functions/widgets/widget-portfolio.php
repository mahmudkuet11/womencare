<?php 

	/*
	Widget Name: Custom Portfolio Widget
	Version: 1.0
	Author: Tohid Golkar
	Author URI: http://tohidgolkar.com
	Description: A Widget to display Recent Portfolio Projects.
	*/

	class official_portfolio_widget extends WP_Widget {
	
		public function __construct() {
			parent::__construct(
				'official_portfolio',
				' OFFICIAL : Portfolio',
				array('description' => __('Displays Recent Portfolio Projects', 'official'))
			); 
		}
				
		public function form($instance) {
			
			$defaults = array(
				'title' => 'Latest Project',
				'items' => 4
				);
			
			$instance = wp_parse_args((array) $instance, $defaults); ?>
			<p>
				<label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:', 'official'); ?></label>
				<input class="widefat" style="width: 216px;" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo $instance['title']; ?>" />
			</p>
	
			<p>
				<label for="<?php echo $this->get_field_id('items'); ?>"><?php _e('Number of items to show:', 'official'); ?></label>
				<input class="widefat" style="width: 30px;" id="<?php echo $this->get_field_id('items'); ?>" name="<?php echo $this->get_field_name('items'); ?>" value="<?php echo $instance['items']; ?>" />
			</p>
			<?php
		}
		
		public function update($new_instance, $old_instance) {
			$instance = $old_instance;

			$instance['title'] = strip_tags($new_instance['title']);
			$instance['items'] = $new_instance['items'];
			
			return $instance;
		}
		
		public function widget($args, $instance) {
			extract($args);
			$title = apply_filters('widget_title', $instance['title']);
			$items = $instance['items'];
			
			echo $before_widget;
	
			if($title) {
				echo $before_title . $title . $after_title;
			}
			
			
			?>
			<div class="recent recent-portfolio"><ul>
				<?php
                $args = array(
                    'post_type' => 'portfolio',
                    'posts_per_page' => $items
                );
                $portfolio = new WP_Query($args);
                if($portfolio->have_posts()):
                ?>
                <?php while($portfolio->have_posts()): $portfolio->the_post(); ?>
                	<li>
                    
                        <?php if (has_post_thumbnail()) { ?>
                        <div class="post-thumbnail">
                            
                            <a class="mini-thumb toptip" href="<?php the_permalink() ?>" title="<?php the_title(); ?>" class="portfolio-pic">
								<?php the_post_thumbnail('thumbnail'); ?>
                            </a>

                        </div>
						<?php } ?>
                    	
                        
                    	
                    
                    </li>
                <?php endwhile; endif; ?>
			</ul></div>
            
            
	
			<?php echo $after_widget;
			
			
		}
	}

	register_widget('official_portfolio_widget');

?>