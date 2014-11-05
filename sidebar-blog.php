<?php
/**
 * The Blog Sidebar
 *
 * @package WordPress
 * @subpackage syr-ccdc
 */

if ( ! is_active_sidebar( 'sidebar-blog' ) ) {
	return;
}
?>
<div id="blog-sidebar" class="blog-sidebar widget-area col-md-4" role="complementary">
	<?php dynamic_sidebar( 'sidebar-blog' ); ?>
</div><!-- #blog-sidebar -->
