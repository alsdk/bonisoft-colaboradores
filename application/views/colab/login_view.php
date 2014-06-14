<?php $this->load->view('includes/head'); ?> 

<body id="login">

<div id="body_wrap">
	<!-- Header -->  
	<?php $this->load->view('includes/header'); ?> 

	<!-- Demo Navigation -->
	<?php $this->load->view('includes/colab_header'); ?> 
	
	<!-- Intro Content -->
	<div class="content_wrap intro_bg">
		<div class="content clearfix">
			<div class="col100">
				<h2>Acceso / Registro de Colaboradores</h2>
                                <p>Indique su usuario o email y contrase&ntilde;a para acceder o reg&iacutestrese como colaborador de <a href="http://spanishon.com/" target="_blank">Spanishon.com</a></p>
			</div>		
		</div>
	</div>
	
	<!-- Main Content -->
	<div class="content_wrap main_content_bg">
		<div class="content clearfix">
			<div class="col100">
				<!--h2>User Login</h2-->

			<?php if (! empty($message)) { ?>
				<div id="message">
					<?php echo $message; ?>
				</div>
			<?php } ?>
				
				<?php echo form_open(current_url(), 'class="parallel"');?>  	
					<fieldset class="w50 parallel_target">
						<legend>Colaboradores Registrados</legend>
						<ul>
							<li>
								<label for="identity">Email o usuario:</label>
								<input type="text" id="identity" name="login_identity" value="<?php echo set_value('login_identity', '');?>" class="tooltip_parent"/>
								<span class="tooltip width_400">
								</span>
							</li>
							<li>
								<label for="password">Contrase&ntilde;a:</label>
								<input type="password" id="password" name="login_password" value="<?php echo set_value('login_password', '');?>"/>
							</li>
						<?php 
							# Below are 2 examples, the first shows how to implement 'reCaptcha' (By Google - http://www.google.com/recaptcha),
							# the second shows 'math_captcha' - a simple math question based captcha that is native to COLLABORATOS by BONISOFT app. 
							# This example is setup to use reCaptcha by default, if using math_captcha, ensure the 'auth' controller and 'colab_auth_model' are updated.
						
							# reCAPTCHA Example
							# To activate reCAPTCHA, ensure the 'if' statement immediately below is uncommented and then comment out the math captcha 'if' statement further below.
			 				# You will also need to enable the recaptcha examples in 'controllers/auth.php', and 'models/colab_auth_model.php'.
							#/*
							if (isset($captcha)) 
							{ 
								echo "<li>\n";
								echo $captcha;
								echo "</li>\n";
							}
							#*/
							
							/* math_captcha Example
							# To activate math_captcha, ensure the 'if' statement immediately below is uncommented and then comment out the reCAPTCHA 'if' statement just above.
							# You will also need to enable the math_captcha examples in 'controllers/auth.php', and 'models/colab_auth_model.php'.
							if (isset($captcha))
							{
								echo "<li>\n";
								echo "<label for=\"captcha\">Captcha Question:</label>\n";
								echo $captcha.' = <input type="text" id="captcha" name="login_captcha" class="width_50"/>'."\n";
								echo "</li>\n";
							}
							#*/
						?>
							<li>
                                                            <label for="remember_me">Recordar contrase&ntilde;a:</label>
								<input type="checkbox" id="remember_me" name="remember_me" value="1" <?php echo set_checkbox('remember_me', 1); ?>/>
							</li>
							<li>
<!--								<label for="submit">Login:</label>-->
								<input type="submit" name="login_user" id="submit" value="Acceder" class="link_button large"/>
							</li>
<!--							<li>
								<small>Nota: On this demo, 3 failed login attempts will raise security on the account, activating a 10 second time limit ban per login attempt (20 secs after 9+ attempts), and activation of a captcha that must be completed to login.</small> 
							</li>-->
							<li>
								<hr/>
                                                                <a href="<?php echo base_url();?>auth/forgotten_password">Contrase&ntilde;a olvidada</a>
							</li>
							<li>
                                                  <!--          <a href="<?php echo base_url();?>auth/resend_activation_token">Reenviar mensaje de activaci&oacute;n</a> -->
							</li>
						</ul>
					</fieldset>

					<fieldset class="w50 r_margin parallel_target">
						<legend>Nuevos colaboradores</legend>
						<ul>
							<li>
								Cree su cuenta de colaborador de Spanishon.com.
							</li>
							<li>
								<hr/>
								<a href="<?php echo base_url();?>auth/register_account" class="link_button large">Registrar Nueva Cuenta</a>
							</li>
						</ul>
					</fieldset>
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