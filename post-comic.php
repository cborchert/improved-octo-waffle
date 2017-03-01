<div class="the-comic clearfix">
    <div class="support-badge">
        <a href="https://www.patreon.com/q2qcomics" target="_blank">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/patreon-badge-<?php echo rand(1, 3); ?>.png" alt="Support Q2Q on Patreon" title="Support Q2Q on Patreon" />
        </a>
    </div>
    <a href="<?php echo get_the_permalink(); ?>"><?php the_title('<h2 class="entry-title">', '</h2>'); ?></a>
    <div class="entry-meta h2">
        <span class="entry-date"><?php the_date(); ?></span>
        <span class="entry-edit"><?php edit_post_link();?></span>
    </div>
    <div class="the-comic-image the-content clearfix"><?php the_content(); ?></div>
</div>