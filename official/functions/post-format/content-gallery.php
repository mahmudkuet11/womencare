<?php 
	
	global $thdglkr_blog_style,$thdglkr_blog_thumb_class,$thdglkr_blog_img;
	global $thdglkr_masonry;
	$masonry_class ='';
	$masonry_meta = $thdglkr_blog_style;
	if ($thdglkr_masonry == true){
		$masonry_class = 'mitem grid_4 ';
		$masonry_meta = 'masonry';
		}
?>



<div id="post-<?php the_ID(); ?>" <?php post_class($masonry_class . 'clearfix'); ?> >
    <div class="<?php echo $thdglkr_blog_thumb_class; ?>">
        <div class="projectslider clearfix flexslider">
            <?php $images = rwmb_meta( 'official_gallery', array('type'=>'image','size'=>$thdglkr_blog_img) ); ?>
            <ul class="slides">
                <?php foreach( $images as $image ) :  ?>
                    <li><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
    
    <?php get_template_part('functions/post-format/content-meta',$masonry_meta); ?>
    
</div><!-- post -->