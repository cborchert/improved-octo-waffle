<div class="the-comic clearfix">
    <a href="<?php echo get_the_permalink(); ?>"><?php the_title('<h2 class="entry-title">', '</h2>'); ?></a>
    <div class="entry-meta h2">
        <span class="entry-date"><?php the_date(); ?></span>
        <span class="entry-edit"><?php edit_post_link();?></span>
    </div>
    <div class="the-comic-image the-content clearfix"><?php the_content(); ?></div>
</div>