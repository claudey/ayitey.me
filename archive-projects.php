<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cayitey
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<section>

			<?php

				the_archive_description( '<h1 class="section--title section--title__dblue">', '</h1>' ); ?>
				
				<div class="section--body">
				
				<?php
				while ( have_posts() ) : the_post();
				
					get_template_part( 'template-parts/content', 'projects' );
					
				endwhile;
			
				// the_posts_navigation();
			
				?>

			</div>
		</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
