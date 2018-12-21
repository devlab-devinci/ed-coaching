<?php
add_action( 'register_form', 'edcoaching_register_form' );
function edcoaching_register_form() {

	$user_login = ( ! empty( $_POST['user_login'] ) ) ? sanitize_text_field( $_POST['user_login'] ) : '';

	?>
	<p>
		<label for="user_login"><?php _e( 'First Name', 'mydomain' ) ?><br />
			<input type="text" name="user_login" id="user_login" class="input" value="<?php echo esc_attr(  $user_login  ); ?>" size="25" /></label>
	</p>
	<?php
}

//2. Add validation. In this case, we make sure user_login is required.
add_filter( 'registration_errors', 'edcoaching_registration_errors', 10, 3 );
function edcoaching_registration_errors( $errors, $sanitized_user_login, $user_email ) {

	if ( empty( $_POST['user_login'] ) || ! empty( $_POST['user_login'] ) && trim( $_POST['user_login'] ) == '' ) {
		$errors->add( 'user_login_error', sprintf('<strong>%s</strong>: %s',__( 'ERROR', 'mydomain' ),__( 'You must include a first name.', 'mydomain' ) ) );

	}

	return $errors;
}

//3. Finally, save our extra registration user meta.
add_action( 'user_register', 'edcoaching_user_register' );
function edcoaching_user_register( $user_id ) {
	if ( ! empty( $_POST['user_login'] ) ) {
		update_user_meta( $user_id, 'user_login', sanitize_text_field( $_POST['user_login'] ) );
	}
}