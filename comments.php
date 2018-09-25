<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cayitey
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area disqus--area">
	
	<div class="comments-block">
		<button id="show-comments" class="load--disqus" onclick="disqus();return false;">View/Write Comments</button>
	</div>
	
	<div id="disqus_thread"></div>
	<?php
	if ( have_comments() ) : ?>


		<?php if ( ! comments_open() ) : ?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'claude-ayitey' ); ?></p>
		<?php
		endif;

	endif;

	// comment_form();
	?>

</div><!-- #comments -->
