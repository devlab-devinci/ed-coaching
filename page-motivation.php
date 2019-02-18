<?php
/**
 * Motivation page
 * @version 1.0
 */

get_header(); ?>

	<div class="wrap">

		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">
                <section class="motivation-element">
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
                </section>
            </main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- .wrap -->

<?php get_footer();
