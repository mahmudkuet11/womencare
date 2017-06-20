<?php

function official_cuild_theme_enqueue_styles() {

    $parent_style = 'official-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'official_cuild_theme_enqueue_styles' );



function register_home_main_menu() {
  register_nav_menu('main-menu-of-home',__( 'Home page main menu' ));
}
add_action( 'init', 'register_home_main_menu' );

function register_footer_first_menu() {
  register_nav_menu('footer-first-menu',__( 'Footer First Menu' ));
}
add_action( 'init', 'register_footer_first_menu' );

function register_footer_second_menu() {
  register_nav_menu('footer-second-menu',__( 'Footer Second Menu' ));
}
add_action( 'init', 'register_footer_second_menu' );

function register_footer_third_menu() {
  register_nav_menu('footer-third-menu',__( 'Footer Third Menu' ));
}
add_action( 'init', 'register_footer_third_menu' );



add_action( 'init', 'create_post_type' );
function create_post_type() {
  register_post_type( 'featured_product',
    array(
      'labels' => array(
        'name' => __( 'Featured Products' ),
        'singular_name' => __( 'Featured Product' )
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'featured-products'),
      'supports'      => array( 'title', 'editor' ),
    )
  );
}



// Initialize the metabox class
add_action( 'init', 'init_featured_products_meta_boxes', 9999 );
function init_featured_products_meta_boxes() {
	if ( !class_exists( 'cmb_Meta_Box' ) ) {
		require_once('cmb/init.php' );
	}
}

function featured_products_meta_boxes( $meta_boxes ) {
	$prefix = '_cmb_'; // Prefix for all fields
	$meta_boxes['featured_products_meta_box'] = array(
		'id' => 'featured_products_meta_box',
		'title' => 'Featured Products Meta Box',
		'pages' => array('featured_product'), // post type
		'context' => 'normal',
		'priority' => 'high',
		'show_names' => true, // Show field names on the left
		'fields' => array(
			array(
			    'name' => 'Featured Product Image',
			    'desc' => 'Upload an image. Best size: 300 X 170',
			    'id' => $prefix . 'featured_product_image',
			    'type' => 'file',
			    'allow' => array( 'url', 'attachment' ) // limit to just attachments with array( 'attachment' )
			),
			array(
				'name' => 'Subtitle',
				'desc' => 'Subtitle of product',
				'id' => $prefix . 'subtitle',
				'type' => 'text'
			),
			array(
				'name' => 'Price',
				'desc' => 'Price of your product',
				'id' => $prefix . 'price',
				'type' => 'text'
			),
		),
	);

	return $meta_boxes;
}
add_filter( 'cmb_meta_boxes', 'featured_products_meta_boxes' );



function products_list_shortcode( $atts ){

	$res = "";
	$query = new WP_Query( array( 'post_type' => 'featured_product', 'posts_per_page'=>$atts['posts_per_page'], 'post_status'=>'publish', 'order'=>'DESC')); 

		if ( $query->have_posts() ) {
			while ( $query->have_posts() ) {
				$query->the_post();
				global $post;
					$res .= '
						<div class="single_product">
							<div class="image">
								<a href="javascript:void(0)"><img src="'. get_post_meta( $post->ID, "_cmb_featured_product_image", true ) .'"></a>
							</div>
							<div class="caption" style="display:inherit">
								<a href="javascript:void(0)"><strong>'. get_the_title() .'</strong></a>
								<p>'.  wp_trim_words( get_the_content(), $num_words = 55, $more = null ) .'</p>
							</div>
						</div>
					';
			}
			/* Restore original Post Data */
			wp_reset_postdata();
		}


		return $res;
}
add_shortcode( 'products', 'products_list_shortcode' );