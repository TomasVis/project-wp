<?php

// Įjungiame post thumbnail

add_theme_support( 'post-thumbnails' );

// Apsibrėžiame stiliaus failus ir skriptus

if( !defined('THEME_FOLDER') ) {
	define('THEME_FOLDER', get_bloginfo('template_url'));
}

function theme_scripts(){

    if ( !is_admin() ) {


/*		<script src="assets/scripts/jquery.js"></script>
		<script src="assets/scripts/owl.carousel.min.js"></script>
		<script src="assets/scripts/custom.js"></script>*/



    	//wp_register_script(handle, path, dependency, version, load_in_footer);

        wp_deregister_script('jquery');
		wp_register_script('jquery', THEME_FOLDER . '/assets/scripts/jquery.js', false, false, true);

    	//Registration
        wp_register_script('owl-carousel', THEME_FOLDER . '/assets/scripts/owl.carousel.min.js', array('jquery'), false, true);
        wp_register_script('custom', THEME_FOLDER . '/assets/scripts/custom.js', array('owl-carousel'), false, true);

        //Loading
        wp_enqueue_script('jquery');
        wp_enqueue_script('carousel');
        wp_enqueue_script('custom');
    }
}
add_action('wp_enqueue_scripts', 'theme_scripts');


function theme_stylesheets(){

	if( defined("THEME_FOLDER") ) {
		//wp_register_style(handle, path, dependency, version, devices);	

		//Registration



/*		
		<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700|Poppins:300" rel="stylesheet">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
		<link href="assets/css/owl.carousel.min.css" rel="stylesheet">
		<link href="assets/css/owl.theme.default.min.css" rel="stylesheet">
		<link href="assets/css/style.css" rel="stylesheet">*/

		wp_register_style('poppins', "https://fonts.googleapis.com/css?family=Playfair+Display:400,700|Poppins:300", array(), false, 'all');
		wp_register_style('font-awesome', "https://use.fontawesome.com/releases/v5.8.1/css/all.css", array('poppins'), false, 'all');

		wp_register_style('owl-carousel', THEME_FOLDER . '/assets/css/owl.carousel.min.css', array('font-awesome'), false, 'all');
		wp_register_style('owl-theme', THEME_FOLDER . '/assets/css/owl.theme.default.min.css', array('owl-carousel'), false, 'all');
		wp_register_style('main-css', THEME_FOLDER . '/assets/css/style.css', array('owl-theme'), false, 'all');

		//Loading
		wp_enqueue_style('poppins');
		wp_enqueue_style('font-awesome');
		wp_enqueue_style('owl-carousel');
		wp_enqueue_style('owl-theme');
		wp_enqueue_style('main-css');
	}
}
add_action('wp_enqueue_scripts', 'theme_stylesheets');

// Apibrėžiame navigacijas

function register_theme_menus() {
   
	register_nav_menus(array( 
        'primary-navigation' => __( 'Primary Navigation' ),
        'footer-navigation' => __('Footer Navigation') 
    ));
}

add_action( 'init', 'register_theme_menus' );

// Apibrėžiame widgets juostas

#$sidebars = array( 'Footer Widgets', 'Blog Widgets' );

if( isset($sidebars) && !empty($sidebars) ) {

	foreach( $sidebars as $sidebar ) {

		if( empty($sidebar) ) continue;

		$id = sanitize_title($sidebar);

		register_sidebar(array(
			'name' => $sidebar,
			'id' => $id,
			'description' => $sidebar,
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		));
	}
}

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	
}

function dump($data){
	echo "<prev>";
	print_r($data);
	echo "</prev>";
}

add_image_size('logo',16,44,false);
add_image_size('board',227,481,false);
add_image_size('board-background',227,290,false);
add_image_size('main-photo',961,542,false);
add_image_size('side-photo',800,440,false);
add_image_size('photo-for-video',710,550,false);



