<div class='col-xs-12 col-xs-push-0 <?php echo (is_active_sidebar( 'sidebar-main' ))?'col-md-9 col-md-pull-3':'col-md-12'; ?> col-md-push-0 main-content' >
    <?php
        $oldQuery = $wp_query;

        $wp_query = new WP_Query( array(
                'post_type' => 'post',
                'posts_per_page' => 3,
                'orderby'=> 'date',
                'paged'=>$paged
                ) );
    
        if( have_posts() ): 
            while( have_posts()): //start the loop
                the_post();
                get_template_part('post', 'content');
            endwhile; 
    
        endif; //end the loop
    
    $wp_query = $oldQuery;
    
    ?>
</div>