<?php get_header(); //sets up a container and row ?>
<div class='col-xs-10 col-xs-push-1 col-sm-12 col-sm-push-0 main-content' >
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
    
<?php if ( is_active_sidebar( 'sidebar-main' ) ) : ?>
<div class="col-xs-10 sidebar-main-container">
    <ul id="sidebar-main">
        <?php dynamic_sidebar( 'sidebar-main' ); ?>
    </ul>
</div>
<?php endif; ?>


<?php get_footer(); //closes a container and a row //make sure no white space after tag ?>