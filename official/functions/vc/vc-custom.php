<?php 
//-------------------------------------
// Custom Visucal Composer Shortcodes
// Theme: Official
// Version: 1.0
// Author: ThemeTor (Tohid Golkar)
// Author URL: http://themetor.com
//-------------------------------------




//-------------------------------------- 
// Custom Official Elements
//--------------------------------------


add_action( 'init', 'official_vc_title_shortcode' );
add_action( 'init', 'official_vc_divider_shortcode' );
add_action( 'init', 'official_vc_button_shortcode' );
add_action( 'init', 'official_vc_gap_shortcode' );
add_action( 'init', 'official_vc_anchor_shortcode' );
add_action( 'init', 'official_vc_message_shortcode' );
add_action( 'init', 'official_vc_wrap_shortcode' );
add_action( 'init', 'official_vc_actionbox_shortcode' );
add_action( 'init', 'official_vc_service_shortcode' );
add_action( 'init', 'official_vc_social_shortcode' );
add_action( 'init', 'official_vc_gfont_shortcode' );
add_action( 'init', 'official_vc_gmap_shortcode' );
add_action( 'init', 'official_vc_toggle_shortcode' );
add_action( 'init', 'official_vc_clients_shortcode' );
add_action( 'init', 'official_vc_testimonial_shortcode' );
add_action( 'init', 'official_vc_portfolio_shortcode' );
add_action( 'init', 'official_vc_recentposts_shortcode' );
add_action( 'init', 'official_vc_member_shortcode' );
add_action( 'init', 'official_vc_newsticker_shortcode' );
add_action( 'init', 'official_vc_countdown_shortcode' );




if(class_exists('WPBakeryShortCodesContainer')){
	class WPBakeryShortCode_wrap extends WPBakeryShortCodesContainer {}
}


//-------------------------------------- 
// Custom Title 
//-------------------------------------- 
add_filter('wpb_widget_title', 'override_widget_title', 10, 2);
function override_widget_title($output = '', $params = array('')) {
  $extraclass = (isset($params['extraclass'])) ? " ".$params['extraclass'] : "";
  return '<div class="clearfix"><h3 class="col-title'.$extraclass.'">'.$params['title'].'<span class="liner"></span></h3></div>';
}



//-------------------------------------- 
// Title
//-------------------------------------- 
function official_vc_title_shortcode() {
   vc_map( array(
      "name" => __("Title","official"),
      "base" => "title",
	  "icon" => "tt-title",
	  'admin_enqueue_css' => array(get_template_directory_uri().'/functions/vc/vc.css'),
	  'front_enqueue_css' => get_template_directory_uri().'/functions/vc/vc.css',
      "category" => __('Official Custom Shortcodes',"official"),
      "params" => array(
         array(
            "type" => "textfield",
            "holder" => "div",
            "heading" => __("Content","official"),
            "param_name" => "content",
            "value" => __("Your Title","official"),
            "description" => __("Enter your title here","official")
         ),array(
            "type" => "textfield",
            "heading" => __("Icon","official"),
            "param_name" => "icon",
            "value" => "",
            "description" => __("You can set Icon for your title","official")
         ),array(
            "type" => "colorpicker",
            "class" => "",
            "heading" => __("Icon Color","official"),
            "param_name" => "icon_color",
            "value" => '',
			'dependency' => array(
				'element' => 'icon',
				'not_empty' => true
			)
         )
      )
   ));
}


//-------------------------------------- 
// Button
//-------------------------------------- 
function official_vc_button_shortcode() {
   vc_map( array(
      "name" => __("Button","official"),
      "base" => "button",
	  "icon" => "tt-button",
      "category" => __('Official Custom Shortcodes',"official"),
      "params" => array(
         
		 array(
            "type" => "textfield",
            "holder" => "div",
            "heading" => __("Button Text","official"),
            "param_name" => "text",
            "value" => "Button Text"
         ),
		 array(
            "type" => "dropdown",
            "heading" => __("Button Style","official"),
            "param_name" => "style",
            "value" => array(
				'Default (Rounded)'=>'tbutton1',
				'Square'=>'tbutton2',
				'Round'=>'tbutton3',
				'Oval'=>'tbutton4',
				'Outlined'=>'tbutton5',
				'Outlined (Round)'=>'tbutton6',
				'Outlined (Square)'=>'tbutton7',
			)
         ),
		 array(
            "type" => "dropdown",
            "heading" => __("Button Default Color","official"),
            "param_name" => "button_default_color",
            "value" => array(
				'Default Color'=>'color1',
				'Black'=>'color10',
				'Green'=>'color2',
				'Orange'=>'color3',
				'Blue'=>'color4',
				'Red'=>'color5',
				'Aqua'=>'color6',
				'Pharlap'=>'color7',
				'Gumbo'=>'color8',
				'Turquoise'=>'color9',
				'Custom Color'=>'customcolor'
				
			)
         ),
		 array(
            "type" => "colorpicker",
            "class" => "",
            "heading" => __("Button Custom Color","official"),
            "param_name" => "button_custom_color",
            "value" => '',
			'dependency' => array(
				'element' => 'button_default_color',
				'value'=>array('customcolor')
			)
         ),
		 array(
            "type" => "textfield",
            "heading" => __("Icon","official"),
            "param_name" => "icon",
            "value" => "",
            "description" => __("You can set Icon for your button","official"),
			
         ),
		 array(
            "type" => "dropdown",
            "heading" => __("Size","official"),
            "param_name" => "size",
            "value" => array(
				'Small'=>'small',
				'Medium'=>'medium',
				'Large'=>'large'
				),
			
         ),
		 array(
            "type" => "textfield",
            "heading" => __("URL","official"),
            "param_name" => "url",
            "value" =>""
         ),
		 array(
            "type" => "dropdown",
            "heading" => __("Target","official"),
            "param_name" => "target",
            "value" => array(
				'Current Window (_self)'=>'_self',
				'New Window (_blank)'=>'_blank'
				),
            "description" => __("Link open in New window or Current window","official"),
			'dependency' => array(
				'element' => 'url',
				'not_empty' => true
			)
         )
      )
   ));
}



//-------------------------------------- 
// Action Box
//-------------------------------------- 
function official_vc_actionbox_shortcode() {
   vc_map( array(
      "name" => __("Action Box","official"),
      "base" => "actionbox",
	  "icon" => "tt-actionbox",
      "category" => __('Official Custom Shortcodes',"official"),
      "params" => array(
         array(
            "type" => "dropdown",
            "heading" => __("Type","official"),
            "param_name" => "type",
            "value" => array(
				'Light'=>'light',
				'Dark'=>'dark'
			)
         ),array(
            "type" => "dropdown",
            "holder" => "div",
            "heading" => __("Style","official"),
            "param_name" => "style",
            "value" => array(
				'Text in Left | Button in Right'=>'style1',
				'Text in Right | Button in Left'=>'style2',
				'Center Style'=>'style3'
			),
            "description" => __("Please Select the Style of Action Box","official")
         ),
		 array(
            "type" => "textfield",
            "heading" => __("Title","official"),
            "param_name" => "title",
            "value" => ""
         )
		 ,
		 array(
            "type" => "textfield",
            "heading" => __("Sub Title","official"),
            "param_name" => "sub_text",
            "value" => "",
         )
		 ,
		 array(
            "type" => "textfield",
            "heading" => __("Icon","official"),
            "param_name" => "icon",
            "value" => "",
            "description" => __("You can set Icon for your box","official")
         ),array(
            "type" => "colorpicker",
            "class" => "",
            "heading" => __("Icon Color","official"),
            "param_name" => "icon_color",
            "value" => '',
			'dependency' => array(
				'element' => 'icon',
				'not_empty' => true
			)
         ),
		 array(
            "type" => "attach_image",
            "heading" => __("Image","official"),
            "param_name" => "image",
            "value" => "",
            "description" => __("You can add Image instead of Icon, if you add Image it will be override the icon","official")
         )
		 ,
		 array(
            "type" => "textfield",
            "heading" => __("Button Text","official"),
            "param_name" => "button_text",
            "value" => ""
         ),array(
            "type" => "dropdown",
            "heading" => __("Button Style","official"),
            "param_name" => "button_style",
            "value" => array(
				'Default (Rounded)'=>'tbutton1',
				'Square'=>'tbutton2',
				'Round'=>'tbutton3',
				'Oval'=>'tbutton4',
				'Outlined'=>'tbutton5',
				'Outlined (Round)'=>'tbutton6',
				'Outlined (Square)'=>'tbutton7',
			),
			'dependency' => array(
				'element' => 'button_text',
				'not_empty' => true
			)
         ),
		 array(
            "type" => "dropdown",
            "heading" => __("Button Default Color","official"),
            "param_name" => "button_default_color",
            "value" => array(
				'Default Color'=>'color1',
				'Black'=>'color10',
				'Green'=>'color2',
				'Orange'=>'color3',
				'Blue'=>'color4',
				'Red'=>'color5',
				'Aqua'=>'color6',
				'Pharlap'=>'color7',
				'Gumbo'=>'color8',
				'Turquoise'=>'color9',
				'Custom Color'=>'customcolor'
				
			),
			'dependency' => array(
				'element' => 'button_text',
				'not_empty' => true
			)
         ),
		 array(
            "type" => "colorpicker",
            "class" => "",
            "heading" => __("Button Custom Color","official"),
            "param_name" => "button_color",
            "value" => '',
			'dependency' => array(
				'element' => 'button_default_color',
				'value'=>array('customcolor')
			)
         ),
		 array(
            "type" => "textfield",
            "heading" => __("Button Icon","official"),
            "param_name" => "button_icon",
            "value" => "",
            "description" => __("You can set Icon for your button","official"),
			'dependency' => array(
				'element' => 'button_text',
				'not_empty' => true
			)
         ),
		 array(
            "type" => "dropdown",
            "heading" => __("Button Size","official"),
            "param_name" => "button_size",
            "value" => array(
				'Small'=>'small',
				'Medium'=>'medium',
				'Large'=>'large'
				),
			'dependency' => array(
				'element' => 'button_text',
				'not_empty' => true
			)
         ),
		 array(
            "type" => "textfield",
            "heading" => __("URL","official"),
            "param_name" => "url",
            "value" =>""
         ),
		 array(
            "type" => "dropdown",
            "heading" => __("Target","official"),
            "param_name" => "target",
            "value" => array(
				'Current Window (_self)'=>'_self',
				'New Window (_blank)'=>'_blank'
				),
            "description" => __("Link open in New window or Current window","official"),
			'dependency' => array(
				'element' => 'url',
				'not_empty' => true
			)
         )
      )
   ));
}



//-------------------------------------- 
// Service Box
//-------------------------------------- 
function official_vc_service_shortcode() {
   vc_map( array(
      "name" => __("Service Box (Featured Box)","official"),
      "base" => "service",
	  "icon" => "tt-service",
      "category" => __('Official Custom Shortcodes',"official"),
      "params" => array(
         array(
            "type" => "dropdown",
            "holder" => "div",
            "heading" => __("Style","official"),
            "param_name" => "style",
            "value" => array(
				'Style #1'=>'style1',
				'Style #2'=>'style2',
				'Style #3'=>'style3',
				'Style #4'=>'style4',
				'Style #5'=>'style5',
				'Style #6'=>'style6'
				),
            "description" => __("Please Select the Style of Service Box","official")
         ),
		 array(
            "type" => "textfield",
            "heading" => __("Title","official"),
            "param_name" => "title",
            "value" => ""
         )
		 ,
		 array(
            "type" => "textfield",
            "heading" => __("Sub Title","official"),
            "param_name" => "sub_title",
            "value" => "",
			"dependency" => array(
				'element' => 'style',
				'value'=>array('style1','style2','style3','style4','style5')
			)
         )
		 ,
		 array(
            "type" => "textfield",
            "heading" => __("Icon","official"),
            "param_name" => "icon",
            "value" => "",
            "description" => __("You can set Icon for your box","official")
         ),array(
            "type" => "colorpicker",
            "class" => "",
            "heading" => __("Icon Color","official"),
            "param_name" => "icon_color",
            "value" => '',
			'dependency' => array(
				'element' => 'icon',
				'not_empty' => true
			)
         )
		 ,
		 array(
            "type" => "attach_image",
            "heading" => __("Image","official"),
            "param_name" => "image",
            "value" => "",
            "description" => __("You can add Image instead of Icon, if you add Image it will be override the icon ","official")
         )
		 ,
		 array(
            "type" => "textfield",
            "heading" => __("Button Text","official"),
            "param_name" => "button_text",
            "value" => "",
            "description" => __("You can set button in bottom of box","official")
         ),array(
            "type" => "dropdown",
            "heading" => __("Button Style","official"),
            "param_name" => "button_style",
            "value" => array(
				'Default (Rounded)'=>'tbutton1',
				'Square'=>'tbutton2',
				'Round'=>'tbutton3',
				'Oval'=>'tbutton4',
				'Outlined'=>'tbutton5',
				'Outlined (Round)'=>'tbutton6',
				'Outlined (Square)'=>'tbutton7',
			),
			'dependency' => array(
				'element' => 'button_text',
				'not_empty' => true
			)
         ),
		 array(
            "type" => "dropdown",
            "heading" => __("Button Default Color","official"),
            "param_name" => "button_default_color",
            "value" => array(
				'Default Color'=>'color1',
				'Black'=>'color10',
				'Green'=>'color2',
				'Orange'=>'color3',
				'Blue'=>'color4',
				'Red'=>'color5',
				'Aqua'=>'color6',
				'Pharlap'=>'color7',
				'Gumbo'=>'color8',
				'Turquoise'=>'color9',
				'Custom Color'=>'customcolor'
				
			),
			'dependency' => array(
				'element' => 'button_text',
				'not_empty' => true
			)
         ),
		 array(
            "type" => "colorpicker",
            "class" => "",
            "heading" => __("Button Custom Color","official"),
            "param_name" => "button_custom_color",
            "value" => '',
			'dependency' => array(
				'element' => 'button_text',
				'not_empty' => true
			)
         ),
		 array(
            "type" => "textfield",
            "heading" => __("Button Icon","official"),
            "param_name" => "button_icon",
            "value" => "",
            "description" => __("You can set Icon for your button","official"),
			'dependency' => array(
				'element' => 'button_text',
				'not_empty' => true
			)
         ),
		 array(
            "type" => "dropdown",
            "heading" => __("Button Size","official"),
            "param_name" => "button_size",
            "value" => array(
				'Small'=>'small',
				'Medium'=>'medium',
				'Large'=>'large'
				),
			'dependency' => array(
				'element' => 'button_text',
				'not_empty' => true
			)
         ),
		 array(
            "type" => "textfield",
            "heading" => __("URL","official"),
            "param_name" => "url",
            "value" =>""
         ),
		 array(
            "type" => "dropdown",
            "heading" => __("Target","official"),
            "param_name" => "target",
            "value" => array(
				'Current Window (_self)'=>'_self',
				'New Window (_blank)'=>'_blank'
				),
            "description" => __("Link open in New window or Current window","official"),
			'dependency' => array(
				'element' => 'url',
				'not_empty' => true
			)
         ),
         array(
            "type" => "textarea_html",
            "heading" => __("Content","official"),
            "param_name" => "content",
            "value" => "Lorem ipsum dolor sit...",
            "description" => __("Enter your content.","official")
         ) 
      )
   ));
}




//-------------------------------------- 
// Wrap Section
//-------------------------------------- 
function official_vc_wrap_shortcode() {
   vc_map( array(
      "name" => __("Wrap Section (Parallax)","official"),
      "base" => "wrap",
	  "icon" => "tt-wrap",
	  "content_element" => true,	
	  "is_container" => true,
      "category" => __('Official Custom Shortcodes',"official"),
      "params" => array(
         array(
            "type" => "colorpicker",
            "class" => "",
            "heading" => __("Background color","official"),
            "param_name" => "bg_color",
            "value" => '#F6F6F6',
            "description" => __("Choose Background color","official")
         ),array(
            "type" => "colorpicker",
            "class" => "",
            "heading" => __("Border color","official"),
            "param_name" => "border_color",
            "value" => '',
            "description" => __("Choose border color","official")
         ),array(
            "type" => "attach_image",
            "heading" => __("Background Image","official"),
            "param_name" => "image",
            "value" => "",
            "description" => __("Add background image","official")
         ),array(
            "type" => "checkbox",
            "heading" => __("Shadow?","official"),
            "param_name" => "shadow",
            "value" => array( __( "Yes, please", "official" ) => "yes" ),
            "description" => __("Turn On inner shadow?","official")
         ),array(
            "type" => "checkbox",
            "heading" => __("Parallax?","official"),
            "param_name" => "parallax",
            "value" => array( __( "Yes, please", "official" ) => "yes" ),
            "description" => __("Turn On Parallax effect?","official"),
			'dependency' => array(
				'element' => 'image',
				'not_empty' => true
			),
         ),
		 array(
            "type" => "textfield",
            "heading" => __("Parallax Ratio","official"),
            "param_name" => "ratio",
            "value" => "0.6",
			'dependency' => array(
				'element' => 'parallax',
				'not_empty' => true
			),
            "description" => __("Enter Parallax movement ratio , Number only, for fix background use 0, default is 0.6","official")
         ) 
      ),"js_view" => 'VcColumnView'
   ));
}






//-------------------------------------- 
// Divider
//-------------------------------------- 
function official_vc_divider_shortcode() {
   vc_map( array(
      "name" => __("Divider","official"),
      "base" => "divider",
	  "icon" => "tt-divider",
      "category" => __('Official Custom Shortcodes',"official"),
      "params" => array(
         array(
            "type" => "dropdown",
            "holder" => "div",
            "heading" => __("Style","official"),
            "param_name" => "style",
            "value" => array(
				'Transparent'=>'transparent',
				'Line'=>'line',
				'Dotted'=>'dotted',
				'Double'=>'double',
				'Gradient'=>'grad'

			)
         ),array(
            "type" => "colorpicker",
            "class" => "",
            "heading" => __("Color","official"),
            "param_name" => "color",
            "value" => '',
			'dependency' => array(
				'element' => 'style',
				'value'=>array('line','dotted','double')
			)
         ),array(
            "type" => "textfield",
            "class" => "",
            "heading" => __("Size","official"),
            "param_name" => "size",
            "value" => "1px",
			'dependency' => array(
				'element' => 'style',
				'value'=>array('line','dotted','double','grad')
			)
         ),
		 array(
            "type" => "textfield",
            "heading" => __("Margin Top","official"),
            "param_name" => "margin_top",
            "value" =>"",
            "description" => __("Please enter the margin top. e.g. 40px or 3em","official")
         ),
		 array(
            "type" => "textfield",
            "heading" => __("Margin Bottom","official"),
            "param_name" => "margin_bottom",
            "value" =>"",
            "description" => __("Please enter the margin top. e.g. 40px or 3em","official")
         ) 
      )
   ));
}


//-------------------------------------- 
// Gap
//-------------------------------------- 
function official_vc_gap_shortcode() {
   vc_map( array(
      "name" => __("Gap (Vertical Space)","official"),
      "base" => "gap",
	  "icon" => "tt-gap",
      "category" => __('Official Custom Shortcodes',"official"),
      "params" => array(
		 array(
            "type" => "textfield",
            "holder" => "div",
            "heading" => __("Height","official"),
            "param_name" => "height",
            "value" =>"50",
            "description" => __("Please enter the height of space you want. e.g. 30 (Do not need to add px)","official")
         )
      )
   ));
}


//-------------------------------------- 
// Anchor
//-------------------------------------- 
function official_vc_anchor_shortcode() {
   vc_map( array(
      "name" => __("Anchor","official"),
      "base" => "anchor",
	  "icon" => "tt-anchor",
      "category" => __('Official Custom Shortcodes',"official"),
      "params" => array(
		 array(
            "type" => "textfield",
            "holder" => "div",
            "heading" => __("ID","official"),
            "param_name" => "id",
            "description" => __("Please set anchor ID and then set link to it by # tag","official")
         ),
		 array(
            "type" => "textfield",
            "holder" => "div",
            "heading" => __("Padding Top","official"),
            "param_name" => "padding_top",
			"value" =>"120px",
            "description" => __("Please set padding top (default is 120px)","official")
         )
      )
   ));
}


//-------------------------------------- 
// Google Font
//-------------------------------------- 
function official_vc_gfont_shortcode() {
   vc_map( array(
      "name" => __("Google Font","official"),
      "base" => "gfont",
	  "icon" => "tt-gfont",
      "category" => __('Official Custom Shortcodes',"official"),
      "params" => array(
        array(
            "type" => "textfield",
            "holder" => "div",
            "heading" => __("Content","official"),
            "param_name" => "content",
            "value" => "Your Text",
            "description" => __("Enter your title here","official")
         ),
		 array(
            "type" => "dropdown",
            "heading" => __("Font Family","official"),
            "param_name" => "font",
            "value" => array(
"helvetica"=>"Helvetica","ABeeZee" => "ABeeZee","Abel" => "Abel","Abril Fatface" => "Abril+Fatface","Aclonica" => "Aclonica","Acme" => "Acme","Actor" => "Actor","Adamina" => "Adamina","Advent Pro" => "Advent+Pro","Aguafina Script" => "Aguafina+Script","Akronim" => "Akronim","Aladin" => "Aladin","Aldrich" => "Aldrich","Alegreya" => "Alegreya","Alegreya SC" => "Alegreya+SC","Alex Brush" => "Alex+Brush","Alfa Slab One" => "Alfa+Slab+One","Alice" => "Alice","Alike" => "Alike","Alike Angular" => "Alike+Angular","Allan" => "Allan","Allerta" => "Allerta","Allerta Stencil" => "Allerta+Stencil","Allura" => "Allura","Almendra" => "Almendra","Almendra Display" => "Almendra+Display","Almendra SC" => "Almendra+SC","Amarante" => "Amarante","Amaranth" => "Amaranth","Amatic SC" => "Amatic+SC","Amethysta" => "Amethysta","Anaheim" => "Anaheim","Andada" => "Andada","Andika" => "Andika","Angkor" => "Angkor","Annie Use Your Telescope" => "Annie+Use+Your+Telescope","Anonymous Pro" => "Anonymous+Pro","Antic" => "Antic","Antic Didone" => "Antic+Didone","Antic Slab" => "Antic+Slab","Anton" => "Anton","Arapey" => "Arapey","Arbutus" => "Arbutus","Arbutus Slab" => "Arbutus+Slab","Architects Daughter" => "Architects+Daughter","Archivo Black" => "Archivo+Black","Archivo Narrow" => "Archivo+Narrow","Arimo" => "Arimo","Arizonia" => "Arizonia","Armata" => "Armata","Artifika" => "Artifika","Arvo" => "Arvo","Asap" => "Asap","Asset" => "Asset","Astloch" => "Astloch","Asul" => "Asul","Atomic Age" => "Atomic+Age","Aubrey" => "Aubrey","Audiowide" => "Audiowide","Autour One" => "Autour+One","Average" => "Average","Average Sans" => "Average+Sans","Averia Gruesa Libre" => "Averia+Gruesa+Libre","Averia Libre" => "Averia+Libre","Averia Sans Libre" => "Averia+Sans+Libre","Averia Serif Libre" => "Averia+Serif+Libre","Bad Script" => "Bad+Script","Balthazar" => "Balthazar","Bangers" => "Bangers","Basic" => "Basic","Battambang" => "Battambang","Baumans" => "Baumans","Bayon" => "Bayon","Belgrano" => "Belgrano","Belleza" => "Belleza","BenchNine" => "BenchNine","Bentham" => "Bentham","Berkshire Swash" => "Berkshire+Swash","Bevan" => "Bevan","Bigelow Rules" => "Bigelow+Rules","Bigshot One" => "Bigshot+One","Bilbo" => "Bilbo","Bilbo Swash Caps" => "Bilbo+Swash+Caps","Bitter" => "Bitter","Black Ops One" => "Black+Ops+One","Bokor" => "Bokor","Bonbon" => "Bonbon","Boogaloo" => "Boogaloo","Bowlby One" => "Bowlby+One","Bowlby One SC" => "Bowlby+One+SC","Brawler" => "Brawler","Bree Serif" => "Bree+Serif","Bubblegum Sans" => "Bubblegum+Sans","Bubbler One" => "Bubbler+One","Buda" => "Buda","Buenard" => "Buenard","Butcherman" => "Butcherman","Butterfly Kids" => "Butterfly+Kids","Cabin" => "Cabin","Cabin Condensed" => "Cabin+Condensed","Cabin Sketch" => "Cabin+Sketch","Caesar Dressing" => "Caesar+Dressing","Cagliostro" => "Cagliostro","Calligraffitti" => "Calligraffitti","Cambo" => "Cambo","Candal" => "Candal","Cantarell" => "Cantarell","Cantata One" => "Cantata+One","Cantora One" => "Cantora+One","Capriola" => "Capriola","Cardo" => "Cardo","Carme" => "Carme","Carrois Gothic" => "Carrois+Gothic","Carrois Gothic SC" => "Carrois+Gothic+SC","Carter One" => "Carter+One","Caudex" => "Caudex","Cedarville Cursive" => "Cedarville+Cursive","Ceviche One" => "Ceviche+One","Changa One" => "Changa+One","Chango" => "Chango","Chau Philomene One" => "Chau+Philomene+One","Chela One" => "Chela+One","Chelsea Market" => "Chelsea+Market","Chenla" => "Chenla","Cherry Cream Soda" => "Cherry+Cream+Soda","Cherry Swash" => "Cherry+Swash","Chewy" => "Chewy","Chicle" => "Chicle","Chivo" => "Chivo","Cinzel" => "Cinzel","Cinzel Decorative" => "Cinzel+Decorative","Clicker Script" => "Clicker+Script","Coda" => "Coda","Coda Caption" => "Coda+Caption","Codystar" => "Codystar","Combo" => "Combo","Comfortaa" => "Comfortaa","Coming Soon" => "Coming+Soon","Concert One" => "Concert+One","Condiment" => "Condiment","Content" => "Content","Contrail One" => "Contrail+One","Convergence" => "Convergence","Cookie" => "Cookie","Copse" => "Copse","Corben" => "Corben","Courgette" => "Courgette","Cousine" => "Cousine","Coustard" => "Coustard","Covered By Your Grace" => "Covered+By+Your+Grace","Crafty Girls" => "Crafty+Girls","Creepster" => "Creepster","Crete Round" => "Crete+Round","Crimson Text" => "Crimson+Text","Croissant One" => "Croissant+One","Crushed" => "Crushed","Cuprum" => "Cuprum","Cutive" => "Cutive","Cutive Mono" => "Cutive+Mono","Damion" => "Damion","Dancing Script" => "Dancing+Script","Dangrek" => "Dangrek","Dawning of a New Day" => "Dawning+of+a+New+Day","Days One" => "Days+One","Delius" => "Delius","Delius Swash Caps" => "Delius+Swash+Caps","Delius Unicase" => "Delius+Unicase","Della Respira" => "Della+Respira","Denk One" => "Denk+One","Devonshire" => "Devonshire","Didact Gothic" => "Didact+Gothic","Diplomata" => "Diplomata","Diplomata SC" => "Diplomata+SC","Domine" => "Domine","Donegal One" => "Donegal+One","Doppio One" => "Doppio+One","Dorsa" => "Dorsa","Dosis" => "Dosis","Dr Sugiyama" => "Dr+Sugiyama","Droid Sans" => "Droid+Sans","Droid Sans Mono" => "Droid+Sans+Mono","Droid Serif" => "Droid+Serif","Duru Sans" => "Duru+Sans","Dynalight" => "Dynalight","EB Garamond" => "EB+Garamond","Eagle Lake" => "Eagle+Lake","Eater" => "Eater","Economica" => "Economica","Electrolize" => "Electrolize","Elsie" => "Elsie","Elsie Swash Caps" => "Elsie+Swash+Caps","Emblema One" => "Emblema+One","Emilys Candy" => "Emilys+Candy","Engagement" => "Engagement","Englebert" => "Englebert","Enriqueta" => "Enriqueta","Erica One" => "Erica+One","Esteban" => "Esteban","Euphoria Script" => "Euphoria+Script","Ewert" => "Ewert","Exo" => "Exo","Expletus Sans" => "Expletus+Sans","Fanwood Text" => "Fanwood+Text","Fascinate" => "Fascinate","Fascinate Inline" => "Fascinate+Inline","Faster One" => "Faster+One","Fasthand" => "Fasthand","Federant" => "Federant","Federo" => "Federo","Felipa" => "Felipa","Fenix" => "Fenix","Finger Paint" => "Finger+Paint","Fjalla One" => "Fjalla+One","Fjord One" => "Fjord+One","Flamenco" => "Flamenco","Flavors" => "Flavors","Fondamento" => "Fondamento","Fontdiner Swanky" => "Fontdiner+Swanky","Forum" => "Forum","Francois One" => "Francois+One","Freckle Face" => "Freckle+Face","Fredericka the Great" => "Fredericka+the+Great","Fredoka One" => "Fredoka+One","Freehand" => "Freehand","Fresca" => "Fresca","Frijole" => "Frijole","Fruktur" => "Fruktur","Fugaz One" => "Fugaz+One","GFS Didot" => "GFS+Didot","GFS Neohellenic" => "GFS+Neohellenic","Gabriela" => "Gabriela","Gafata" => "Gafata","Galdeano" => "Galdeano","Galindo" => "Galindo","Gentium Basic" => "Gentium+Basic","Gentium Book Basic" => "Gentium+Book+Basic","Geo" => "Geo","Geostar" => "Geostar","Geostar Fill" => "Geostar+Fill","Germania One" => "Germania+One","Gilda Display" => "Gilda+Display","Give You Glory" => "Give+You+Glory","Glass Antiqua" => "Glass+Antiqua","Glegoo" => "Glegoo","Gloria Hallelujah" => "Gloria+Hallelujah","Goblin One" => "Goblin+One","Gochi Hand" => "Gochi+Hand","Gorditas" => "Gorditas","Goudy Bookletter 1911" => "Goudy+Bookletter+1911","Graduate" => "Graduate","Grand Hotel" => "Grand+Hotel","Gravitas One" => "Gravitas+One","Great Vibes" => "Great+Vibes","Griffy" => "Griffy","Gruppo" => "Gruppo","Gudea" => "Gudea","Habibi" => "Habibi","Hammersmith One" => "Hammersmith+One","Hanalei" => "Hanalei","Hanalei Fill" => "Hanalei+Fill","Handlee" => "Handlee","Hanuman" => "Hanuman","Happy Monkey" => "Happy+Monkey","Headland One" => "Headland+One","Henny Penny" => "Henny+Penny","Herr Von Muellerhoff" => "Herr+Von+Muellerhoff","Holtwood One SC" => "Holtwood+One+SC","Homemade Apple" => "Homemade+Apple","Homenaje" => "Homenaje","IM Fell DW Pica" => "IM+Fell+DW+Pica","IM Fell DW Pica SC" => "IM+Fell+DW+Pica+SC","IM Fell Double Pica" => "IM+Fell+Double+Pica","IM Fell Double Pica SC" => "IM+Fell+Double+Pica+SC","IM Fell English" => "IM+Fell+English","IM Fell English SC" => "IM+Fell+English+SC","IM Fell French Canon" => "IM+Fell+French+Canon","IM Fell French Canon SC" => "IM+Fell+French+Canon+SC","IM Fell Great Primer" => "IM+Fell+Great+Primer","IM Fell Great Primer SC" => "IM+Fell+Great+Primer+SC","Iceberg" => "Iceberg","Iceland" => "Iceland","Imprima" => "Imprima","Inconsolata" => "Inconsolata","Inder" => "Inder","Indie Flower" => "Indie+Flower","Inika" => "Inika","Irish Grover" => "Irish+Grover","Istok Web" => "Istok+Web","Italiana" => "Italiana","Italianno" => "Italianno","Jacques Francois" => "Jacques+Francois","Jacques Francois Shadow" => "Jacques+Francois+Shadow","Jim Nightshade" => "Jim+Nightshade","Jockey One" => "Jockey+One","Jolly Lodger" => "Jolly+Lodger","Josefin Sans" => "Josefin+Sans","Josefin Slab" => "Josefin+Slab","Joti One" => "Joti+One","Judson" => "Judson","Julee" => "Julee","Julius Sans One" => "Julius+Sans+One","Junge" => "Junge","Jura" => "Jura","Just Another Hand" => "Just+Another+Hand","Just Me Again Down Here" => "Just+Me+Again+Down+Here","Kameron" => "Kameron","Karla" => "Karla","Kaushan Script" => "Kaushan+Script","Kavoon" => "Kavoon","Keania One" => "Keania+One","Kelly Slab" => "Kelly+Slab","Kenia" => "Kenia","Khmer" => "Khmer","Kite One" => "Kite+One","Knewave" => "Knewave","Kotta One" => "Kotta+One","Koulen" => "Koulen","Kranky" => "Kranky","Kreon" => "Kreon","Kristi" => "Kristi","Krona One" => "Krona+One","La Belle Aurore" => "La+Belle+Aurore","Lancelot" => "Lancelot","Lato" => "Lato","League Script" => "League+Script","Leckerli One" => "Leckerli+One","Ledger" => "Ledger","Lekton" => "Lekton","Lemon" => "Lemon","Libre Baskerville" => "Libre+Baskerville","Life Savers" => "Life+Savers","Lilita One" => "Lilita+One","Limelight" => "Limelight","Linden Hill" => "Linden+Hill","Lobster" => "Lobster","Lobster Two" => "Lobster+Two","Londrina Outline" => "Londrina+Outline","Londrina Shadow" => "Londrina+Shadow","Londrina Sketch" => "Londrina+Sketch","Londrina Solid" => "Londrina+Solid","Lora" => "Lora","Love Ya Like A Sister" => "Love+Ya+Like+A+Sister","Loved by the King" => "Loved+by+the+King","Lovers Quarrel" => "Lovers+Quarrel","Luckiest Guy" => "Luckiest+Guy","Lusitana" => "Lusitana","Lustria" => "Lustria","Macondo" => "Macondo","Macondo Swash Caps" => "Macondo+Swash+Caps","Magra" => "Magra","Maiden Orange" => "Maiden+Orange","Mako" => "Mako","Marcellus" => "Marcellus","Marcellus SC" => "Marcellus+SC","Marck Script" => "Marck+Script","Margarine" => "Margarine","Marko One" => "Marko+One","Marmelad" => "Marmelad","Marvel" => "Marvel","Mate" => "Mate","Mate SC" => "Mate+SC","Maven Pro" => "Maven+Pro","McLaren" => "McLaren","Meddon" => "Meddon","MedievalSharp" => "MedievalSharp","Medula One" => "Medula+One","Megrim" => "Megrim","Meie Script" => "Meie+Script","Merienda" => "Merienda","Merienda One" => "Merienda+One","Merriweather" => "Merriweather","Merriweather Sans" => "Merriweather+Sans","Metal" => "Metal","Metal Mania" => "Metal+Mania","Metamorphous" => "Metamorphous","Metrophobic" => "Metrophobic","Michroma" => "Michroma","Milonga" => "Milonga","Miltonian" => "Miltonian","Miltonian Tattoo" => "Miltonian+Tattoo","Miniver" => "Miniver","Miss Fajardose" => "Miss+Fajardose","Modern Antiqua" => "Modern+Antiqua","Molengo" => "Molengo","Molle" => "Molle","Monda" => "Monda","Monofett" => "Monofett","Monoton" => "Monoton","Monsieur La Doulaise" => "Monsieur+La+Doulaise","Montaga" => "Montaga","Montez" => "Montez","Montserrat" => "Montserrat","Montserrat Alternates" => "Montserrat+Alternates","Montserrat Subrayada" => "Montserrat+Subrayada","Moul" => "Moul","Moulpali" => "Moulpali","Mountains of Christmas" => "Mountains+of+Christmas","Mouse Memoirs" => "Mouse+Memoirs","Mr Bedfort" => "Mr+Bedfort","Mr Dafoe" => "Mr+Dafoe","Mr De Haviland" => "Mr+De+Haviland","Mrs Saint Delafield" => "Mrs+Saint+Delafield","Mrs Sheppards" => "Mrs+Sheppards","Muli" => "Muli","Mystery Quest" => "Mystery+Quest","Neucha" => "Neucha","Neuton" => "Neuton","New Rocker" => "New+Rocker","News Cycle" => "News+Cycle","Niconne" => "Niconne","Nixie One" => "Nixie+One","Nobile" => "Nobile","Nokora" => "Nokora","Norican" => "Norican","Nosifer" => "Nosifer","Nothing You Could Do" => "Nothing+You+Could+Do","Noticia Text" => "Noticia+Text","Nova Cut" => "Nova+Cut","Nova Flat" => "Nova+Flat","Nova Mono" => "Nova+Mono","Nova Oval" => "Nova+Oval","Nova Round" => "Nova+Round","Nova Script" => "Nova+Script","Nova Slim" => "Nova+Slim","Nova Square" => "Nova+Square","Numans" => "Numans","Nunito" => "Nunito","Odor Mean Chey" => "Odor+Mean+Chey","Offside" => "Offside","Old Standard TT" => "Old+Standard+TT","Oldenburg" => "Oldenburg","Oleo Script" => "Oleo+Script","Oleo Script Swash Caps" => "Oleo+Script+Swash+Caps","Open Sans" => "Open+Sans","Open Sans Condensed" => "Open+Sans+Condensed","Oranienbaum" => "Oranienbaum","Orbitron" => "Orbitron","Oregano" => "Oregano","Orienta" => "Orienta","Original Surfer" => "Original+Surfer","Oswald" => "Oswald","Over the Rainbow" => "Over+the+Rainbow","Overlock" => "Overlock","Overlock SC" => "Overlock+SC","Ovo" => "Ovo","Oxygen" => "Oxygen","Oxygen Mono" => "Oxygen+Mono","PT Mono" => "PT+Mono","PT Sans" => "PT+Sans","PT Sans Caption" => "PT+Sans+Caption","PT Sans Narrow" => "PT+Sans+Narrow","PT Serif" => "PT+Serif","PT Serif Caption" => "PT+Serif+Caption","Pacifico" => "Pacifico","Paprika" => "Paprika","Parisienne" => "Parisienne","Passero One" => "Passero+One","Passion One" => "Passion+One","Patrick Hand" => "Patrick+Hand","Patrick Hand SC" => "Patrick+Hand+SC","Patua One" => "Patua+One","Paytone One" => "Paytone+One","Peralta" => "Peralta","Permanent Marker" => "Permanent+Marker","Petit Formal Script" => "Petit+Formal+Script","Petrona" => "Petrona","Philosopher" => "Philosopher","Piedra" => "Piedra","Pinyon Script" => "Pinyon+Script","Pirata One" => "Pirata+One","Plaster" => "Plaster","Play" => "Play","Playball" => "Playball","Playfair Display" => "Playfair+Display","Playfair Display SC" => "Playfair+Display+SC","Podkova" => "Podkova","Poiret One" => "Poiret+One","Poller One" => "Poller+One","Poly" => "Poly","Pompiere" => "Pompiere","Pontano Sans" => "Pontano+Sans","Port Lligat Sans" => "Port+Lligat+Sans","Port Lligat Slab" => "Port+Lligat+Slab","Prata" => "Prata","Preahvihear" => "Preahvihear","Press Start 2P" => "Press+Start+2P","Princess Sofia" => "Princess+Sofia","Prociono" => "Prociono","Prosto One" => "Prosto+One","Puritan" => "Puritan","Purple Purse" => "Purple+Purse","Quando" => "Quando","Quantico" => "Quantico","Quattrocento" => "Quattrocento","Quattrocento Sans" => "Quattrocento+Sans","Questrial" => "Questrial","Quicksand" => "Quicksand","Quintessential" => "Quintessential","Qwigley" => "Qwigley","Racing Sans One" => "Racing+Sans+One","Radley" => "Radley","Raleway" => "Raleway","Raleway Dots" => "Raleway+Dots","Rambla" => "Rambla","Rammetto One" => "Rammetto+One","Ranchers" => "Ranchers","Rancho" => "Rancho","Rationale" => "Rationale","Redressed" => "Redressed","Reenie Beanie" => "Reenie+Beanie","Revalia" => "Revalia","Ribeye" => "Ribeye","Ribeye Marrow" => "Ribeye+Marrow","Righteous" => "Righteous","Risque" => "Risque","Roboto" => "Roboto","Roboto Condensed" => "Roboto+Condensed","Rochester" => "Rochester","Rock Salt" => "Rock+Salt","Rokkitt" => "Rokkitt","Romanesco" => "Romanesco","Ropa Sans" => "Ropa+Sans","Rosario" => "Rosario","Rosarivo" => "Rosarivo","Rouge Script" => "Rouge+Script","Ruda" => "Ruda","Rufina" => "Rufina","Ruge Boogie" => "Ruge+Boogie","Ruluko" => "Ruluko","Rum Raisin" => "Rum+Raisin","Ruslan Display" => "Ruslan+Display","Russo One" => "Russo+One","Ruthie" => "Ruthie","Rye" => "Rye","Sacramento" => "Sacramento","Sail" => "Sail","Salsa" => "Salsa","Sanchez" => "Sanchez","Sancreek" => "Sancreek","Sansita One" => "Sansita+One","Sarina" => "Sarina","Satisfy" => "Satisfy","Scada" => "Scada","Schoolbell" => "Schoolbell","Seaweed Script" => "Seaweed+Script","Sevillana" => "Sevillana","Seymour One" => "Seymour+One","Shadows Into Light" => "Shadows+Into+Light","Shadows Into Light Two" => "Shadows+Into+Light+Two","Shanti" => "Shanti","Share" => "Share","Share Tech" => "Share+Tech","Share Tech Mono" => "Share+Tech+Mono","Shojumaru" => "Shojumaru","Short Stack" => "Short+Stack","Siemreap" => "Siemreap","Sigmar One" => "Sigmar+One","Signika" => "Signika","Signika Negative" => "Signika+Negative","Simonetta" => "Simonetta","Sintony" => "Sintony","Sirin Stencil" => "Sirin+Stencil","Six Caps" => "Six+Caps","Skranji" => "Skranji","Slackey" => "Slackey","Smokum" => "Smokum","Smythe" => "Smythe","Sniglet" => "Sniglet","Snippet" => "Snippet","Snowburst One" => "Snowburst+One","Sofadi One" => "Sofadi+One","Sofia" => "Sofia","Sonsie One" => "Sonsie+One","Sorts Mill Goudy" => "Sorts+Mill+Goudy","Source Code Pro" => "Source+Code+Pro","Source Sans Pro" => "Source+Sans+Pro","Special Elite" => "Special+Elite","Spicy Rice" => "Spicy+Rice","Spinnaker" => "Spinnaker","Spirax" => "Spirax","Squada One" => "Squada+One","Stalemate" => "Stalemate","Stalinist One" => "Stalinist+One","Stardos Stencil" => "Stardos+Stencil","Stint Ultra Condensed" => "Stint+Ultra+Condensed","Stint Ultra Expanded" => "Stint+Ultra+Expanded","Stoke" => "Stoke","Strait" => "Strait","Sue Ellen Francisco" => "Sue+Ellen+Francisco","Sunshiney" => "Sunshiney","Supermercado One" => "Supermercado+One","Suwannaphum" => "Suwannaphum","Swanky and Moo Moo" => "Swanky+and+Moo+Moo","Syncopate" => "Syncopate","Tangerine" => "Tangerine","Taprom" => "Taprom","Tauri" => "Tauri","Telex" => "Telex","Tenor Sans" => "Tenor+Sans","Text Me One" => "Text+Me+One","The Girl Next Door" => "The+Girl+Next+Door","Tienne" => "Tienne","Tinos" => "Tinos","Titan One" => "Titan+One","Titillium Web" => "Titillium+Web","Trade Winds" => "Trade+Winds","Trocchi" => "Trocchi","Trochut" => "Trochut","Trykker" => "Trykker","Tulpen One" => "Tulpen+One","Ubuntu" => "Ubuntu","Ubuntu Condensed" => "Ubuntu+Condensed","Ubuntu Mono" => "Ubuntu+Mono","Ultra" => "Ultra","Uncial Antiqua" => "Uncial+Antiqua","Underdog" => "Underdog","Unica One" => "Unica+One","UnifrakturCook" => "UnifrakturCook","UnifrakturMaguntia" => "UnifrakturMaguntia","Unkempt" => "Unkempt","Unlock" => "Unlock","Unna" => "Unna","VT323" => "VT323","Vampiro One" => "Vampiro+One","Varela" => "Varela","Varela Round" => "Varela+Round","Vast Shadow" => "Vast+Shadow","Vibur" => "Vibur","Vidaloka" => "Vidaloka","Viga" => "Viga","Voces" => "Voces","Volkhov" => "Volkhov","Vollkorn" => "Vollkorn","Voltaire" => "Voltaire","Waiting for the Sunrise" => "Waiting+for+the+Sunrise","Wallpoet" => "Wallpoet","Walter Turncoat" => "Walter+Turncoat","Warnes" => "Warnes","Wellfleet" => "Wellfleet","Wendy One" => "Wendy+One","Wire One" => "Wire+One","Yanone Kaffeesatz" => "Yanone+Kaffeesatz","Yellowtail" => "Yellowtail","Yeseva One" => "Yeseva+One","Yesteryear" => "Yesteryear","Zeyada" => "Zeyada"
				)
         ),
		 array(
            "type" => "textfield",
            "heading" => __("Font Size","official"),
            "param_name" => "size",
            "value" =>"48px",
            "description" => __("e.g. 48px or 3em","official")
         ),
		 array(
            "type" => "colorpicker",
            "class" => "",
            "heading" => __("Color","official"),
            "param_name" => "color",
            "value" => '#000000',
            "description" => __("Choose text color","official")
         ),
		 array(
            "type" => "textfield",
            "heading" => __("Margin","official"),
            "param_name" => "margin",
            "value" =>"",
            "description" => __("Please enter the margin. e.g. 5em or 10px 20px","official")
         ),
		 array(
            "type" => "dropdown",
            "heading" => __("Text Align","official"),
            "param_name" => "textalign",
            "value" => array(
				'Left' => 'left',
				'Right' => 'right',
				'Center' => 'center',
				'Justify' => 'justify',
			)
		)
      )
   ));
}



//-------------------------------------- 
// Google Map
//-------------------------------------- 
function official_vc_gmap_shortcode() {
   vc_map( array(
      "name" => __("Google Map","official"),
      "base" => "gmap",
	  "icon" => "tt-gmap",
      "category" => __('Official Custom Shortcodes',"official"),
      "params" => array(
         array(
            "type" => "textfield",
            "heading" => __("Lat","official"),
            "param_name" => "lat"
         ),
		 array(
            "type" => "textfield",
            "heading" => __("Long","official"),
            "param_name" => "long"
         ),
		 array(
            "type" => "textfield",
            "heading" => __("Width","official"),
            "param_name" => "widht"
         ),
		 array(
            "type" => "textfield",
            "heading" => __("Height","official"),
            "param_name" => "height"
         ),
		 array(
            "type" => "textfield",
            "heading" => __("Address","official"),
            "param_name" => "address"
         ),
		 array(
            "type" => "dropdown",
            "heading" => __("Zoom","official"),
            "param_name" => "zoom",
            "value" => array(
				'0','1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19'
			)
         ),
		 array(
            "type" => "dropdown",
            "heading" => __("Style","official"),
            "param_name" => "style",
            "value" => array(
				__('Full', 'official')=>'full',
				__('Standard', 'official')=>'standard'  
			)
         ),
		 array(
            "type" => "dropdown",
            "heading" => __("Map Type","official"),
            "param_name" => "maptype",
            "value" => array(
				'ROADMAP' => 'ROADMAP',
				'SATELLITE' => 'SATELLITE',
				'HYBRID' => 'HYBRID',
				'TERRAIN' => 'TERRAIN'
			)
         ),
		 array(
            "type" => "attach_image",
            "heading" => __("Marker Image","official"),
            "param_name" => "markerimage",
            "value" => ""
         ),
		 array(
            "type" => "textfield",
            "heading" => __("Info Window Text","official"),
            "param_name" => "infowindow"
         ),
		 array(
            "type" => "textfield",
            "heading" => __("Google API Key","official"),
            "param_name" => "apikey"
         ),
		 array(
            "type" => "dropdown",
            "heading" => __("Show Info Window Open by Default?","official"),
            "param_name" => "infowindowdefault",
            "value" => array(
				'Yes' => 'yes',
				'No' => 'no'
			)
		),
		 array(
            "type" => "dropdown",
            "heading" => __("Hide Map Controls?","official"),
            "param_name" => "hidecontrols",
            "value" => array(
				'No' => 'no',
				'Yes' => 'yes'
			)
		),
		 array(
            "type" => "colorpicker",
            "heading" => __("Color Scheme","official"),
            "param_name" => "color",
            "value" => ''
         ),
		 array(
            "type" => "checkbox",
            "heading" => __("Grayscale Effect?","official"),
            "param_name" => "grayscale",
            "value" => array( __( "Yes, please", "official" ) => 'yes' )
         )
      )
   ));
}



//-------------------------------------- 
// Social Icons 
//-------------------------------------- 
function official_vc_social_shortcode() {
   vc_map( array(
      "name" => __("Social Icons","official"),
      "base" => "social",
	  "icon" => "tt-social",
      "category" => __('Official Custom Shortcodes',"official"),
      "params" => array(
         array(
            "type" => "dropdown",
            "holder" => "div",
            "heading" => __("Style","official"),
            "param_name" => "style",
            "value" => array(
				'Square + Border' => 'square',
				'Square' => 'square_wb',
				'Circular + Border' => 'circular',
				'Circular' => 'circular_wb',
				'Colorful Square' =>'colorful_square' ,
				'Colorful Circular' => 'colorful_circular'
			),
            "description" => __("Please Select the Style of Social Icons","official")
         ),
		 array(
            "type" => "dropdown",
            "heading" => __("Target","official"),
            "param_name" => "target",
            "value" => array(
				'Current Window (_self)'=>'_self',
				'New Window (_blank)'=>'_blank'
				),
            "description" => __("Link open in New window or Current window","official")
         ),
		 array(
            "type" => "dropdown",
            "heading" => __("Tooltip","official"),
            "param_name" => "tooltip",
            "value" => array(
				'No Tooltip'=>'notip',
				'Top Tooltip'=>'toptip',
				'Right Tooltip'=>'righttip',
				'Bottom Tooltip'=>'bottomtip',
				'Left Tooltip'=>'lefttip'
			)
         ),
		 array(
            "type" => "textfield",
            "heading" => __("Facebook URL","official"),
            "param_name" => "facebook",
            "value" => "",
			"description" => __("e.g. http://www.facebook.com/envato (with http://)","official")
         ),
		 array(
            "type" => "textfield",
            "heading" => __("Twitter URL","official"),
            "param_name" => "twitter",
            "value" => ""
         ),
		 array(
            "type" => "textfield",
            "heading" => __("Google+","official"),
            "param_name" => "google_plus",
            "value" => ""
         ),
		 array(
            "type" => "textfield",
            "heading" => __("Dribbble","official"),
            "param_name" => "dribbble",
            "value" => ""
         ),
		 array(
            "type" => "textfield",
            "heading" => __("RSS","official"),
            "param_name" => "rss",
            "value" => ""
         ),
		 array(
            "type" => "textfield",
            "heading" => __("Flickr","official"),
            "param_name" => "flickr",
            "value" => ""
         ),
		 array(
            "type" => "textfield",
            "heading" => __("Linkedin","official"),
            "param_name" => "linkedin",
            "value" => ""
         ),
		 array(
            "type" => "textfield",
            "heading" => __("Pinterest","official"),
            "param_name" => "pinterest",
            "value" => ""
         ),
		 array(
            "type" => "textfield",
            "heading" => __("Instagram","official"),
            "param_name" => "instagram",
            "value" => ""
         ),
		 array(
            "type" => "textfield",
            "heading" => __("Skype","official"),
            "param_name" => "skype",
            "value" => ""
         ),
		 array(
            "type" => "textfield",
            "heading" => __("Tumblr","official"),
            "param_name" => "tumblr",
            "value" => ""
         ),
		 array(
            "type" => "textfield",
            "heading" => __("YouTube","official"),
            "param_name" => "youtube",
            "value" => ""
         ),
		 array(
            "type" => "textfield",
            "heading" => __("Xing","official"),
            "param_name" => "xing",
            "value" => ""
         ),
		 array(
            "type" => "textfield",
            "heading" => __("Dropbox","official"),
            "param_name" => "dropbox",
            "value" => ""
         ),
		 array(
            "type" => "textfield",
            "heading" => __("StackExchange","official"),
            "param_name" => "stackexchange",
            "value" => ""
         ),
		 array(
            "type" => "textfield",
            "heading" => __("BitBucket","official"),
            "param_name" => "bitbucket",
            "value" => ""
         ),
		 array(
            "type" => "textfield",
            "heading" => __("Weibo","official"),
            "param_name" => "weibo",
            "value" => ""
         ),
		 array(
            "type" => "textfield",
            "heading" => __("GitHub","official"),
            "param_name" => "github",
            "value" => ""
         ),
		 array(
            "type" => "textfield",
            "heading" => __("FourSquare","official"),
            "param_name" => "foursquare",
            "value" => ""
         )
      )
   ));
}





//-------------------------------------- 
// Message Box
//-------------------------------------- 
function official_vc_message_shortcode() {
   vc_map( array(
      "name" => __("Message Box","official"),
      "base" => "message",
	  "icon" => "tt-message",
      "category" => __('Official Custom Shortcodes',"official"),
      "params" => array(
         array(
            "type" => "dropdown",
            "holder" => "div",
            "heading" => __("Type","official"),
            "param_name" => "type",
            "value" => array(
				'Success' =>'success',
				'Info' =>'info',
				'Error' =>'error',
				'Warning' =>'warning'
			)
         ),array(
            "type" => "checkbox",
            "heading" => __("Show Icon?","official"),
            "param_name" => "icon",
            "value" => array( __( "Yes, please", "official" ) => true )
         ),array(
            "type" => "checkbox",
            "heading" => __("Show close button?","official"),
            "param_name" => "close_button",
            "value" => array( __( "Yes, please", "official" ) => true )
         ),array(
            "type" => "textfield",
            "holder" => "",
            "heading" => __("Message","official"),
            "param_name" => "message",
            "value" => __("Your message here!","official")
         )
      )
   ));
}




//-------------------------------------- 
// Toggle
//-------------------------------------- 
function official_vc_toggle_shortcode() {
   vc_map( array(
      "name" => __("Toggle","official"),
      "base" => "toggle",
	  "icon" => "tt-toggle",
      "category" => __('Official Custom Shortcodes',"official"),
      "params" => array(
         array(
            "type" => "textfield",
            "heading" => __("Title","official"),
            "param_name" => "title"
         ),
		 array(
            "type" => "checkbox",
            "heading" => __("Open?","official"),
            "param_name" => "open",
            "value" => array( __( "Yes, please", "official" ) => 'yes' )
         ),
		 array(
            "type" => "textarea_html",
            "heading" => __("Content","official"),
            "param_name" => "content",
            "value" => __("Lorem ipsum dolor sit...","official"),
            "description" => __("Enter your content.","official")
         ) 
      )
   ));
}






//-------------------------------------- 
// Testimonial & Quotes Carousel
//-------------------------------------- 
function official_vc_testimonial_shortcode() {
   vc_map( array(
      "name" => __("Testimonial & Quotes Carousel","official"),
      "base" => "testimonial",
	  "icon" => "tt-testimonial",
      "category" => __('Official Custom Shortcodes',"official"),
      "params" => array(
         array(
            "type" => "dropdown",
            "holder" => "div",
            "heading" => __("Type","official"),
            "param_name" => "type",
            "value" => array(
				'Testimonial'=>'testimonial',
				'Quote'=>'quote'
			)
         ),array(
            "type" => "dropdown",
            "heading" => __("Style","official"),
            "param_name" => "style",
            "value" => array(
				'Light'=>'light',
				'Dark'=>'dark'
			)
         ),array(
            "type" => "textfield",
            "heading" => __("Title","official"),
            "param_name" => "title",
            "value" => ""
         ),array(
            "type" => "dropdown",
            "heading" => __("Number of Items","official"),
            "param_name" => "items",
            "value" => array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20)
         ),array(
            "type" => "textfield",
            "holder" => "",
            "heading" => __("Category","official"),
            "param_name" => "cat",
            "description" => __('Please enter the testimonial category slug for filtering the result. (optional)', 'official')
         ),array(
            "type" => "dropdown",
            "heading" => __("Transition effect","official"),
            "param_name" => "transition",
            "value" => array(
				'Slide'=>'slide',
				'Fade'=>'fade'

			),
			"description" => __('Please select the slider transition effect.', 'official')
         )
      )
   ));
}







//-------------------------------------- 
// Clients Carousel
//-------------------------------------- 
function official_vc_clients_shortcode() {
   vc_map( array(
      "name" => __("Clients Carousel","official"),
      "base" => "clients",
	  "icon" => "tt-clients",
      "category" => __('Official Custom Shortcodes',"official"),
      "params" => array(
         array(
            "type" => "dropdown",
            "heading" => __("Columns","official"),
            "param_name" => "columns",
            "value" => array(1,2,3,4,5,6),
			'description' => __('How many columns would you like?', 'official'),
         ),array(
            "type" => "textfield",
            "holder" => "div",
            "heading" => __("Title","official"),
            "param_name" => "title",
            "value" => ""
         ),array(
            "type" => "textfield",
            "heading" => __("Category","official"),
            "param_name" => "category",
            "description" => __('Please enter the testimonial category slug for filtering the result. (optional)', 'official')
         ),
		 array(
            "type" => "dropdown",
            "heading" => __("Next and Previuse Icon Position","official"),
            "param_name" => "nav",
            "value" => array(
				"Right and Left Side" => "side",
				"Top in Title Bar" => "titlebar",
				"Turn Off" => "off"
			),
			'dependency' => array(
				'element' => 'title',
				'not_empty' => true
			)
         )
      )
   ));
}



//-------------------------------------- 
// Portfolio Carousel
//-------------------------------------- 
function official_vc_portfolio_shortcode() {
   vc_map( array(
      "name" => __("Portfolio Items & Carousel","official"),
      "base" => "portfolio",
	  "icon" => "tt-portfolio",
      "category" => __('Official Custom Shortcodes',"official"),
      "params" => array(
         array(
            "type" => "textfield",
            "holder" => "div",
            "heading" => __("Title","official"),
            "param_name" => "title",
            "value" => __("Recent Works","official")
         ),array(
            "type" => "dropdown",
            "heading" => __("Columns","official"),
            "param_name" => "columns",
            "value" => array(1,2,3,4),
			'description' => __('How many columns would you like?', 'official'),
         ),array(
            "type" => "dropdown",
            "heading" => __("Number of Items","official"),
            "param_name" => "items",
            "value" => array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40)
         ),array(
            "type" => "textfield",
            "heading" => __("Category","official"),
            "param_name" => "category",
            "description" => __('Please enter the portfolio category slug for filtering the result. (optional)', 'official')
         ),
		 array(
            "type" => "checkbox",
            "heading" => __("Turn it to Carousel?","official"),
            "param_name" => "carousel",
            "value" => array( __( "Yes, please", "official" ) => 'true' )
         ),
		 array(
            "type" => "dropdown",
            "heading" => __("Next and Previuse Icon Position","official"),
            "param_name" => "nav",
            "value" => array(
				"Right and Left Side" => "side",
				"Top in Title Bar" => "titlebar",
				"Turn Off" => "off"
			),
			'dependency' => array(
				'element' => 'carousel',
				'not_empty' => true
			)
         )
      )
   ));
}






//-------------------------------------- 
// Recent Posts + Carousel
//-------------------------------------- 
function official_vc_recentposts_shortcode() {
   vc_map( array(
      "name" => __("Recent Posts & Carousel","official"),
      "base" => "recentposts",
	  "icon" => "tt-recentposts",
      "category" => __('Official Custom Shortcodes',"official"),
      "params" => array(
         array(
            "type" => "textfield",
            "holder" => "div",
            "heading" => __("Title","official"),
            "param_name" => "title",
            "value" => __("Recent Posts","official")
         ),array(
            "type" => "dropdown",
            "heading" => __("Columns","official"),
            "param_name" => "columns",
            "value" => array(1,2,3,4),
			'description' => __('How many columns would you like?', 'official'),
         ),array(
            "type" => "dropdown",
            "heading" => __("Number of Items","official"),
            "param_name" => "items",
            "value" => array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40)
         ),array(
            "type" => "textfield",
            "holder" => "",
            "heading" => __("Category","official"),
            "param_name" => "category",
            "description" => __('Please enter the Category slug for filtering the result. (optional)', 'official')
         ),
		 array(
            "type" => "checkbox",
            "heading" => __("Turn it to Carousel?","official"),
            "param_name" => "carousel",
            "value" => array( __( "Yes, please", "official" ) => 'true' )
         ),
		 array(
            "type" => "dropdown",
            "heading" => __("Next and Previuse Icon Position","official"),
            "param_name" => "nav",
            "value" => array(
				"Right and Left Side" => "side",
				"Top in Title Bar" => "titlebar",
				"Turn Off" => "off"
			),
			'dependency' => array(
				'element' => 'carousel',
				'not_empty' => true
			)
         )
		 
      )
   ));
}



//-------------------------------------- 
// News Ticker
//-------------------------------------- 
function official_vc_newsticker_shortcode() {
   vc_map( array(
      "name" => __("News Ticker","official"),
      "base" => "newsticker",
	  "icon" => "tt-newsticker",
      "category" => __('Official Custom Shortcodes',"official"),
      "params" => array(
         array(
            "type" => "textfield",
            "holder" => "div",
            "heading" => __("Title","official"),
            "param_name" => "title",
            "value" => __("Breaking News","official")
         ),array(
            "type" => "dropdown",
            "heading" => __("Number of Items","official"),
            "param_name" => "items",
            "value" => array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20)
         ),array(
            "type" => "textfield",
            "holder" => "",
            "heading" => __("Category","official"),
            "param_name" => "category",
            "description" => __('Please enter the Category slug for filtering the result. (optional)', 'official')
         ),
		 array(
			'type' => 'dropdown',
			'heading' => __( 'Order by', 'official' ),
			'param_name' => 'orderby',
			'value' => array(
				__( 'Date', 'official' ) => 'date',
				__( 'ID', 'official' ) => 'ID',
				__( 'Author', 'official' ) => 'author',
				__( 'Title', 'official' ) => 'title',
				__( 'Modified', 'official' ) => 'modified',
				__( 'Random', 'official' ) => 'rand',
				__( 'Comment count', 'official' ) => 'comment_count',
				__( 'Menu order', 'official' ) => 'menu_order'
			),
			'description' => sprintf( __( 'Select how to sort retrieved posts. More at %s.', 'official' ), '<a href="http://codex.wordpress.org/Class_Reference/WP_Query#Order_.26_Orderby_Parameters" target="_blank">WordPress codex page</a>' )
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Order way', 'official' ),
			'param_name' => 'order',
			'value' => array(
				__( 'Descending', 'official' ) => 'DESC',
				__( 'Ascending', 'official' ) => 'ASC'
			),
			'description' => sprintf( __( 'Designates the ascending or descending order. More at %s.', 'official' ), '<a href="http://codex.wordpress.org/Class_Reference/WP_Query#Order_.26_Orderby_Parameters" target="_blank">WordPress codex page</a>' )
		),
		 array(
            "type" => "colorpicker",
            "class" => "",
            "heading" => __("Title Color","official"),
            "param_name" => "title_color",
            "value" => '#CC0000',
            "description" => __("Choose title color","official")
         ),
		 array(
            "type" => "checkbox",
            "heading" => __("Blinking Title?","official"),
            "param_name" => "blink",
            "value" => array( __( "Yes, please", "official" ) => 'true' )
         )
      )
   ));
}




//-------------------------------------- 
// Countdown Timer
//-------------------------------------- 
function official_vc_countdown_shortcode() {
   vc_map( array(
      "name" => __("Countdown Timer","official"),
      "base" => "countdown",
	  "icon" => "tt-countdown",
      "category" => __('Official Custom Shortcodes',"official"),
      "params" => array(
         array(
            "type" => "textfield",
            "holder" => "div",
            "heading" => __("Date","official"),
            "param_name" => "date",
            "value" => "30 December 2015 23:59:59",
			"description"=>__("Please enter your target date like this: 30 December 2015 23:59:59 (Your time must be in future)","official")
         ),
		 array(
			'type' => 'dropdown',
			'heading' => __( 'Size', 'official' ),
			'param_name' => 'size',
			'value' => array(
				__( 'Small', 'official' ) => 'small',
				__( 'Medium', 'official' ) => 'medium',
				__( 'Large', 'official' ) => 'large',
				__( 'Extra Large', 'official' ) => 'xlarge'
			)
		),
		 array(
            "type" => "dropdown",
            "heading" => __("Align","official"),
            "param_name" => "align",
            "value" => array(
				'Left' => 'left',
				'Right' => 'right',
				'Center' => 'center'
			)
		)
      )
   ));
}




//-------------------------------------- 
// Member
//-------------------------------------- 
function official_vc_member_shortcode() {
   vc_map( array(
      "name" => __("Member","official"),
      "base" => "member",
	  "icon" => "tt-member",
      "category" => __('Official Custom Shortcodes',"official"),
      "params" => array(

		 array(
            "type" => "textfield",
            "holder" => "div",
            "heading" => __("Full Name","official"),
            "param_name" => "name",
            "value" => ""
         ),array(
            "type" => "textfield",
            "heading" => __("Job Role","official"),
            "param_name" => "role",
            "value" => "",
			"description" => __("e.g. CEO, Manager, Designer and ...)","official")
         ),array(
            "type" => "attach_image",
            "heading" => __("Image","official"),
            "param_name" => "image",
            "value" => ""
         ),array(
            "type" => "textfield",
            "heading" => __("Facebook URL","official"),
            "param_name" => "facebook",
            "value" => "",
			"description" => __("e.g. http://www.facebook.com/envato (with http://)","official")
         ),
		 array(
            "type" => "textfield",
            "heading" => __("Twitter URL","official"),
            "param_name" => "twitter",
            "value" => ""
         ),
		 array(
            "type" => "textfield",
            "heading" => __("Google+","official"),
            "param_name" => "google_plus",
            "value" => ""
         ),
		 array(
            "type" => "textfield",
            "heading" => __("Linkedin","official"),
            "param_name" => "linkedin",
            "value" => ""
         ),
		 array(
            "type" => "textfield",
            "heading" => __("Skype","official"),
            "param_name" => "skype",
            "value" => ""
         ),
		 array(
            "type" => "textfield",
            "heading" => __("Dribbble","official"),
            "param_name" => "dribbble",
            "value" => ""
         ),
		 array(
            "type" => "textfield",
            "heading" => __("Flickr","official"),
            "param_name" => "flickr",
            "value" => ""
         ),
		 array(
            "type" => "textfield",
            "heading" => __("Instagram","official"),
            "param_name" => "instagram",
            "value" => ""
         )
		 ,
		 array(
            "type" => "textfield",
            "heading" => __("Email","official"),
            "param_name" => "email",
            "value" => ""
         ),
         array(
            "type" => "textarea_html",
            "heading" => __("Content","official"),
            "param_name" => "content",
            "value" => __("your content goes here!"),
            "description" => __("Enter your content.")
         )
      )
   ));
}


?>