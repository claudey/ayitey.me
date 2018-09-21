<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cayitey
 */

?>

<a href="<?php the_permalink(); ?>" class="projects--list__item">
    <img class="projects--list__icon" src=<?php the_post_thumbnail(); ?>
    <h3 class="projects--list__title"><?php the_title(); ?></h3>
</a>