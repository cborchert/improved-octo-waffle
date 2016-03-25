        
                </div> <!-- /.row -->
            </div> <!-- /.container -->
            <?php if ( is_active_sidebar( 'sidebar-foot' ) ) : ?>
            <div class="col-xs-10 sidebar-foot-container">
                <ul id="sidebar-foot">
                    <?php dynamic_sidebar( 'sidebar-foot' ); ?>
                </ul>
            </div>
            <?php endif; ?>
        </div><!-- /#the_page -->
        <?php wp_footer(); ?>
    </body>
</html>