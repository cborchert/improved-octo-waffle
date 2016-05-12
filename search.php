<?php get_header(); //sets up a container and row ?>

<div class='col-xs-12 col-xs-push-0 <?php echo (is_active_sidebar( 'sidebar-main' ))?'col-md-9 ':'col-md-12'; ?> col-md-push-0 main-content' >
    
    <div id="main-content-container">
    
    
        <?php
            if( have_posts() ): 
        ?>
            <div class="search-header">
                <h1> Search Results for:</h1>
                <h2> &ldquo; <?php echo get_search_query(); ?> &rdquo; </h2>
            </div>
        <?php
                while( have_posts()): //start the loop
                    the_post();
                    get_template_part('post', 'content');
                endwhile; 
        ?>
            <div class="ajax-nav text-center">

                    <?php 
                        if( get_next_posts_link() ) { 

                            echo '<a href="#" class="js-ajax-load-more button btn">Load More Posts</a>';

                        } else {

                            echo 'No more results to load';
                        }

                    ?>


                    <div class="content-nav nav hidden">

                        <div class="nav-previous alignleft"><?php next_posts_link( 'Older posts' ); ?></div>
                        <div class="nav-next alignright"><?php previous_posts_link( 'Newer posts' ); ?></div>

                    </div>

                </div>
        <?php

            else:

        ?>
            <div class="search-header">
                <h1> Nothing found for:</h1>
                <h2> &ldquo; <?php echo get_search_query(); ?> &rdquo; </h2>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ropacusia_search.png" alt="Nothing found :("/>
            </div>
            <div class="search-page-search-form">
                <?php
                    echo get_search_form();
                ?>
            </div>
        <?php
            endif; //end the loop
        ?>
    
    </div>
    
</div>

<?php get_template_part('sidebar', 'down'); ?>


<?php get_footer(); //closes a container and a row //make sure no white space after tag ?>