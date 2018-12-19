<?php
/**
 * Displays top navigation
 *
 * @package WordPress
 * @since 1.0
 * @version 1.2
 */

?>

<nav id="site-navigation" class="main-navigation" role="navigation"">
   <?php
       wp_nav_menu( array(
            'menu' => 'Top Navbar'  ));
   ?>
</nav><!-- #site-navigation -->
