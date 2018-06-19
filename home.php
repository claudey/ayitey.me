<?php
/**
 *
 * @package DevCongress eXchange
 */

get_header(); ?>

	<div class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
                $include = get_pages('include=2');
                $bio_content = apply_filters('the_content',$include[0]->post_content);
                $bio_title = apply_filters('the_meta',$include[0]->post_title);

                if (has_post_thumbnail( $include[0]->ID ) ):
					$image = wp_get_attachment_image_src( get_post_thumbnail_id( $include[0]->ID ), 'single-post-thumbnail' );
				endif;
            ?>



            <section class="home--intro">
                <h2 class="home--intro__heading">Claude Ayitey</h2>
                <span class="home--intro__content">
                    <?php echo $bio_content; ?>
                </span>
            </section>

            <section>projects</section>

            <section>posts</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
