<div id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> >
    <div class="iframe-thumb">
    	<?php echo get_post_meta($post->ID, 'official_format_video_embed', true); ?>
    </div>
    
    <?php get_template_part('functions/post-format/single-meta'); ?>
    
    
</div><!-- post -->