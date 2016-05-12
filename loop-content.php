<div class='col-xs-12 col-xs-push-0 <?php echo (is_active_sidebar( 'sidebar-main' ))?'col-md-9 col-md-pull-3':'col-md-12'; ?> col-md-push-0 main-content' >
    
    <div id="main-content-container">
        
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
        <div class="ajax-nav text-center">

            <?php 
                if( get_next_posts_link() ) { 
                
                    echo '<a href="#" class="js-ajax-load-more button btn">Load More Posts</a>';
                
                } else {
            
                    echo 'No more posts to load';
                }
            
            ?>
            

            <div class="content-nav nav hidden">

                <div class="nav-previous alignleft"><?php next_posts_link( 'Older posts' ); ?></div>
                <div class="nav-next alignright"><?php previous_posts_link( 'Newer posts' ); ?></div>

            </div>

        </div>
        
    </div>
    
</div>