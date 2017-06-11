<div id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> >
    <div class="post-content">
        <div class="blockquote-post">
            <i class="icon-quote-left quoteicon"></i>
            <?php the_content(); ?>
            <span>
            	<a href="<?php echo get_post_meta($post->ID, 'official_format_quote_source_url', true); ?>" target="_blank">
                	- <?php echo get_post_meta($post->ID, 'official_format_quote_source_name', true); ?>
                </a>
            </span>
        </div>
    </div>
</div><!-- post -->