<?php
/**
* This is the main template file
*
* @package WordPress
* @subpackage syr-ccdc
*/

get_header();
?>

<div id="main-content" class="main-content">

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<h1><?php the_title(); ?></h1>	
				<?php the_content(); ?>
			<?php endwhile; else: ?>
				<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
			<?php endif; ?>
		</div><!-- #content -->
	</div><!-- #primary -->
			
	<?php get_sidebar( 'content' ); ?>

</div><!-- #main-content -->

<?php
get_footer();
