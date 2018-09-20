<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cayitey
 */

?>

<div class="post--snippet">
	<img class="post--snippet__thumbnail" src=<?php the_post_thumbnail('full'); ?>
	<p class="post--snippet__date"><? echo get_the_date('Y-m-d'); ?></p>
	<a href="<?php the_permalink(); ?>" class="post--snippet__title"><?php the_title(); ?></a>
</div>
