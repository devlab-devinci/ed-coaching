<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

	<div class="wrap">

		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">
				<?php
				$args = array(
				        'post_type' => 'motivation',
                        'posts_per_page' => 10
                );
				$loop = new WP_Query( $args );

				/* Start the Loop */
				while ( $loop->have_posts() ) : $loop->the_post();

					get_template_part( 'template-parts/post/content-motivation' );

				endwhile; // End of the loop.
				?>

                <?php wp_reset_postdata(); ?>
            </main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- .wrap -->

<?php get_footer();
