<div class="col-xs-12 comic-container">
    <?php 
        if( have_posts() ): 
            while( have_posts()): //start the loop
                the_post();
//                get_template_part('post', 'content');
                get_template_part('post', 'comic');
            endwhile; 
            get_template_part('pagination', 'comic');
        endif; //end the loop
    ?>
</div>