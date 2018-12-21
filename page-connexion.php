<?php
/**
 * Login page
 * @version 1.0
 */

if ( ! is_user_logged_in() ) {
	wp_login_form( array(
		'redirect'       => site_url( '/compte' ), // par défaut renvoie vers la page courante
		'label_username' => 'Login',
		'label_password' => 'Mot de passe',
		'label_remember' => 'Se souvenir de moi',
		'label_log_in'   => 'Se connecter',
		'form_id'        => 'login-form',
		'id_username'    => 'user-login',
		'id_password'    => 'user-pass',
		'id_remember'    => 'rememberme',
		'id_submit'      => 'wp-submit',
		'remember'       => true, //afficher l'option se ouvenir de moi
		'value_remember' => false //se souvenir par défaut ?
	) );
	if(isset($_GET['login']) && $_GET['login'] == 'failed')
	{
		?>
		<div id="login-error" style="background-color: #FFEBE8;border:1px solid #C00;padding:5px;">
			<p>Erreur d'authentification: Le couple nom d'utilisateur/mot de passe ne correspond pas</p>
		</div>
		<?php
	}
} else {
	echo '<a href="' . admin_url( 'user-edit.php?user_id='. get_current_user_id() ) .'">Accès au profil</a>';
	echo '<a href="' . wp_logout_url( site_url( '/' ) ) .'">Se déconnecter</a>';
}