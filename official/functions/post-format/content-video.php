<?php 
	
	global $thdglkr_blog_style,$thdglkr_blog_thumb_class,$thdglkr_blog_img,$thdglkr_blog_iframe_class;
	global $thdglkr_masonry;
	$masonry_class ='';
	$masonry_meta = $thdglkr_blog_style;
	if ($thdglkr_masonry == true){
		$masonry_class = 'mitem grid_4 ';
		$masonry_meta = 'masonry';
		}
?>

<div id="post-<?php the_ID(); ?>" <?php post_class($masonry_class . 'clearfix'); ?> >
    <div class="<?php echo $thdglkr_blog_iframe_class; ?>">
    	<?php echo get_post_meta($post->ID, 'official_format_video_embed', true); ?>
    </div>
    
    <?php get_template_part('functions/post-format/content-meta',$masonry_meta); ?>
    
    
</div><!-- post -->