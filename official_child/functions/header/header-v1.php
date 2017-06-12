<?php
// Header Version 1
?>
<?php $is_ovrlay = rwmb_meta('official_fixed_header'); ?>

<header id="header" class="header_v1 <?php global $woo_header_overlay; if($is_ovrlay || $woo_header_overlay){echo ' overlay-header';};?>">


    <div class="top_header">
        <div class="slogan"><?php echo _option('slogan') ?></div>
        <ul class="top_nav">
            <?php if (_option('search')): ?>
            <li>
                <form action="<?php echo home_url(); ?>" class="search_form">
                    <i class="fa fa-search"></i><input name="s" type="text" placeholder="<?php echo _e('search in tahara','official')  ?>">
                </form>
            </li>
            <?php endif; ?>
            <li><a href="<?php echo _option('help_page_link') ?>"><?php echo _e('Help','official')  ?></a></li>
            <li><a href="<?php echo wp_login_url(); ?> "><?php echo _e('Login','official')  ?></a></li>
        </ul>
    </div>

    <div class="main_navbar <?php if (_option('is_sticky')) {echo 'my_sticky'; }?>">
        <div class="left">
            <a href="<?php echo home_url(); ?>"><img src="<?php echo _option('logo');?>" alt="<?php bloginfo('name'); ?>" /></a>
            <?php wp_nav_menu( array( 'theme_location' => 'main-menu-of-home', 'container' => false, 'depth'=>1 ) ); ?>
        </div>

        <div class="right">
            <span class="small"><?php echo _e('24/7 Phone support','official')  ?></span><br>
            <span class="big"><i class="fa fa-phone"></i><?php echo _option('phone_no') ?></span>
        </div>
    </div>

</header><!-- end header -->