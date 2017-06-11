<div id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> >
    
    <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'blog2'); ?>
    <?php if ($image): ?>
        <div class="thumbnail">
            <a href="<?php the_permalink(); ?>" class="thumb-big">
                <img src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>"/>
            </a>
        </div>
	<?php endif; ?>
    
    <?php get_template_part('functions/post-format/single-meta'); ?>
    
    
</div><!-- post -->

