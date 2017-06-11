<?php 
// Template Name: Blog (Medium Image)
get_header(); 

global $thdglkr_blog_style,$thdglkr_blog_thumb_class,$thdglkr_blog_img,$thdglkr_blog_iframe_class;
$thdglkr_blog_style = 'medium';
$thdglkr_blog_thumb_class = 'thumb-medium fll';
$thdglkr_blog_img = 'blog1';
$thdglkr_blog_iframe_class = 'iframe-thumb fll';

$thdglkr_blog_grid = 'grid_8';
if (_option('blog_sidebar','right')=='nosidebar'){
	$thdglkr_blog_grid = 'grid_12 alpha omega';
	$thdglkr_blog_sidebar='nosidebar';
}elseif(_option('blog_sidebar','right')=='right'){
	$thdglkr_blog_sidebar='sidebar-right omega';
	$thdglkr_blog_grid = 'grid_8 alpha sidebar-right';
}else{
	$thdglkr_blog_sidebar='sidebar-left alpha';
	$thdglkr_blog_grid = 'grid_8 omega sidebar-left';
}
?>


	<?php get_template_part('functions/title'); //Setup the Titlebar ?>
                
        

		<div class="page-content">
			<div class="row clearfix">
            

                
				<div class="<?php echo esc_attr($thdglkr_blog_grid);?> posts m-thumbnails">
	
                    <?php

					$number_of_blog_item = _option( 'number_of_blog_item', 10 );
					global $paged; 

					if( is_front_page() ){
						$paged = (get_query_var('page')) ? get_query_var('page') : 1; 
					} else {
						$paged = (get_query_var('paged')) ? get_query_var('paged') : 1; 
					};
					
					// the query
					$args = array(
						'post_type' => array('post'), 
						'posts_per_page' => $number_of_blog_item,
						'paged' => $paged
					);
					query_posts( $args );
			
					// begin the loop
					if ( have_posts() ) : while ( have_posts() ) : the_post();

					?>
			
						<?php get_template_part( 'functions/post-format/content', get_post_format() ); ?>
                
                    <?php endwhile; ?>
                    
                
                    <!-- PAGINATION -->
					<?php pagination($pages = '', $range = 4); ?>
                    <p class="hide"><?php posts_nav_link(); ?></p>
                    <!-- END PAGINATION -->
                    
                    
                
                    <?php else : ?>
                
                        <h3><?php _e('Not Found', 'official') ?></h3>
                
                    <?php endif; wp_reset_query(); ?>

	

				</div><!-- grid 8 posts -->
				
                
                
                <?php if ($thdglkr_blog_sidebar!='nosidebar'): ?>
                <!-- start sidebar -->
				<div class="grid_4 sidebar <?php echo esc_attr($thdglkr_blog_sidebar);?>">
                    
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