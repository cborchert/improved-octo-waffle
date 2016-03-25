        
                </div> <!-- /.row -->
            </div> <!-- /.container -->
            <footer class="col-xs-12">
                <div class="row">
                    <?php if ( is_active_sidebar( 'sidebar-foot' ) ) : ?>
                        <div class="col-xs-12 col-sm-9 sidebar-foot-container">
                            <ul id="sidebar-foot">
                                <?php dynamic_sidebar( 'sidebar-foot' ); ?>
                            </ul>
                        </div>
                    <?php endif; ?>
                    <div class="col-xs-12 col-sm-3 copyright text-right">
                        <p>Copyright &copy; <?php echo date('Y');?> Q2Q Comics</p>
                    </div>
                </div>
            </footer>
        </div><!-- /#the_page -->
        <?php wp_footer(); ?>
    </body>
</html>