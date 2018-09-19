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
	<div class="post--snippet">
		<img class="post--snippet__thumbnail" src=<?php the_post_thumbnail('full'); ?>
		<p class="post--snippet_date"><? echo get_the_date('Y-m-d'); ?></p>
		<a href="<?php the_permalink(); ?>" class="post--snippet_title"><?php the_title(); ?></a>
	</div>

	<div class="entry-content">
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'claude-ayitey' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
