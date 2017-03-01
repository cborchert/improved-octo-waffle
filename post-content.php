    <div class="article-closed article-container">
        <article <?php post_class('clearfix');?>>
            <?php the_title('<a href="#" class="js-open-article"><h2 class="entry-title">', '</h2></a>'); ?>
            <div class="entry-meta h2">
                <span class="entry-date"><?php the_date(); ?></span>
                <span class="entry-edit"><?php edit_post_link();?></span>
            </div>
            <div class="clearfix the-content">
                <?php the_content(); ?>
          </div>
        </article>
        <div class="article-white-shadow">
           <a href="#" class="article-open-button js-open-article">More</a>
        </div>
    </div>
