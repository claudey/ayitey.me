<?php
/**
 * The template for displaying all single projects
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package cayitey
 */

get_header(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<section>
			<?php while ( have_posts() ) : the_post(); ?>
				<header class="entry-header section--header" >
				<?php the_title( '<h1 class="section--title section--title__dblue">', '</h1>' ); ?>
				</header>
				<div class="section--body">

					<div class="entry-content">
					<?php
						the_content();

						wp_link_pages( array(
							'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'claude-ayitey' ),
							'after'  => '</div>',
						) );
					?>
					</div><!-- .entry-content -->
					
					<?php 
				// the_post_navigation();
				
				// if ( comments_open() || get_comments_number() ) :
					comments_template();
				// endif; ?>
				
			</div><!-- .section--body -->
			<?php endwhile; ?>
		</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer(); ?>
</article><!-- #post-<?php the_ID(); ?> -->