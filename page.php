<?php get_header(); //sets up a container and row ?>

<div class='col-xs-12 col-xs-push-0 <?php echo (is_active_sidebar( 'sidebar-main' ))?'col-md-9 ':'col-md-12'; ?> col-md-push-0 main-content' >
    <?php
        if( have_posts() ): 
            while( have_posts()): //start the loop
                the_post();
                get_template_part('page', 'content');
            endwhile; 
    
        endif; //end the loop
    ?>
</div>

<?php get_template_part('sidebar', 'down'); ?>


<?php get_footer(); //closes a container and a row //make sure no white space after tag ?>