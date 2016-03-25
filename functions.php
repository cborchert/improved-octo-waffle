<?php 

//Include the core style
function q2q_enqueue_styles() {
    wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css' ); 
	wp_enqueue_style( 'core-style', get_template_directory_uri() . '/sass/style.css' ); 
}
add_action( 'wp_enqueue_scripts', 'q2q_enqueue_styles' );

//Include fonts
//Make sure to define these in vars.scss
function q2q_enqueue_fonts() {
    //text
    wp_enqueue_style( 'google-opensans', 'https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,700,700italic' );
    //headings
    wp_enqueue_style( 'google-montserrat', 'https://fonts.googleapis.com/css?family=Montserrat:700' );
    //blog-title
    wp_enqueue_style( 'google-lobster', 'https://fonts.googleapis.com/css?family=Lobster' ); 
}
add_action( 'wp_enqueue_scripts', 'q2q_enqueue_fonts' );

//Include fontawesome
function q2q_enqueue_fontawesome() {
    wp_enqueue_style( 'fontawesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css' );  
}
add_action( 'wp_enqueue_scripts', 'q2q_enqueue_fontawesome' );

//Append custom scripts to the footer
function theme_name_scripts() {
	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery.min.js', array(), false, true );
	wp_enqueue_script( 'q2q_scripts', get_template_directory_uri() . '/js/q2q.js', array('jquery'), false, true );
}
add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );

//Add menus
function register_q2q_menus() {
  register_nav_menus(
    array(
      'primary-menu' => __( 'Primary Menu' ),
      'secondary-menu' => __( 'Secondary Menu' )
    )
  );
}
add_action( 'init', 'register_q2q_menus' );

//Add sidebars
function q2q_widgets_init() {
    register_sidebar( array(
        'name' => __( 'Main Sidebar', 'q2q' ),
        'id' => 'sidebar-main',
        'description' => __( 'Widgets in this area will be shown on all posts and pages, at the side, or directly under the content. A great place for announcemets and ads!', 'q2q' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>',
    ) );
    
    register_sidebar( array(
        'name' => __( 'Footer Sidebar Area', 'q2q' ),
        'id' => 'sidebar-foot',
        'description' => __( 'Widgets in this area will be shown on all posts and pages, at the bottom.', 'q2q' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'q2q_widgets_init' );


//Keep the closing tag, no white space afterwards!
?>