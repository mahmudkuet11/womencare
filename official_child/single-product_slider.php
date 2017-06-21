<?php 
get_header(); 

global $post;

?>

		<div class="page-content">
			<div class="row clearfix">
            
            <div style="text-align:center; margin-bottom: 20px;">
            	<img src="<?php echo get_post_meta( $post->ID, '_cmb_product_slider_image', true ); ?>" width="100%">
            </div>

            <h1><?php the_title() ?></h1>

            <div class="description" style="margin-top: 20px; font-size: 16px;line-height:22px;text-align:justify">
				<?php echo the_content(); ?>
            </div>
                 
			</div><!-- row -->


		</div><!-- end page content -->
        
<?php get_footer(); ?>