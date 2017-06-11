<div id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> >
    <div class="thumb-big">
        <div class="projectslider clearfix flexslider">
            <?php $images = rwmb_meta( 'official_gallery', array('type'=>'image','size'=>'blog2') ); ?>
            <ul class="slides">
                <?php foreach( $images as $image ) :  ?>
                    <li><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
    
    <?php get_template_part('functions/post-format/single-meta'); ?>
    
</div><!-- post -->

