<?php 

/*
 * Related Portfolio Carousel
 *
 * Theme: Official
 * Author: Tohid Golkar
 * Website: http://tohidgolkar.com
 */


$carousel_id = 'pc_' . rand();


?>

	<div class="grid_12 alpha omega mbs clearfix">

	<script>
	
		jQuery(document).ready(function($) {
				
			try {

					$("#<?php echo $carousel_id ; ?>").owlCarousel({
						items:<?php global $thdglkr_pc_col; echo $thdglkr_pc_col; ?>,
						loop: true,
						margin:12,
						nav:true,
						navSpeed:<?php echo _option('portfolio_carousel_speed',1000); ?>,
						navText:['<i class="icon-angle-right"></i>','<i class="icon-angle-left"></i>'],
						dots:false,
						autoplay:true,
						rtl:false,
						autoplayTimeout:<?php echo _option('portfolio_carousel_pause_time',4000); ?>,
						autoplaySpeed:<?php echo _option('portfolio_carousel_speed',1000); ?>,
						autoplayHoverPause:true,
						responsive : {0 : {items : 1,nav : false}, 480 : {items : 2}, 768 : {items : <?php echo $thdglkr_pc_col; ?>}}
						
					});
					
					
			} catch(e){}
		//End Document.ready//
		});	
	</script>

    
	<?php 
		$thdglkr_embed_code = '';
        $terms = get_the_terms( $post->ID , 'portfolio_types', 'string');
        $term_ids = array_values( wp_list_pluck( $terms,'term_id' ) );
        $related_query = new WP_Query( array(
              'post_type' => 'portfolio',
              'tax_query' => array(
                            array(
                                'taxonomy' => 'portfolio_types',
                                'field' => 'id',
                                'terms' => $term_ids,
                                'operator'=> 'IN' //Or 'AND' or 'NOT IN'
                             )),
              'posts_per_page' => 10,
              'ignore_sticky_posts' => 1,
              'orderby' => 'date',  // 'rand' for random order
              'post__not_in'=>array($post->ID)
           ) );
	?>

        
        
        <?php 

			
	
			if (_option('related_portfolio_title')){
				
				echo do_shortcode('[title]'. _option('related_portfolio_title') .'[/title]');
				}
            
	
	
			?>
				
                
            <div class="owl-carousel nav_titlebar"  id="<?php echo $carousel_id ; ?>">
   
        
                
            <?php
				

				while ( $related_query->have_posts() ) : $related_query->the_post(); ?>
	
				<?php $terms = get_the_terms( get_the_ID(), 'portfolio_types' ); ?>              	
				
                <?php 
				global $thdglkr_embed_code;
				global $thdglkr_permalink;
				?>
	
					<?php if ( has_post_thumbnail()) { ?> 
               
					<div class="uowl" >
						<?php get_template_part('functions/portfolio-source');  ?>
	
                        <div class="detailes">
                            <h5><a href="<?php echo $thdglkr_permalink; ?>"><?php the_title();?></a></h5>
                            <?php foreach ($terms as $term) { echo $term->name.', '; } ?>
                        </div>
                    </div>

				<?php } ?>

			<?php endwhile; wp_reset_query();?>
 
            </div>

     </div>
