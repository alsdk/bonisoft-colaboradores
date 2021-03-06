<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class colab_auth_model extends CI_Model {
	
	// The following method prevents an error occurring when $this->data is modified.
	// Error Message: 'Indirect modification of overloaded property Demo_cart_admin_model::$data has no effect'.
	public function &__get($key)
	{
		$CI =& get_instance();
		return $CI->$key;
	}

	###++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++###	
	// Login
	###++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++###	

	/**
	 * login
	 * Validate the submitted login details and attempt to log the user into their account.
	 */
	function login() {
		$this->load->library('form_validation');

		// Set validation rules.
		$this->form_validation->set_rules('login_identity', 'Identity (Email / Login)', 'required');
		$this->form_validation->set_rules('login_password', 'Password', 'required');

		// If failed login attempts from users IP exceeds limit defined by config file, validate captcha.
		if ($this->flexi_auth->ip_login_attempts_exceeded())
		{
			/**
			 * reCAPTCHA
			 * http://www.google.com/recaptcha
			 * To activate reCAPTCHA, ensure the 'recaptcha_response_field' validation below is uncommented and then comment out the 'login_captcha' validation further below.
			 *
			 * The custom validation rule 'validate_recaptcha' can be found in '../libaries/MY_Form_validation.php'.
			 * The form field name used by 'reCAPTCHA' is 'recaptcha_response_field', this field name IS NOT editable.
			 * 
			 * Note: To use this example, you will also need to enable 
                         * the recaptcha examples in 'controllers/auth.php', 
                         * and 'views/colab/login_view.php'.
			*/
			$this->form_validation->set_rules('recaptcha_response_field', 'Captcha Answer', 'required|validate_recaptcha');				
			
			/**
			 * math CAPTCHA
			 * Math CAPTCHA is a basic CAPTCHA style feature that asks users a basic maths based question to validate they are indeed not a bot.
			 * To activate Math CAPTCHA, ensure the 'login_captcha' validation below is uncommented and then comment out the 'recaptcha_response_field' validation above.
			 * 
			 * The field value submitted as the answer to the math captcha must be submitted to the 'validate_math_captcha' validation function.
			 * The custom validation rule 'validate_math_captcha' can be found in '../libaries/MY_Form_validation.php'.
			 * 
			 * Note: To use this example, you will also need to enable the math_captcha examples in 'controllers/auth.php', 
                         * and 'views/colab/login_view.php'.
			*/
			# $this->form_validation->set_rules('login_captcha', 'Captcha Answer', 'required|validate_math_captcha['.$this->input->post('login_captcha').']');				
		}
		
		// Run the validation.
		if ($this->form_validation->run())
		{
			// Check if user wants the 'Remember me' feature enabled.
			$remember_user = ($this->input->post('remember_me') == 1);
	
			// Verify login data.
			$this->flexi_auth->login($this->input->post('login_identity'), $this->input->post('login_password'), $remember_user);

			// Save any public status or error messages (Whilst suppressing any admin messages) to CI's flash session data.
			$this->session->set_flashdata('message', $this->flexi_auth->get_messages());

			// Reload page, if login was successful, sessions will have been created that will then further redirect verified users.
			redirect('auth');
		}
		else
		{	
			// Set validation errors.
			$this->data['message'] = validation_errors('<p class="error_msg">', '</p>');
			
			return FALSE;
		}
	}

	/**
	 * login_via_ajax
	 * Attempt to log a user in via ajax.
	 * This example is a much more simplified version of the above 'login' function example as it just returns a boolean value of
	 * whether or not the submitted details successfully logged a user in - no redirects or status messages are set.
	 */
	function login_via_ajax()
	{
		$remember_user = ($this->input->post('remember_me') == 1);

		// Verify login data.
		return $this->flexi_auth->login($this->input->post('login_identity'), $this->input->post('login_password'), $remember_user);
	}
	
	###++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++###	
	// Account Registration
	###++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++###	

	/**
	 * register_account
	 * Create a new user account. 
	 * Then if defined via the '$instant_activate' var, automatically log the user into their account.
	 */
	function register_account() {
		$this->load->library('form_validation');

		// Set validation rules.
		// The custom rules 'identity_available' and 'validate_password' can be found in '../libaries/MY_Form_validation.php'.
                // 'rules' => 'integer')
		$validation_rules = array(
			array('field' => 'register_first_name', 'label' => 'Nombre', 'rules' => 'required'),
			array('field' => 'register_last_name', 'label' => 'Apellidos', 'rules' => 'required'),
			array('field' => 'register_address', 'label' => 'Direcci&oacute;n', 'rules' => 'required'),
			array('field' => 'register_city', 'label' => 'Ciudad', 'rules' => 'required'),
			array('field' => 'register_postal_code', 'label' => 'C&oacute;digo Postal', 'rules' => 'required'),
            array('field' => 'country', 'label' => 'Pa&iacute;s', 'rules' => 'required'),
            array('field' => 'register_email_address', 'label' => 'Email Direcci&oacute;n', 'rules' => 'required|valid_email|identity_available'),
			array('field' => 'register_username', 'label' => 'Username', 'rules' => 'required|min_length[4]|identity_available'),
			array('field' => 'register_password', 'label' => 'Password', 'rules' => 'required|validate_password'),
			array('field' => 'register_confirm_password', 'label' => 'Confirm Password', 'rules' => 'required|matches[register_password]'),
			array('field' => 'register_privacy', 'label' => 'Aviso de Proteccion de datos', 'rules' => 'required') 
		);

		$this->form_validation->set_rules($validation_rules);

		// Run the validation.
		if ($this->form_validation->run())
		{
			// Get user login details from input.
			$email = $this->input->post('register_email_address');
			$username = $this->input->post('register_username');
			$password = $this->input->post('register_password');
			
			// Get user profile data from input.
			// You can add whatever columns you need to customise user tables.
			$profile_data = array(
				'upro_first_name' => $this->input->post('register_first_name'),
				'upro_last_name' => $this->input->post('register_last_name'),
				'upro_address' => $this->input->post('register_address'),
				'upro_postal_code' => $this->input->post('register_postal_code'),
				'upro_city' => $this->input->post('register_city'),
                'upro_country' => $this->input->post('country')
			);
			
			// Set whether to instantly activate account.
			// This var will be used twice, once for registration, then to check if to log the user in after registration.
			$instant_activate = FALSE;
	
			// The last 2 variables on the register function are optional, these variables allow you to:
			// #1. Specify the group ID for the user to be added to (i.e. 'Moderator' / 'Public'), the default is set via the config file.
			// #2. Set whether to automatically activate the account upon registration, default is FALSE. 
			// Note: An account activation email will be automatically sent if auto activate is FALSE, or if an activation time limit is set by the config file.
			$response = $this->flexi_auth->insert_user($email, $username, $password, $profile_data, 1, $instant_activate);

			if ($response)
			{
				// This is an example 'Welcome' email that could be sent to a new user upon registration.
				// Bear in mind, if registration has been set to require the user activates their account, they will already be receiving an activation email.
				// Therefore sending an additional email welcoming the user may be deemed unnecessary.
				$email_data = array('identity' => $email);
	//			$this->flexi_auth->send_email($email, 'Welcome', 'registration_welcome.tpl.php', $email_data);
				// Note: The 'registration_welcome.tpl.php' template file is located in the '../views/includes/email/' directory defined by the config file.
				
				###+++++++++++++++++###
				
				// Save any public status or error messages (Whilst suppressing any admin messages) to CI's flash session data.
				$this->session->set_flashdata('message', $this->flexi_auth->get_messages());
				
				// This is an example of how to log the user into their account immeadiately after registering.
				// This example would only be used if users do not have to authenticate their account via email upon registration.
				if ($instant_activate && $this->flexi_auth->login($email, $password))
				{
					// Redirect user to public dashboard.
					redirect('auth_public/dashboard');
				}
				
				// Redirect user to login page
				redirect('auth');
			}
		}

		// Set validation errors.
		$this->data['message'] = validation_errors('<p class="error_msg">', '</p>');

		return FALSE;
	}
	
	###++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++###	
	// Account Activation
	###++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++###	

	/**
	 * resend_activation_token
	 * Resends a new account activation token to a users email address.
	 */
	function resend_activation_token()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('activation_token_identity', 'Identity (Email / Login)', 'required');
		
		// Run the validation.
		if ($this->form_validation->run())
		{					
			// Verify identity and resend activation token.
			$response = $this->flexi_auth->resend_activation_token($this->input->post('activation_token_identity'));
			
			// Save any public status or error messages (Whilst suppressing any admin messages) to CI's flash session data.
			$this->session->set_flashdata('message', $this->flexi_auth->get_messages());

			// Redirect user.
			($response) ? redirect('auth') : redirect('auth/resend_activation_token');
		}
		else
		{	
			// Set validation errors.
			$this->data['message'] = validation_errors('<p class="error_msg">', '</p>');
			
			return FALSE;
		}
	}
	
	###++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++###	
	// Reseting Passwords
	###++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++###	

	/**
	 * forgotten_password
	 * Sends a 'Forgotten Password' email to a users email address. 
	 * The email will contain a link that redirects the user to the site, a token within the link is verified, and the user can then manually reset their password.
	 */
	function forgotten_password()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('forgot_password_identity', 'Identity (Email / Login)', 'required');
		
		// Run the validation.
		if ($this->form_validation->run())
		{
			// The 'forgotten_password()' function will verify the users identity exists and automatically send a 'Forgotten Password' email.
			$response = $this->flexi_auth->forgotten_password($this->input->post('forgot_password_identity'));
			
			// Save any public status or error messages (Whilst suppressing any admin messages) to CI's flash session data.
			$this->session->set_flashdata('message', $this->flexi_auth->get_messages());
			
			// Redirect user.
			redirect('auth');
		}
		else
		{
			// Set validation errors.
			$this->data['message'] = validation_errors('<p class="error_msg">', '</p>');
			
			return FALSE;
		}
	}
	
	/**
	 * manual_reset_forgotten_password
	 * This example lets the user manually reset their password rather than automatically sending them a new random password via email.
	 * The function validates the user via a token within the url of the current site page, then validates their current and newly submitted passwords are valid.
	 */
	function manual_reset_forgotten_password($user_id, $token)
	{
		$this->load->library('form_validation');

		// Set validation rules
		// The custom rule 'validate_password' can be found in '../libaries/MY_Form_validation.php'.
		$validation_rules = array(
			array('field' => 'new_password', 'label' => 'New Password', 'rules' => 'required|validate_password|matches[confirm_new_password]'),
			array('field' => 'confirm_new_password', 'label' => 'Confirm Password', 'rules' => 'required')
		);
		
		$this->form_validation->set_rules($validation_rules);

		// Run the validation.
		if ($this->form_validation->run())
		{
			// Get password data from input.
			$new_password = $this->input->post('new_password');
		
			// The 'forgotten_password_complete()' function is used to either manually set a new password, or to auto generate a new password.
			// For this example, we want to manually set a new password, so ensure the 3rd argument includes the $new_password var, or else a  new password.
			// The function will then validate the token exists and set the new password.
			$this->flexi_auth->forgotten_password_complete($user_id, $token, $new_password);

			// Save any public status or error messages (Whilst suppressing any admin messages) to CI's flash session data.
			$this->session->set_flashdata('message', $this->flexi_auth->get_messages());
			
			redirect('auth');
		}
		else
		{		
			// Set validation errors.
			$this->data['message'] = validation_errors('<p class="error_msg">', '</p>');
			
			return FALSE;
		}
	}
	
	###++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++###	
	// Manage User Account
	###++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++###	

	/**
	 * update_account
	 * Updates a users account and profile data.
	 */
	function update_account()
	{
		$this->load->library('form_validation');

		// Set validation rules.
		// The custom rule 'identity_available' can be found in '../libaries/MY_Form_validation.php'.
		$validation_rules = array(
			array('field' => 'update_first_name', 'label' => 'Nombre', 'rules' => 'required'),
			array('field' => 'update_last_name', 'label' => 'Apellidos', 'rules' => 'required'),
			array('field' => 'update_address', 'label' => 'Direcci&oacute;n', 'rules' => 'required'),
                        array('field' => 'update_postal_code', 'label' => 'C&oacute;digo Postal', 'rules' => 'required'),
			array('field' => 'update_city', 'label' => 'Ciudad', 'rules' => 'required'),
                        array('field' => 'update_country', 'label' => 'Pa&iacute;s', 'rules' => 'required'),
			array('field' => 'update_email', 'label' => 'Email', 'rules' => 'required|valid_email|identity_available'),
			array('field' => 'update_username', 'label' => 'Username', 'rules' => 'min_length[4]|identity_available')
		);
		
		$this->form_validation->set_rules($validation_rules);
		
		// Run the validation.
		if ($this->form_validation->run())
		{
			// Note: This example requires that the user updates their email address via a separate page for verification purposes.

			// Get user id from session to use in the update function as a primary key.
			$user_id = $this->flexi_auth->get_user_id();
			
			// Get user profile data from input.
			// IMPORTANT NOTE: As we are updating multiple tables (The main user account and user profile tables), it is very important to pass the
			// primary key column and value in the $profile_data for any custom user tables being updated, otherwise, the function will not
			// be able to identify the correct custom data row.
			// In this example, the primary key column and value is 'upro_uacc_fk' => $user_id.
			$profile_data = array(
				'upro_uacc_fk' => $user_id,
				'upro_first_name' => $this->input->post('update_first_name'),
				'upro_last_name' => $this->input->post('update_last_name'),
				'upro_address' => $this->input->post('update_address'),
                                'upro_postal_code' => $this->input->post('update_postal_code'),
				'upro_city' => $this->input->post('update_city'),
                                'upro_country' => $this->input->post('update_country'),
                                // inserting username and email into 'user_accounts' table using flexi_auth
				$this->flexi_auth->db_column('user_acc', 'email') => $this->input->post('update_email'),
				$this->flexi_auth->db_column('user_acc', 'username') => $this->input->post('update_username')
			);

			// If we were only updating profile data (i.e. no email or username included), we could use the 'update_custom_user_data()' function instead.
                        $response = $this->flexi_auth->update_user($user_id, $profile_data);
			
			// Save any public status or error messages (Whilst suppressing any admin messages) to CI's flash session data.
			$this->session->set_flashdata('message', $this->flexi_auth->get_messages());

			// Redirect user. 
			//($response) ? redirect('auth_public/dashboard') : redirect('auth_public/update_account');
                        
                        /**
                         * @author Mariano <alsdk69@gmail.com>
                         * In order to get working updated notifications messages via session->flashdata() in auth_public controller
                         * on update_account() function, we need to redirect directly to update_account method in auth_public controller
                         * since there isn't an associated view for auth_public/dashboard ... (in fact it's only a redirection to auth_public/update_account).
                         */
                        redirect('auth_public/update_account');
                        
		}
		else
		{		
			// Set validation errors.
			$this->data['message'] = validation_errors('<p class="error_msg">', '</p>');
			
			return FALSE;
		}
	}

	/**
	 * change_password
	 * Updates a users password.
	 */
	function change_password()
	{
		$this->load->library('form_validation');

		// Set validation rules.
		// The custom rule 'validate_password' can be found in '../libaries/MY_Form_validation.php'.
		$validation_rules = array(
			array('field' => 'current_password', 'label' => 'Current Password', 'rules' => 'required'),
			array('field' => 'new_password', 'label' => 'New Password', 'rules' => 'required|validate_password|matches[confirm_new_password]'),
			array('field' => 'confirm_new_password', 'label' => 'Confirm Password', 'rules' => 'required')
		);
		
		$this->form_validation->set_rules($validation_rules);

		// Run the validation.
		if ($this->form_validation->run())
		{
			// Get password data from input.
			$identity = $this->flexi_auth->get_user_identity();
			$current_password = $this->input->post('current_password');
			$new_password = $this->input->post('new_password');			
			
			// Note: Changing a password will delete all 'Remember me' database sessions for the user, except their current session.
			$response = $this->flexi_auth->change_password($identity, $current_password, $new_password);
			
			// Save any public status or error messages (Whilst suppressing any admin messages) to CI's flash session data.
			$this->session->set_flashdata('message', $this->flexi_auth->get_messages());

			// Redirect user.
			// Note: As an added layer of security, you may wish to email the user that their password has been updated.
                        /* @author Mariano <alsdk69@gmail.com
                         * Changed redirect from auth_public/dashboard to auth_public/update_account since dashboard don't have a proper view 
                         * (same issue as update_account method above).
                         */
			($response) ? redirect('auth_public/update_account') : redirect('auth_public/change_password');
		}
		else
		{		
			// Set validation errors.
			$this->data['message'] = validation_errors('<p class="error_msg">', '</p>');
			
			return FALSE;
		}
	}
	
	/**
	 * send_new_email_activation
	 * This demo has 2 methods of updating a logged in users email address.
	 * The first option simply allows the users to change their email address along with the rest of their account data via entering it into a form fields.
	 * The second option requires users to verify their email address via clicking a link that is sent to that same email address.
	 * The purpose of the second option is to prevent users entering a mispelt email address, which would then prevent the user from logging back in.
	 */
	function send_new_email_activation()
	{
		$this->load->library('form_validation');

		// Set validation rules.
		// The custom rule 'identity_available' can be found in '../libaries/MY_Form_validation.php'.
		$validation_rules = array(
			array('field' => 'email_address', 'label' => 'Email', 'rules' => 'required|valid_email|identity_available'),
		);
		
		$this->form_validation->set_rules($validation_rules);

		// Run the validation.
		if ($this->form_validation->run())
		{
			$user_id = $this->flexi_auth->get_user_id();
			
			// The 'update_email_via_verification()' function generates a verification token that is then emailed to the user.
			$this->flexi_auth->update_email_via_verification($user_id, $this->input->post('email_address'));
			
			// Save any public status or error messages (Whilst suppressing any admin messages) to CI's flash session data.
			$this->session->set_flashdata('message', $this->flexi_auth->get_messages());
			
			redirect('auth_public/dashboard');
		}
		else
		{		
			// Set validation errors.
			$this->data['message'] = validation_errors('<p class="error_msg">', '</p>');
			
			return FALSE;
		}
	}
	
	/**
	 * verify_updated_email
	 * Verifies a token within the current url and updates a users email address. 
	 */
	function verify_updated_email($user_id, $token)
	{
		// Verify the update email token and if valid, update their email address.
		$this->flexi_auth->verify_updated_email($user_id, $token);
		
		// Save any public status or error messages (Whilst suppressing any admin messages) to CI's flash session data.
		$this->session->set_flashdata('message', $this->flexi_auth->get_messages());
		
		// Redirect user.
		// Logged in users are redirected to the restricted public user dashboard, otherwise the user is redirected to the login page.
		if ($this->flexi_auth->is_logged_in())
		{
			redirect('auth_public/dashboard');
		}
		else
		{
			redirect('auth/login');
		}
	}

}
/* End of file colab_auth_model.php */
/* Location: ./application/models/colab_auth_model.php */