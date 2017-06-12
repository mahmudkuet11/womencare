<?php
/*
Template Name: Home Template
*/
get_header(); 

?>

<?php do_action('wpml_add_language_selector'); ?>
<div class="cover_photo">
	<img src="<?php echo _option('cover_photo') ?>">
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

	<?php $query = new WP_Query( array( 'post_type' => 'featured_product', 'posts_per_page' => 6, 'post_status'=>'publish', 'order'=>'DESC')); 

		if ( $query->have_posts() ) {
			while ( $query->have_posts() ) {
				$query->the_post();
				global $post;
				?>

					<div class="single_product">
						<div class="image">
							<a href=""><img src="<?php echo get_post_meta( $post->ID, '_cmb_featured_product_image', true ); ?>"></a>
						</div>
						<div class="caption">
							<a href="#"><strong><?php echo get_the_title() ?></strong></a> <br>
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

<div class="full_width_image_area">
	<img src="<?php echo _option('bottom_full_width_image') ?>">
</div>


<?php get_footer(); ?>

