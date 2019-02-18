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
       wp_nav_menu( array(
		       'menu' => 'Navigation Header'
	    )); ?>
       <div class="social-icon">
           <a href="#" class="social-element"></a>
           <a href="#" class="social-element"></a>
       </div>
   <?php if ( ! is_user_logged_in() ) { ?>
       <div class="login">
           <a href="<?php echo get_page_link(76); ?>">Connexion</a>
       </div>
   <?php } else { ?>
       <div class="login">
	       <?php global $current_user;
	       wp_get_current_user() ?>
           <a id="link-my-account" href="<?php echo get_page_link(38); ?>">
               <p><span>Bonjour</span> <br><?php echo $current_user->nickname ?></p>
           </a>
       </div>
   <?php } ?>
</nav><!-- #site-navigation -->
