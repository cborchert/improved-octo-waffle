    <article <?php post_class('clearfix');?>>
        <?php the_title('<h2 class="entry-title">', '</h2>'); ?>
        <div class="entry-meta h2">
            <span class="entry-edit"><?php edit_post_link();?></span>
        </div>
        <div class="clearfix the-content">
            <?php the_content(); ?>
        </div>
    </article>