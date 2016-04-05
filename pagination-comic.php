<h1><?php echo $fp; ?></h1>

<?php

    // Querying 2 extra times just to get links... fuck that seems wrong
    
    $prevComicLink = get_previous_post_link( '%link', '← Previous', TRUE );
    $nextComicLink = get_next_post_link( '%link', 'Next →', TRUE );
    $currentComic = get_queried_object();
    $currentComicLink = get_permalink($currentComic);
    

    $firstComic = new WP_Query( array(
            'post_type' => 'jetpack-comic',
            'posts_per_page' => 1,
            'orderby'=> 'date',
            'order' => 'ASC'
            ) );
    $firstComicLink = "";
    if($firstComic->have_posts()):while($firstComic->have_posts()):
        $firstComic->the_post();
        $firstComicLink = get_post_permalink();
    endwhile; endif;

    $lastComic = new WP_Query( array(
            'post_type' => 'jetpack-comic',
            'posts_per_page' => 1,
            'orderby'=> 'date',
            'order' => 'DESC'
            ) );
    $lastComicLink = "";
    if($lastComic->have_posts()):while($lastComic->have_posts()):
        $lastComic->the_post();
        $lastComicLink = get_post_permalink();
    endwhile; endif;

    echo '<div class="the-comic-nav">';
       
        if( $firstComicLink != $currentComicLink && $firstComicLink != '' ) {
            echo '<a href="'.$firstComicLink.'"> &laquo; First </a>';
        }
        
        echo $prevComicLink;
        echo $nextComicLink;
        
        if( !($frontPage) && $lastComicLink != $currentComicLink ){
            echo '<a href="'.$lastComicLink.'"> Latest &raquo; </a>';
        }

    echo '</div>';
    
?>