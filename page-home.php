<?php
/**
 * Home page
 * @version 1.0
 */

get_header(); ?>

	<div class="wrap">

		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">
				<h1> Contenu page d'accueil </h1>
                <hr>

                <!--Temoignage Section-->
                <h2>Partie témoignage</h2>
				<?php
                    $args = array( 'post_type' => 'temoignage', 'posts_per_page' => 10 );
                    $loop = new WP_Query( $args );
                    while ( $loop->have_posts() ) : $loop->the_post();
                        the_title();
                        echo '<div class="entry-content">';
                        the_content();
                        echo '</div>';
                    endwhile;
				?>
			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- .wrap -->

<?php get_footer();
