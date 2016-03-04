<?php
	/*-----------------------------------------------------------------------------------*/
	/* This file will be referenced every time a template/page loads on your Wordpress site
	/* This is the place to define custom fxns and specialty code
	/*-----------------------------------------------------------------------------------*/

// Define the version so we can easily replace it throughout the theme
define( 'MASTER_VERSION', 1.0 );


/*-----------------------------------------------------------------------------------*/
/* Add Rss feed support to Head section
/*-----------------------------------------------------------------------------------*/
add_theme_support( 'automatic-feed-links' );



/*-----------------------------------------------------------------------------------*/
/* Register main menu for Wordpress use
/*-----------------------------------------------------------------------------------*/
register_nav_menus( 
	array(
		'primary'	=>	__( 'Primary Menu', 'naked' ), 
	)
);



/*-----------------------------------------------------------------------------------*/
/* Enqueue Styles and Scripts
/*-----------------------------------------------------------------------------------*/

function add_other_scripts()  { 

	wp_enqueue_style('style.css', get_stylesheet_directory_uri() . '/style.css');
	
}
add_action( 'wp_enqueue_scripts', 'add_other_scripts' ); 


/*ADD BOOTSTRAP 3*/ 
function add_bootstrap() { 
    
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/lib/bootstrap/css/bootstrap.min.css' ); 
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/lib/bootstrap/js/bootstrap.min.js', array('jquery'), '3.3.6', true ); 
    
} 
add_action( 'wp_enqueue_scripts', 'add_bootstrap' ); 



/*ADD JQUERY*/ 
function add_jquery() { 
    
    wp_deregister_script( 'jquery' ); 
    wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'); 
    wp_enqueue_script( 'jquery' ); 
    
} 
add_action( 'wp_enqueue_scripts', 'add_jquery', 11 ); 







/*Disable Emoji*/

remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );
