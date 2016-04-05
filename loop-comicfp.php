<?php 
    $frontPage = is_front_page();
    $oldQuery = $wp_query;

    if( isset($num_comics) || $num_comics <= 0 ) {
        $num_comics = 1;
    }
    
    $wp_query = new WP_Query( array(
            'post_type' => 'jetpack-comic',
            'posts_per_page' => $num_comics,
            'orderby'=> 'date',
            'paged'=>$paged
            ) );

    // The Loop!
    if( have_posts() ) {
        echo '<div class="col-xs-12 comic-container">';
        while( have_posts() ) { 
            the_post();
            
            get_template_part('post','comic');

        }
        include(locate_template('pagination-comic.php'));
        echo '</div>';
    }

    $wp_query = $oldQuery;
?>
