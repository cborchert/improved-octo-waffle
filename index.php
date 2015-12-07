<?php get_header(); //sets up a container and row ?>
<div class='col-sm-12 col-md-8 col-md-push-2 col-lg-6 col-lg-push-3'>
    <?php 
        if( have_posts() ): while( have_posts()): //start the loop
            the_post();
    ?>
    <article <?php post_class();?>>
        <?php the_title('<h2 class="entry-title">', '</h2>'); ?>
        <div>
            <?php the_content(); ?>
        </div>
    </article>
    <?php
        endwhile; endif; //end the loop
    ?>
</div>
<?php get_footer(); //closes a container and a row //make sure no white space after tag ?>