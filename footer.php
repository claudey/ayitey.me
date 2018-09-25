<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cayitey
 */

?>

	</div><!-- #content -->
	<footer>
		<span class="copy-left">Copyleft, <?php echo date( 'Y' ); ?> <span class="sep"> | </span> Claude Ayitey</span>
		<span class="social--links">
			<a class="social--icon" href="https://twitter.com/mrayitey"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/twitter.svg" alt=""></a>
			<a class="social--icon" href="https://dribbble.com/claude"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/dribbble.svg" alt=""></a>
			<a class="social--icon" href="https://github.com/claudey"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/github.svg" alt=""></a>
		</span>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
