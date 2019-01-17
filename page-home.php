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


    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <section class="home-element banner">

            </section>
            <section class="home-element activity">
                <div class="wrap">
                    <aside>
                        <div class="banner-title-content">
                            <h2>Découvrez nos activités</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi quis nulla mattis, ultricies nunc fringilla, faucibus nisi. Aenean scelerisque tortor auctor, hendrerit orci id, ornare arcu. Sed tempor turpis eu enim pellentesque auctor. Fusce non hendrerit neque. Quisque a ex sem. In ultrices massa ac risus egestas, id rutrum nunc vehicula. </p>
                        </div>
                    </aside>
                    <article>
                        <ul class="banner-list-content">
                            <li>
                                <img src="" alt="pict 1">
                                <h3>Booking</h3>
                                <p>Cras quis urna quis nibh commodo molestie sit amet non nunc. Phasellus lacus purus, vestibulum in tincidunt vitae, elementum sit amet sem.</p>
                            </li>
                            <li>
                                <img src="" alt="pict 2">
                                <h3>Coaching</h3>
                                <p>Cras quis urna quis nibh commodo molestie sit amet non nunc. Phasellus lacus purus, vestibulum in tincidunt vitae, elementum sit amet sem.</p>
                            </li>
                            <li>
                                <img src="" alt="pict 3">
                                <h3>Shopping</h3>
                                <p>Cras quis urna quis nibh commodo molestie sit amet non nunc. Phasellus lacus purus, vestibulum in tincidunt vitae, elementum sit amet sem.</p>
                            </li>
                            <li>
                                <img src="" alt="pict 4">
                                <h3>Achieve</h3>
                                <p>Cras quis urna quis nibh commodo molestie sit amet non nunc. Phasellus lacus purus, vestibulum in tincidunt vitae, elementum sit amet sem.</p>
                            </li>
                        </ul>
                    </article>
                </div>
            </section>
            <div class="home-element contact">

            </div>
            <section class="home-element coach">

            </section>
            <section class="home-element partner">

            </section>
        </main><!-- #main -->
    </div><!-- #primary -->

<?php get_footer();
