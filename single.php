<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package cayitey
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<section>
			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'post-single' );

				// the_post_navigation();

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>
			</div>
</article><!-- #post-<?php the_ID(); ?> -->

		</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
