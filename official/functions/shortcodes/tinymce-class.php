<?php


#-----------------------------------------------------------------#
# Register TinyMCE Shortcode Button
#-----------------------------------------------------------------#
function tg_tinyMCE() {
 	
	//make sure the user has correct permissions
	if ( ! current_user_can('edit_posts') && ! current_user_can('edit_pages') ) {
		return;
	}
	
	//only add to visual mode
	if ( get_user_option('rich_editing') == 'true' ) {
		add_filter( 'mce_external_plugins', 'add_js_plugin' );
		add_filter( 'mce_buttons', 'register_tg_tinymce_button' );
	}
 
}

add_action('init', 'tg_tinyMCE');


function add_js_plugin( $plugin_array ) {
   $plugin_array['tg_buttons'] = get_template_directory_uri() . '/functions/shortcodes/tinymce.js';
   return $plugin_array;
}

#-----------------------------------------------------------------
# Create Button
#-----------------------------------------------------------------
function register_tg_tinymce_button( $buttons ) {
	array_push( $buttons, "scgenerator" );
	return $buttons; 
}

?>