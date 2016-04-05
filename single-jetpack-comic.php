<?php get_header(); //sets up a container and row ?>

<?php get_template_part('loop', 'comic'); ?>

<?php get_template_part('sidebar', 'right'); ?>

<?php get_template_part('loop', 'content'); ?>

<?php get_footer(); //closes a container and a row //make sure no white space after tag ?>