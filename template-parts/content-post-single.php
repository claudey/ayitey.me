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
	<?php the_title( '<h1 class="section--title section--title__wine">', '</h1>' ); ?>
	
	<div class="section--body">
		<div class="entry-meta">
            <?php claude_ayitey_posted_on(); ?>
		</div><!-- .entry-meta -->

		<div class="entry-content">
			<?php
				the_content();

				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'claude-ayitey' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .entry-content -->
