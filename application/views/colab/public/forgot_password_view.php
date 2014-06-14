<?php $this->load->view('includes/head'); ?> 


<body id="forgot_password">

<div id="body_wrap">
	<!-- Header -->  
	<?php $this->load->view('includes/header'); ?> 

	<!-- Demo Navigation -->
	<?php $this->load->view('includes/colab_header'); ?> 
	
	<!-- Intro Content -->
	<div class="content_wrap intro_bg">
		<div class="content clearfix">
			<div class="col100">
				<h2>Contrase&ntilde;a Olvidada</h2>
                                <p>Enviar&aacute; al usuario un correo electr&oacute;nico con un enlace, al hacer clic en el enlace, enlaza a una p&aacute;gina donde puede cambiar manualmente su clave.</p>
				<!--p>Users forgetting passwords is a common problem for sites that support user accounts. It is an essential feature that users must be able to securely reset their password without the involvement of a site administrator.</p>
				<p>
					Since the flexi auth library securely hashes all user passwords, it is not possible to check what the users forgotten password is and then inform them.<br/>
					Therefore, the library includes a function that will email a link to the user that includes a unique token. When the user clicks the link, the user is directed to a page that validates whether the token is valid, provided it is, the flexi auth library can then be configured to allow the user to manually reset their password, or to automatically email the user a new password.
				</p>
				<p>This demo is setup to send the user an email with a link, when they click the link, they are directed to a page where they can manually change their password.</p-->
			</div>		
		</div>
	</div>
	
	<!-- Main Content -->
	<div class="content_wrap main_content_bg">
		<div class="content clearfix">
			<div class="col100">
<!--				<h2>Forgotten Password</h2>-->

			<?php if (! empty($message)) { ?>
				<div id="message">
					<?php echo $message; ?>
				</div>
			<?php } ?>
				
				<?php echo form_open(current_url());	?>  	
					<div class="w100 frame">
						<ul>
							<li class="info_req">
								<label for="identity">Email o usuario:</label>
								<input type="text" id="identity" name="forgot_password_identity" value="" class="tooltip_trigger"
									title="Please enter either your email address or username defined during registration."
								/>
							</li>
							<li>
<!--								<label for="submit">Send Email:</label>-->
								<input type="submit" name="send_forgotten_password" id="submit" value="Enviar email" class="link_button large"/>
                                                                <small>Nota: Tiene 15 minutos para restablecer la contraseña desde que env&iacute;a el email..</small>
							</li>
						</ul>
					</div>	
				<?php echo form_close();?>
			</div>
		</div>
	</div>	
	
	<!-- Footer -->  
	<?php $this->load->view('includes/footer'); ?> 
</div>

<!-- Scripts -->  
<?php $this->load->view('includes/scripts'); ?> 

</body>
</html>