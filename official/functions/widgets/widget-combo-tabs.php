<?php 

	/*
	Widget Name: Custom Combo Tabs Widget
	Version: 1.0
	Author: Tohid Golkar
	Author URI: http://tohidgolkar.com
	Description: A Widget to display Most Popular, Recent Posts, Recent Comments and Tags by Tabs.
	*/

	class official_combo_widget extends WP_Widget {
	
		public function __construct() {
			parent::__construct(
				'official_combo_tabs',
				' OFFICIAL : Combo Tabs',
				array('description' => __('Displays Most Popular, Recent Posts, Recent Comments and Tags by Tabs', 'official'))
			); 
		}
		
		public function form($instance) {
			
			$defaults = array(
				'posts' => '5',
				'thumb' => 'on',
				'show_date' => 'on',
				'date_format' => 'F j Y'
				);
			$instance = wp_parse_args( (array) $instance, $defaults ); ?>
			
	
			<p>
				<label for="<?php echo $this->get_field_id( 'posts' ); ?>"><?php _e('Number of Posts:', 'official'); ?></label>
				<input style="width:50px" class="widefat" id="<?php echo $this->get_field_id( 'posts' ); ?>" name="<?php echo $this->get_field_name( 'posts' ); ?>" value="<?php echo $instance['posts']; ?>" />
			</p>
            
          	<p>
				<input class="checkbox" type="checkbox" <?php checked($instance['thumb'], 'on'); ?> id="<?php echo $this->get_field_id('thumb'); ?>" name="<?php echo $this->get_field_name('thumb'); ?>" /> 
				<label for="<?php echo $this->get_field_id('thumb'); ?>"><?php _e('Show Thumbnail', 'official'); ?></label>
			</p>
            
            <p>
				<input class="checkbox" type="checkbox" <?php checked($instance['show_date'], 'on'); ?> id="<?php echo $this->get_field_id('show_date'); ?>" name="<?php echo $this->get_field_name('show_date'); ?>" /> 
				<label for="<?php echo $this->get_field_id('show_date'); ?>"><?php _e('Show Date', 'official'); ?></label>
			</p>
            
            <p>
                <label for="<?php echo $this->get_field_id( 'date_format' ); ?>"><?php _e('Date Display Format:', 'official'); ?></label>
                <input id="<?php echo $this->get_field_id( 'date_format' ); ?>" name="<?php echo $this->get_field_name( 'date_format' ); ?>" value="<?php echo $instance['date_format']; ?>" class="widefat" type="text" />
                <small><a href="http://codex.wordpress.org/Formatting_Date_and_Time" target="_blank" >Documentation on date and time formatting</a></small>
            </p>
            
			<?php

		}
		
		public function update($new_instance, $old_instance) {
			$instance = $old_instance; 
			$instance['posts'] = strip_tags( $new_instance['posts'] );
			$instance['thumb'] = strip_tags( $new_instance['thumb'] );
			$instance['show_date'] = strip_tags( $new_instance['show_date'] );
			$instance['date_format'] = strip_tags( $new_instance['date_format'] );
			return $instance;
		}
		
		public function widget($args, $instance) {
			
			extract($args);
			$posts = $instance['posts'];
			$thumb = $instance['thumb'];
			$show_date = $instance['show_date'];
			$date_format = $instance['date_format'];
			$rndid = rand();
			
			$is_thumb = false;
			if ($thumb=='on'){$is_thumb=true;}
			
			$dateformat = false;
			if ($show_date=='on'){$dateformat=$date_format;}
			
			echo $before_widget;
			?>
            
            <div class="tabswrap">
            	
                <ul class="tabs">
                	<li><a class="active" href="#panel<?php echo $rndid; ?>1"><?php _e( 'Popular' , 'official' ) ?></a></li>
                    <li><a href="#panel<?php echo $rndid; ?>2"><?php _e( 'Recent' , 'official' ) ?></a></li>
                    <li><a href="#panel<?php echo $rndid; ?>3"><?php _e( 'Comments' , 'official' ) ?></a></li>
                    <li><a href="#panel<?php echo $rndid; ?>4"><?php _e( 'Tags' , 'official' ) ?></a></li>
                </ul>
                
                <ul class="tabs-content">
                	<li class="active" id="panel<?php echo $rndid; ?>1"><?php _popular_posts($posts,$is_thumb,$dateformat) ?></li>
                	<li id="panel<?php echo $rndid; ?>2"><?php _last_posts($posts,$is_thumb,$dateformat)?></li>
                	<li id="panel<?php echo $rndid; ?>3"><?php _most_commented($posts,$is_thumb,$dateformat);?></li>
                	<li id="panel<?php echo $rndid; ?>4"><div class="tagcloud"><?php wp_tag_cloud( $args = array('format'=>'flat','largest' => 9,'smallest' => 9,'number' => 25,'orderby'=> 'count', 'order' => 'DESC' )); ?></div></li>            
                </ul>
                
            </div>

            <?php
			echo $after_widget;
			
		}
	}

	register_widget('official_combo_widget');



/*-----------------------------------------------------------------------------------*/
/* Get Popular posts 
/*-----------------------------------------------------------------------------------*/
function _popular_posts($pop_posts = 5 , $thumb = true , $dateformat = 'F j Y'){
	global $wpdb , $post;
	$orig_post = $post;
	
	$popularposts = "SELECT ID,post_title,post_date,post_author,post_content,post_type FROM $wpdb->posts WHERE post_status = 'publish' AND post_type = 'post' ORDER BY comment_count DESC LIMIT 0,".$pop_posts;
	$posts = $wpdb->get_results($popularposts);
	if($posts){
		
		echo '<ul class="mostpopular">';
		
		global $post;
		foreach($posts as $post){
		setup_postdata($post);?>
			<li>
			<?php if ( function_exists("has_post_thumbnail") && has_post_thumbnail() && $thumb ) : ?>			
				<div class="post-thumbnail">
					<a href="<?php echo get_permalink( $post->ID ) ?>" title="<?php printf( __( 'Permalink to %s', 'official' ), the_title_attribute( 'echo=0' ) ); ?>"><?php _get_thumb('',50,50); ?></a>
				</div>
			<?php endif; ?>
				<a href="<?php echo get_permalink( $post->ID ) ?>" title="<?php echo the_title(); ?>"><?php echo the_title(); ?></a>
				<?php if ($dateformat){ ?><span class="date"><?php the_time($dateformat); ?></span><?php } ?>
			</li>
	<?php 
		}
		
		echo '</ul>';
	}
	
	$post = $orig_post;
	//wp_reset_query();
}

/*-----------------------------------------------------------------------------------*/
# Get Most commented posts 
/*-----------------------------------------------------------------------------------*/
function _most_commented($comment_posts = 5 , $show_avatar = true, $dateformat = 'F j Y'){
	
	$avatar_size = 40;
	
	$comments = get_comments('status=approve&number='.$comment_posts);
		echo '<ul class="mostcommented">';
	foreach ($comments as $comment) { ?>
		<li>
			<?php if ($show_avatar): ?>
			<div class="post-thumbnail">
				<a href="<?php echo get_permalink($comment->comment_post_ID ); ?>#comment-<?php echo $comment->comment_ID; ?>">
					<?php echo get_avatar( $comment, $avatar_size ); ?>
				</a>
			</div>
			<?php endif; ?>
			
			<a href="<?php echo get_permalink($comment->comment_post_ID ); ?>#comment-<?php echo $comment->comment_ID; ?>">
				<i><?php echo strip_tags($comment->comment_author); ?>:</i> <?php echo wp_html_excerpt( $comment->comment_content, 35 ); ?>...
			</a>
			
			<?php if ($dateformat){ ?><span class="date"><?php the_time($dateformat); ?></span><?php } ?>
			
		</li>
	<?php } 
	echo '</ul>';
}


/*-----------------------------------------------------------------------------------*/
# Get Most Racent posts
/*-----------------------------------------------------------------------------------*/
function _last_posts($numberOfPosts = 5 , $thumb = true, $dateformat = 'F j Y'){
	global $post;
	$orig_post = $post;
	
	$lastPosts = get_posts('numberposts='.$numberOfPosts);
	
	echo '<ul class="recentposts">';
	
	foreach($lastPosts as $post): setup_postdata($post);
	?>
	<li>
		<?php if ( function_exists("has_post_thumbnail") && has_post_thumbnail() && $thumb ) : ?>			
			<div class="post-thumbnail">
				<a href="<?php the_permalink(); ?>" title="<?php printf( __( 'Permalink to %s', 'official' ), the_title_attribute( 'echo=0' ) ); ?>"><?php _get_thumb('',50,50); ?></a>
			</div>
		<?php endif; ?>
		<a href="<?php the_permalink(); ?>"><?php the_title();?></a>
		<?php if ($dateformat){ ?><span class="date"><?php the_time($dateformat); ?></span><?php } ?>
	</li>
	<?php endforeach; 

	echo '</ul>';
	
	$post = $orig_post;

}



/*-----------------------------------------------------------------------------------*/
/* Get Thumb
/*-----------------------------------------------------------------------------------*/
function _get_thumb($img='' , $width='' , $height=''){
	global $post;
	

		$image_id = get_post_thumbnail_id($post->ID);  
		$image_url = wp_get_attachment_image($image_id, array($width,$height), false, array( 'alt'   => get_the_title() ,'title' =>  get_the_title()  ));  
		echo $image_url;

}



?>