<?php get_header(); //sets up a container and row ?>

<div class='col-xs-12 col-xs-push-0 <?php echo (is_active_sidebar( 'sidebar-main' ))?'col-md-9 ':'col-md-12'; ?> col-md-push-0 main-content' >

    <div class="search-header">
        <h1> There doesn't seem to be anything here. </h1>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ropacusia_404.png" alt="Nothing found :("/>
    </div>
    <div class="search-page-search-form">
        <?php
            echo get_search_form();
        ?>
    </div>
    
</div>

<?php get_template_part('sidebar', 'down'); ?>


<?php get_footer(); //closes a container and a row //make sure no white space after tag ?>