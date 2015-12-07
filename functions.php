<?php 

//Include the core style
function sibeau_enqueue_styles() {
    wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css' ); 
	wp_enqueue_style( 'core-style', get_template_directory_uri() . '/sass/style.css' ); 
}
add_action( 'wp_enqueue_scripts', 'sibeau_enqueue_styles' );

//Include fonts
//Make sure to define these in vars.scss
function sibeau_enqueue_fonts() {
    //text
    wp_enqueue_style( 'google-opensans', 'https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,700,700italic' );
    //headings
    wp_enqueue_style( 'google-montserrat', 'https://fonts.googleapis.com/css?family=Montserrat:700' );
    //blog-title
    wp_enqueue_style( 'google-lobster', 'https://fonts.googleapis.com/css?family=Lobster' ); 
}
add_action( 'wp_enqueue_scripts', 'sibeau_enqueue_fonts' );

//Include fontawesome
function sibeau_enqueue_fontawesome() {
    wp_enqueue_style( 'fontawesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css' );  
}
add_action( 'wp_enqueue_scripts', 'sibeau_enqueue_fontawesome' );

//Append custom scripts to the footer
function theme_name_scripts() {
	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery.min.js', array(), false, true );
	wp_enqueue_script( 'sibeau_scripts', get_template_directory_uri() . '/js/sibeau.js', array('jquery'), false, true );
}
add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );

//Add menus
function register_sibeau_menus() {
  register_nav_menus(
    array(
      'primary-menu' => __( 'Primary Menu' ),
      'secondary-menu' => __( 'Secondary Menu' )
    )
  );
}
add_action( 'init', 'register_sibeau_menus' );

//Keep the closing tag, no white space afterwards!
?>