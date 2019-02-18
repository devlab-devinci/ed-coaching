<?php
/**
 * Register page
 * @version 1.0
 */
?>

<main class="login-form">
	<section class="form-content">
		<?php
		if ( ! is_user_logged_in() ) {
			echo '<form>';
			edcoaching_register_form();
			echo '<input type="submit"/>';
			echo '</form>';
		} else {
			echo '<a href="' . wp_logout_url( site_url( '/' ) ) .'">Retour au menu</a>';
			echo '<p>Déjà inscrit ? <a href="' . wp_safe_redirect( site_url($path = '/login') ) .'">Connexion</a></p>';
		} ?>
	</section>
</main>