<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cayitey
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<section>	
		<header class="entry-header">
			<?php the_title( '<h1 class="section--title section--title__dblue">', '</h1>' ); ?>
		</header><!-- .entry-header -->

		<div class="section--body">
			<?php claude_ayitey_post_thumbnail(); ?>

			<div class="entry-content">
				<?php
					the_content();

					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'claude-ayitey' ),
						'after'  => '</div>',
					) );
				?>
			</div><!-- .entry-content -->
		</div>
	</section>
</article><!-- #post-<?php the_ID(); ?> -->
