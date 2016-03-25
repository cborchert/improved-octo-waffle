        
                </div> <!-- /.row -->
            </div> <!-- /.container -->
            <footer class="col-xs-12">
                <div class="row">
                    <?php if ( is_active_sidebar( 'sidebar-foot' ) ) : ?>
                        <div class="col-xs-12 col-sm-6 col-md-9 sidebar-foot-container">
                            <ul id="sidebar-foot" class="sidebar">
                                <?php dynamic_sidebar( 'sidebar-foot' ); ?>
                            </ul>
                        </div>
                    <?php endif; ?>
                    <div class="col-xs-12 col-sm-6 col-md-3 copyright">
                       <span>Copyright &copy; <?php echo date('Y');?> Q2Q Comics</span>
                    </div>
                </div>
            </footer>
        </div><!-- /#the_page -->
        <?php wp_footer(); ?>
    </body>
</html>