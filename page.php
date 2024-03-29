<?php
/**
* This is the page template file
*
* @package WordPress
* @subpackage syr-ccdc
*/

get_header();
?>

<div class="row">
	<div id="primary" class="content-area col-md-8">
		<div id="content" class="site-content" role="main">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<article>
					<h1><?php the_title(); ?></h1>

					<div class="entry-content" itemprop="text">
						<?php the_content(); ?>
					</div>
				</article>
			<?php endwhile; else: ?>
				<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
			<?php endif; ?>
		</div><!-- #content -->
	</div><!-- #primary -->
			
	<?php get_sidebar( 'blog' ); ?>

	<div class="clearfix"></div>
</div>

<?php
get_footer();
