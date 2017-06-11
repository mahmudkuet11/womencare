<?php 
	global $thdglkr_blog_style,$thdglkr_blog_thumb_class,$thdglkr_blog_img;
	global $thdglkr_masonry;
	$masonry_class ='';
	$masonry_meta = 'large';
	if ($thdglkr_masonry == true){
		$masonry_class = '';
		$masonry_meta = 'masonry';
		}
?>

<div id="post-<?php the_ID(); ?>" <?php post_class($masonry_class . 'clearfix'); ?> >
		    
    <div class="blockquote-post">
        <i class="icon-quote-left icon-4x pull-left icon-muted"></i>
        <?php the_content(); ?>
        <span>
            <a href="<?php echo get_post_meta($post->ID, 'official_format_quote_source_url', true); ?>" target="_blank">
                - <?php echo get_post_meta($post->ID, 'official_format_quote_source_name', true); ?>
            </a>
        </span>
    </div>
    
    <?php get_template_part('functions/post-format/content-meta',$masonry_meta); ?>

</div><!-- post -->	