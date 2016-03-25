<?php get_header(); //sets up a container and row ?>

<?php if ( is_active_sidebar( 'sidebar-main' ) ) : ?>
<div class="col-xs-12 col-md-3 col-md-push-9 sidebar-main-container">
    <ul id="sidebar-main" class="sidebar">
        <?php dynamic_sidebar( 'sidebar-main' ); ?>
    </ul>
</div>
<?php endif; ?>


<div class='col-xs-12 col-xs-push-0 <?php echo (is_active_sidebar( 'sidebar-main' ))?'col-md-9 col-md-pull-3':'col-md-12'; ?> col-md-push-0 main-content' >
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