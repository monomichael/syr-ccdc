<?php
/**
 * Default Footer
 *
 * @package WordPress
 * @subpackage syr-ccdc
 *
 */
?>
</div>
</div>

<div id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3"> 
            <?php if ( is_active_sidebar( 'sidebar-footer-1' ) ) : ?> 
            <?php dynamic_sidebar( 'sidebar-footer-1' ); ?> 
            <?php endif; ?> 
            </div> 

            <div class="col-md-3"> 
            <?php if ( is_active_sidebar( 'sidebar-footer-2' ) ) : ?> 
            <?php dynamic_sidebar( 'sidebar-footer-2' ); ?> 
            <?php endif; ?> 
            </div> 

            <div class="col-md-3"> 
            <?php if ( is_active_sidebar( 'sidebar-footer-3' ) ) : ?> 
            <?php dynamic_sidebar( 'sidebar-footer-3' ); ?> 
            <?php endif; ?> 
            </div>

            <div class="col-md-3"> 
            <?php if ( is_active_sidebar( 'sidebar-footer-4' ) ) : ?> 
            <?php dynamic_sidebar( 'sidebar-footer-4' ); ?> 
            <?php endif; ?> 
            </div>
        </div>
    </div>
</div>

<footer>
        <div class="container">
                © Syracuse University CCDC Team 2014
        </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
