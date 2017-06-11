<?php

	global $thdglkr_menu;

	if ($thdglkr_menu=='onepage'){
		$menu_name = 'One Page';
		$menu_class='sf-menu OneNav';
	}else{
		$menu_name = 'Main Menu';
		$thdglkr_menu = 'primary';
		$menu_class='sf-menu';
	}

	wp_nav_menu(
		array(
			'theme_location' => $thdglkr_menu,
			'menu' => $menu_name,
			'container'       	=> 'nav',
			'container_class'  => 'main' ,
			'menu_class'	   => $menu_class,
			'walker' 		   => new My_Walker()

		)
	);

?>