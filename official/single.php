<?php 
get_header(); 

?>

	<?php get_template_part('functions/title'); //Setup the Titlebar ?>

		<div class="page-content">
			<div class="row clearfix">
 
                <?php $blog_sidebar = _option('blog_sidebar','right');?>
                
				<div class="grid_8 posts post-sidebar-<?php echo esc_attr($blog_sidebar); ?>">

                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
						<?php get_template_part( 'functions/post-format/single', get_post_format() ); ?>

                    <?php endwhile; ?>
                    

                    <?php else : ?>
                
                        <h3><?php _e('Not Found', 'official') ?></h3>
                
                    <?php endif; ?>

					
                    
                     <?php 
						wp_link_pages(array(
									'before' => '<div class="pagination-tt mbs clearfix"><h3 class="col-title">'. __('Pages: ','official') .'</h3><span class="liner"></span><ul><li>',
									'after' => '</li></ul></div>' ,
									'next_or_number' => 'number',
									'link_before'      => '<span>',
									'link_after'       => '</span>',
									'separator'        => '</li><li>',
									)); 
					?>
                    
                    
                    
                    <?php $bef='<div class="post-tags tags mtt mbf"><span>'. __('Tags: ','official').'</span>'; ?>
					<?php the_tags($bef,' ','</div>'); ?>
					
                    
  
                    <?php if(_option('author_info') == 1): ?>
                    <div class="author-box">
						<?php echo get_avatar( get_the_author_meta('user_email'), '130', '' ); ?>
                        <div class="author-details">
						<h3> <?php the_author_link(); ?> <small> - author </small></h3>
						<p><?php the_author_meta("description"); ?></p>
                        </div>
					</div><!-- author -->
                    <?php endif; ?>

                    
                    <?php if(_option('blog_share',1) == 1) { ?>
						<?php get_template_part( 'functions/share' ); ?>
                    <?php } ?>
                    
                    
                    <?php if (_option('blog_nav')==1): ?>
                        <div class="grid_12  mbs mtt clearfix">
                    
                            <div class="project-links blog-links">
                                <?php previous_post_link('%link','<span class="tbutton tbutton1 small color1 toptip" title="%title" ><span><i class="icon-angle-left mi"></i> '.__('Previous','official').'</span></span>'); ?>
                                <?php next_post_link('%link','<span class="tbutton tbutton1 small color1 toptip" title="%title" ><span>'.__('Next','official').' <i class="icon-angle-right mii"></i></span></span>'); ?>  
                            </div><!-- links -->        
                    
                        </div>
                    <?php endif; ?> 
    
					<?php if (_option('blog_comment')==1):?>
                    	<div class="comments"><?php comments_template(); ?></div>
                    <?php endif; ?>
                    	

                    

				</div><!-- grid 8 posts -->
				
                <?php if ($blog_sidebar=='left'): ?>
                <!-- start sidebar -->
				<div class="grid_4 sidebar alpha sidebar-left">
                    
                        <?php 
						
							if ( ! dynamic_sidebar ( 'sidebar-blog' ) ){
								thdglkr_emptysidebar('Blog');
								}        				
						?>	
     
               
				</div><!-- grid 4 Sidebar -->
				<?php endif; ?>
                
                
                <?php if ($blog_sidebar=='right'): ?>
                <!-- start sidebar -->
				<div class="grid_4 sidebar omega">
                    
                        <?php 
						
							if ( ! dynamic_sidebar ( 'sidebar-blog' ) ){
								thdglkr_emptysidebar('Blog');
								}        				
						?>	
     
               
				</div><!-- grid 4 Sidebar -->
				<?php endif; ?>
                 
                 
                 
			</div><!-- row -->


		</div><!-- end page content -->
        
<?php get_footer(); ?>