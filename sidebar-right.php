<?php if ( is_active_sidebar( 'sidebar-main' ) ) : ?>
<div class="col-xs-12 col-md-3 col-md-push-9 sidebar-main-container">
    <ul id="sidebar-main" class="sidebar">
        <?php dynamic_sidebar( 'sidebar-main' ); ?>
    </ul>
</div>
<?php endif; ?>