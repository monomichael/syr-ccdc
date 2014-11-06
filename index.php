<?php
/**
* This is the main template file
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
					<span class="post-meta-infos">
						<time class="date-container post-meta-info" itemprop="datePublished">
							<?php the_date(); ?>
						</time>
						<span class="text-sep">/</span>
						<span class="comment-container post-meta-info">
							<a title="Comment on <?php the_title(); ?>" class="comments-link" href="<?php comments_link(); ?>"><?php comments_number(); ?></a>
						</span>
						<span class="text-sep">/</span>
						<span class="category-container post-meta-info">
							in <?php the_category(' '); ?>
						</span>
						<span class="text-sep">/</span>
						<span class="author-container post-meta-info">
							by <?php the_author_link(); ?>
						</span>
					</span>

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
