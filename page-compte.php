<?php
/**
 * Compte page
 * @version 1.0
 */

$url = site_url($path = '/connexion');
if ( ! is_user_logged_in() ) {
	 wp_safe_redirect( $url );
}

?>

<p>Mon compte</p>

<?php
  	echo '<a href="' . wp_logout_url( site_url( '/' ) ) .'">Se déconnecter</a>';
?>
