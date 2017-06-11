<?php 
	
	global $thdglkr_blog_style,$thdglkr_blog_thumb_class,$thdglkr_blog_img;
	global $thdglkr_masonry;
	$masonry_class ='';
	$masonry_meta = $thdglkr_blog_style;
	$image_type = $thdglkr_blog_img;
	if ($thdglkr_masonry == true){
		$masonry_class = 'mitem grid_4 ';
		$masonry_meta = 'masonry';
		$image_type = 'blog1';
		}
		
	
	
?>

<div id="post-<?php the_ID(); ?>" <?php post_class($masonry_class . 'clearfix'); ?> >

	<?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), $image_type); ?>
    <?php if ($image): ?>
        <a href="<?php the_permalink(); ?>" class="<?php echo $thdglkr_blog_thumb_class; ?>" >
            <img src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>"/>
        </a>
	<?php endif; ?>
    
    
    <?php get_template_part('functions/post-format/content-meta',$masonry_meta); ?>
    
    
</div><!-- post -->

