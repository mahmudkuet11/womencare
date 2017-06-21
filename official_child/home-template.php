<?php
/*
Template Name: Home Template
*/
get_header(); 

?>


<div class="cover_photo" style="background-image:url(<?php echo _option('cover_photo') ?>)">

</div>


<div class="about_section">
	<div class="content">
		<h1><?php echo _option('about_us_title') ?></h1>
		<p><?php echo _option('about_us_details') ?></p>
	</div>

</div>

<div class="featured_products_section">

	<div class="title">
		<h1><?php echo _option('featured_product_title'); ?></h1>
		<div class="divider"></div>
	</div>

	<div class="products">

	<?php $query = new WP_Query( array( 'post_type' => 'featured_product', 'posts_per_page' => 3, 'post_status'=>'publish', 'order'=>'DESC'));

		if ( $query->have_posts() ) {
			while ( $query->have_posts() ) {
				$query->the_post();
				global $post;
				?>

					<div class="single_product">
						<div class="image">
							<a href="javascript:void(0)"><img src="<?php echo get_post_meta( $post->ID, '_cmb_featured_product_image', true ); ?>"></a>
						</div>
						<div class="caption">
							<a href="javascript:void(0)"><strong><?php echo get_the_title() ?></strong></a> <br>
							<span><?php echo get_post_meta( $post->ID, '_cmb_subtitle', true ); ?></span> <br>
							<span><?php echo get_post_meta( $post->ID, '_cmb_price', true ); ?></span>
						</div>
					</div>


				<?php
			}
			/* Restore original Post Data */
			wp_reset_postdata();
		}
	?>

	</div>

	<div class="clearfix"></div>

</div>

    <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:1160px;height:215px;overflow:hidden;visibility:hidden;margin-bottom:50px;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position:absolute;top:0px;left:0px;background:url('<?php echo get_stylesheet_directory_uri(); ?>/img/loading.gif') no-repeat 50% 50%;background-color:rgba(0, 0, 0, 0.7);"></div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1160px;height:215px;overflow:hidden;">

			<?php $query = new WP_Query( array( 'post_type' => 'product_slider', 'post_status'=>'publish', 'order'=>'DESC'));

				if ( $query->have_posts() ) {
					while ( $query->have_posts() ) {
						$query->the_post();
						global $post;
						?>

							<div>
				                <img data-u="image" src="<?php echo get_post_meta( $post->ID, '_cmb_product_slider_image', true ); ?>" />
				            </div>

						<?php
					}
					/* Restore original Post Data */
					wp_reset_postdata();
				}
			?>
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb03" style="bottom:10px;right:10px;">
            <!-- bullet navigator item prototype -->
            <div data-u="prototype" style="width:21px;height:21px;">
                <div data-u="numbertemplate"></div>
            </div>
        </div>
        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora03l" style="top:0px;left:8px;width:55px;height:55px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora03r" style="top:0px;right:8px;width:55px;height:55px;" data-autocenter="2"></span>
    </div>
    <!-- #endregion Jssor Slider End -->


<?php get_footer(); ?>

