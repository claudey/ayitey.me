<?php
/**
 * cayitey functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package cayitey
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
            
            <!-- FIRST SECTION - Name, Description -->
            <section class="home--intro">
                <h2 class="header--title home--intro__heading">Claude Ayitey</h2>
                <span class="home--intro__content">
                    <?php echo $bio_content; ?>
                </span>
            </section>

            <!-- SECOND SECTION - Projects -->
            <section class="home--projects">
                <h2 class="section--title section--title__dblue">Projects</h2>
                <div class="section--body">
                    <span class="home--projects__content">These are some projects I’ve worked on; all being side projects.</span>  
                    <div class="projects--list">
                        <?php 
                        $args = array(  'post_type' => 'projects',
                                        'posts_per_page'=> 3
                                    );
                        $loop = new WP_Query( $args );
                        while ($loop->have_posts()):
                            $loop->the_post(); ?>
                            <a href="<?php the_permalink(); ?>" class="projects--list__item">
                                <img class="projects--list__icon" src=<?php the_post_thumbnail(); ?>
                                <h3 class="projects--list__title"><?php the_title(); ?></h3>
                            </a>
                        <? endwhile; ?>
                    </div>
                </div>
            </section>
            
            <!-- THIRD SECTION - Writings -->
            <section class="home--posts">
                <h2 class="section--title section--title__wine">Posts</h2>                
                
                <div class="section--body">
                <?php 
                $args = array(  'post_type' => 'post',
                                'posts_per_page'=> 3
                            );
                $loop = new WP_Query( $args );
                while ( $loop->have_posts() ) : $loop->the_post(); ?>
                    <div class="post--snippet">
                        <img class="post--snippet__thumbnail" src=<?php the_post_thumbnail('full'); ?>
                        <p class="post--snippet__date"><? echo get_the_date('Y-m-d'); ?></p>
                        <a href="<?php the_permalink(); ?>" class="post--snippet__title"><?php the_title(); ?></a>
                    </div>
                    
                    
                    
                <? endwhile;
                ?>
                </div>
            </section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
