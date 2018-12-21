<?php

// Remember password
add_filter( 'login_form_bottom', 'lien_mot_de_passe_perdu' );
function lien_mot_de_passe_perdu( $formbottom ) {
	$formbottom .= '<a href="' . wp_lostpassword_url() . '">Mot de passe perdu ?</a>';
	return $formbottom;
}

function restrict_admin()
{
	if ( ! current_user_can( 'manage_options' ) && '/wp-admin/admin-ajax.php' != $_SERVER['PHP_SELF'] ) {
		wp_redirect( site_url() );
	}
}
add_action( 'admin_init', 'restrict_admin', 1 );

add_action( 'wp_login_failed', 'edcoaching_login_failed' ); // hook failed login
function edcoaching_login_failed( $user ) {
	// check what page the login attempt is coming from
	$referrer = $_SERVER['HTTP_REFERER'];

	// check that were not on the default login page
	if ( !empty($referrer) && !strstr($referrer,'wp-login') && !strstr($referrer,'wp-admin') && $user!=null ) {
		// make sure we don't already have a failed login attempt
		if ( !strstr($referrer, '?login=failed' )) {
			// Redirect to the login page and append a querystring of login failed
			wp_redirect( $referrer . '?login=failed');
		} else {
			wp_redirect( $referrer );
		}

		exit;
	}
}

add_action( 'authenticate', 'edcoaching_blank_login');

function edcoaching_blank_login( $user ){
	// check what page the login attempt is coming from
	$referrer = $_SERVER['HTTP_REFERER'];

	$error = false;

	if($_POST['log'] == '' || $_POST['pwd'] == '')
	{
		$error = true;
	}

	// check that were not on the default login page
	if ( !empty($referrer) && !strstr($referrer,'wp-login') && !strstr($referrer,'wp-admin') && $error ) {
		// make sure we don't already have a failed login attempt
		if ( !strstr($referrer, '?login=failed') ) {
			// Redirect to the login page and append a querystring of login failed
			wp_redirect( $referrer . '?login=failed' );
		} else {
			wp_redirect( $referrer );
		}
		exit;
	}
}