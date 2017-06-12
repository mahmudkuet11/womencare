<?php
/*
Template Name: Products Template
*/
get_header(); 

?>

<?php do_action('wpml_add_language_selector'); ?>

<div class="featured_products_section">

	<div class="title">
		<h1><?php echo _e('All Products', 'official') ?></h1>
		<div class="divider"></div>
	</div>

	<div class="products">
	
	<?php echo the_content(); ?>


	</div>

	<div class="clearfix"></div>

</div>

<?php get_footer(); ?>

