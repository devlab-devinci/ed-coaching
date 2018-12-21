<?php
/**
 * Displays top navigation
 *
 * @package WordPress
 * @version 1.2
 */

?>

<nav id="site-navigation" class="main-navigation" role="navigation"">
   <?php
       if ( ! is_user_logged_in() ) {
	       wp_nav_menu( array(
		       'menu' => 'Navigation deconnecte'
	       ));
       } else {
	       wp_nav_menu( array(
		       'menu' => 'Navigation connecte'
	       ));
       }
   ?>
</nav><!-- #site-navigation -->
