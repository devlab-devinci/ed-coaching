<?php
/**
 * Home page
 * @version 1.0
 */

get_header(); ?>


    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <section class="home-element banner">
                <div class="banner-bckg">
                    <?php
                    $bckg = get_field('background_edcoaching');
                    if($bckg): ?>
                        <img src="<?php echo $bckg['url']?>" alt="<?php echo $bckg['alt']; ?>"/>
                    <?php endif; ?>
                </div>
                <div class="banner-content">
                    <div class="wrap-content">
                        <div class="sb left">
                            <div class="sb-top"></div>
                            <div class="sb-mid orange left">
                                <div class="sb-round left"><div></div></div>
                            </div>
                        </div>
                        <h1 class="content"><?php the_title() ?></h1>
                    </div>
                    <div class="wrap-content">
                        <p><?php the_field('description_edcoaching') ?></p>
                        <div class="sb right">
                            <div class="sb-top"></div>
                            <div class="sb-mid red right">
                                <div class="sb-round right"><div></div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="home-element activity">
                <div class="wrap-list">
                    <aside>
                        <div class="title-content">
                            <h2>Découvrez nos activités</h2>
                            <p><?php the_field('description_activite') ?></p>
                        </div>
                    </aside>
                    <article>
                        <ul class="list-content">
	                        <?php
	                        for ($act = 1; $act<=3; $act++):
		                        $element = get_field('activite_'.$act);
		                        if($element): ?>
                                    <li>
                                        <div class="wrap-content">
                                            <div class="sb left">
                                                <div class="sb-top"></div>
                                                <div class="sb-mid white left">
                                                    <div class="sb-round left"><div></div></div>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <img src="<?php echo $element['icone']['url']?>" alt="<?php echo $element['icone']['alt']; ?>"/>
                                            </div>
                                        </div>
                                        <h3><?php echo $element['libelle']?></h3>
                                        <p><?php echo $element['description']?></p>
                                    </li>
		                        <?php endif; endfor;?>
                        </ul>
                    </article>
                </div>
            </section>
            <div class="home-element contact">
                <div class="wrap">
                    <h3 class="content">Pour nous contacter rien de plus simple <a href="#">c'est ici</a></h3>
                </div>
            </div>
            <section class="home-element coach">
                <div class="wrap-list">
                    <aside>
                        <div class="title-content">
                            <h2>Nos Coachs</h2>
                        </div>
                    </aside>
                    <article>
                        <ul class="list-content">
		                    <?php
                            for ($c = 1; $c<=4; $c++):
                                $element = get_field('coach_'.$c);
                                if($element): ?>
                                    <li>
                                        <img src="<?php echo $element['avatar']['url']?>" alt="<?php echo $element['avatar']['alt']; ?>"/>
                                        <h3><?php echo $element['prenom']?></h3>
                                        <p><?php echo $element['description']?></p>
                                    </li>
                            <?php endif; endfor;?>
                        </ul>
                    </article>
                </div>
            </section>
            <section class="home-element partner">
                <div class="wrap-list">
                    <aside>
                        <div class="title-content">
                            <h2>Nos Partenaires</h2>
                        </div>
                    </aside>
                    <article>
                        <ul class="list-content">
		                    <?php
		                    $args = array( 'post_type' => 'partenaire', 'posts_per_page' => 3 );
		                    $loop = new WP_Query( $args );
		                    while ( $loop->have_posts() ) : $loop->the_post();
			                    echo '<li>';
			                    $image = get_field('logo'); $size = 'full';
			                    if( $image ) echo wp_get_attachment_image( $image, $size ) . '</li>';
		                    endwhile;
		                    ?>
                        </ul>
                    </article>
                </div>
            </section>
        </main><!-- #main -->
    </div><!-- #primary -->

<?php get_footer();
