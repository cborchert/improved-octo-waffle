<!DOCTYPE html>
<?php // graciously borrowed from bones ?>
<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // force Internet Explorer to use the latest rendering engine available ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php wp_title(''); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
<!--		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-touch-icon.png">-->
        <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
        
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
            <meta name="theme-color" content="#121212">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>
        <style type="text/css">
        </style>

	</head>

	<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">
        <div class='nav main-nav' id="main-menu">
            <nav role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
                <div class="close-primary-nav text-right"> 
                    <a href="#" class="menu-toggle" onclick="closeMainMenu(event);"><i class="fa fa-close"></i> Close</a>
                </div>
                <?php // graciously borrowed from bones
                    $primary_menu = wp_nav_menu(array(
                         'container' => false,                           // remove nav container
                         'container_class' => 'menu',                 // class of container (should you choose to use it)
                         'menu' => __( 'Primary Menu', 'sibeautheme' ),  // nav name
                         'menu_class' => 'nav primary-nav',               // adding custom nav class
                         'theme_location' => 'primary-menu',                 // where it's located in the theme
                         'before' => '',                                 // before the menu
                           'after' => '',                                  // after the menu
                           'link_before' => '',                            // before each link
                           'link_after' => '',                             // after each link
                           'depth' => 0,                                   // limit the depth of the nav
                         'fallback_cb' => '',                             // fallback function (if there is one)
                         'echo' => false                                  //Return this menu
                    )); 
                    if($primary_menu) {
                        echo $primary_menu;    
                    }
                ?>
            </nav>
        </div>
        <div id="the_page">
            <header>
                <!-- first header layer: menu toggle, site title, search -->
                <div class='header-top'>
                    <!-- This is reserved for the menu toggle-->
                    <div class='header-menu-toggle'>
                       <?php if($primary_menu): ?>
                        <a href="#" class="menu-toggle" onclick="openMainMenu(event);"><i class="fa fa-2x fa-bars"></i> Menu</a>
                       <?php endif; ?>
                    </div>

                    <div class='header-promo-space'>
                        Leaderboard Ad
                    </div>
                    <!-- This is reserved for the site title, logo, description-->
                    <div class='header-title'>
                        <?php 
                            $blog_title =  get_bloginfo('name');
                            $blog_desc =  get_bloginfo('description');
                            $blog_url =  get_bloginfo('url');
                        ?>
                        <div class='blog-title'>
                            <a href="<?php echo $blog_url; ?>" alt="Home">
<!--                                <?php// echo (file_exists ( "img/logo.png" ))?"<img src='img/logo.png' alt='".$blog_url."'>": $blog_title; ?>-->
                                <img src='<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png' alt='<?php echo $blog_url; ?>' class='logo'>
                                <img src='<?php echo get_stylesheet_directory_uri(); ?>/img/logo_stacked.png' alt='<?php echo $blog_url; ?>' class='logo_stacked'>
                            </a>
                        </div>
                        <div class='blog-description'><a href="<?php echo $blog_url; ?>" alt="Home"><?php echo $blog_desc ?></a></div>
                    </div>
        

                    <!-- This is reserved for the header search-->
                    <div class='header-search'>
                    </div>
                </div>    

                <!-- second header layer: optional secondary menu -->
                <div class='header-bottom'>
                    <nav role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
                        <?php // graciously borrowed from bones
                            wp_nav_menu(array(
                                 'container' => false,                           // remove nav container
                                 'container_class' => 'menu',                 // class of container (should you choose to use it)
                                 'menu' => __( 'Secondary Menu', 'sibeautheme' ),  // nav name
//                                 'menu_class' => 'nav secondary-nav',               // adding custom nav class
//                                 'theme_location' => 'secondary-menu',                 // where it's located in the theme
                                 'menu_class' => 'nav secondary-nav',               // adding custom nav class
                                 'theme_location' => 'primary-menu',                 // where it's located in the theme
                                 'before' => '',                                 // before the menu
                                   'after' => '',                                  // after the menu
                                   'link_before' => '',                            // before each link
                                   'link_after' => '',                             // after each link
                                   'depth' => 1,                                   // limit the depth of the nav
                                 'fallback_cb' => ''                             // fallback function (if there is one)
                        )); ?>
                    </nav>
                </div>
            </header>
            <div class="container">
                <div class="row">