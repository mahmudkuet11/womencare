
<div class="content-half">
<div class="meta-box">

    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    
    <?php if($post->post_type == 'post') :?>
    	<?php if (_option('blog_metadata',1)==1){ ?>
        <div class="meta-more">
            <span><i class="icon-user"></i> <?php the_author_posts_link(); ?></span>
            <span><i class="icon-time"></i><a href="<?php echo get_month_link(get_the_time('Y'), get_the_time('m')); ?>"><?php the_time(_option("date_format","jS M Y")); ?></a></span>
            <span><i class="icon-comments"></i> <?php comments_popup_link(__('No Comment','official'), __('1 Comment','official'), __('% Comments','official')); ?></span>
        </div><!-- meta date -->
        <?php } ?>
    <?php elseif($post->post_type == 'page'):?>
        <div class="meta-more">
            <span><i class="icon-search"></i><?php _e('in Pages','official'); ?></span>
        </div><!-- meta date -->
    <?php elseif($post->post_type == 'portfolio'):?>
        <div class="meta-more">
            <span><i class="icon-search"></i> <?php _e('in Portfolio','official'); ?></span>
        </div><!-- meta date -->
    <?php endif; ?>
    
</div>

<?php if (get_post_format()!='quote'): ?>


        <?php the_excerpt(); ?>

    
     <?php if (_option('blog_more_button')==1):?>
        <a href="<?php the_permalink(); ?>" class="tbutton tbutton1 small"><span><?php echo _option('blog_button'); ?></span></a>
    <?php endif; ?>


<?php endif; ?>

</div>