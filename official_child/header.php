<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie7" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 8 ]><html class="ie8" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 9 ]><html class="ie9" <?php language_attributes(); ?>><![endif]-->
<!--[if (gte IE 10)|!(IE)]><!--><html <?php language_attributes(); ?>><!--<![endif]-->
<head>

    <!-- Basic Page Needs
 	================================================== -->
	<meta charset="<?php bloginfo('charset'); ?>">

	<!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=EmulateIE8; IE=EDGE" />
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<script language="javascript" type="text/javascript" src="<?php echo esc_url(get_template_directory_uri()); ?>/js/excanvas.min.js"></script>
	<![endif]-->

    <?php if(_option('zoom')!=1): ?>
	<!-- Mobile Specific Metas
    ================================================== -->
	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; minimum-scale=1.0; user-scalable=no; target-densityDpi=device-dpi" />
    <?php endif; ?>


    <?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) { ?>
    <?php if(_option('favicon')): ?>
    	<!-- Favicons -->
        <link href="<?php echo esc_url(_option('favicon')); ?>" rel="shortcut icon" />
        <?php endif; ?>
	<?php }?>


    <?php get_template_part( 'functions/googlefonts'); ?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <?php wp_head(); ?>


</head>

<?php $isrtl = ''; if(is_rtl() || _option('rtl_support')){$isrtl = 'isrtl';}; ?>

<body <?php  body_class($isrtl); ?>>


	<?php
	////////////////////////////////////////////
	//get_template_part( 'customizer/customizer');
	///////////////////////////////////////////
	?>

	<?php $page_style = _option('page_style','full');?>
    <?php $frame = _option('frame','noframe');?>
	<div id="home" <?php if($frame!='noframe' && $page_style =='boxed'){echo ' class="'.$frame.'"';};?>>
	<div id="layout" class="<?php echo $page_style; ?><?php if(_option('dark_style',0)==1){echo ' dark';};?>">

        <?php get_template_part('functions/header/header',_option('header_style','v1')); ?>