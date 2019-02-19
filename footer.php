<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress

 * @since 1.0
 * @version 1.2
 */

?>

		</div><!-- #content -->

		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="wrap">
				<div class="footer-left-navigation">
                    <div class="wrap-sb">
                        <div class="sb left">
                            <div class="sb-mid white left"></div>
                        </div>
                        <div class="content-footer-logo">
                            <img src="" alt=""/>
                        </div>
                    </div>
                    <div class="navigation-footer">
						<?php wp_nav_menu( array(
							'menu' => 'Footer navigation'
						)); ?>
                    </div>
                </div>
                <div class="footer-right-navigation">
                    <div class="footer-contact">
                        <a href="#">Contactez-nous</a>
                    </div>
                    <div class="social-icon">
                        <a href="#" class="social-element"></a>
                        <a href="#" class="social-element"></a>
                    </div>
                </div>
			</div>
		</footer>
	</div><!-- .site-content-contain -->
</div><!-- #page -->
<?php wp_footer(); ?>

</body>
</html>
