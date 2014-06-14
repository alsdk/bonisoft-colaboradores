<?php $this->load->view('includes/head'); ?> 

<body id="change_password">

<div id="body_wrap">
	<!-- Header -->  
	<?php $this->load->view('includes/header'); ?> 

	<!-- Demo Navigation -->
	<?php $this->load->view('includes/colab_header'); ?> 
	
	<!-- Intro Content -->
	<div class="content_wrap intro_bg">
		<div class="content clearfix">
			<div class="col100">
				<h2>Actualizar Contrase&ntilde;a</h2>
                                <p>Proteja su cuenta contra accesos no autorizados. Cambie su contrase&ntilde;a.</p>
			</div>
		</div>
	</div>
	
	<!-- Main Content -->
	<div class="content_wrap main_content_bg">
		<div class="content clearfix">
			<div class="col100">
				<h2>Actualizar Contrase&ntilde;a</h2>
				<a href="<?php echo base_url();?>auth_public/update_account">Actualizar Detalles de la Cuenta</a>

			<?php if (! empty($message)) { ?>
				<div id="message">
					<?php echo $message; ?>
				</div>
			<?php } ?>
				
				<?php echo form_open(current_url());	?>  	
					<div class="w100 frame">
						<ul>
							<li>
								<small>
									<strong>Por razones de seguridad, han sido definidas las siguientes reglas de validaci&oacute;n:</strong><br/>
                                                                        La longitud de la contrase&ntilde;a ha de ser de al menos <?php echo $this->flexi_auth->min_password_length(); ?> caracteres de longitud.<br/>Admite letras, n&uacute;meros, guinoes, guiones bajos, puntos y coma.
								</small>
							</li>
							<li class="info_req">
								<label for="current_password">Contrase&ntilde;a Actual:</label>
								<input type="password" id="current_password" name="current_password" value="<?php echo set_value('current_password');?>"/>
							</li>
							<li class="info_req">
								<label for="new_password">Nueva Contrase&ntilde;a:</label>
								<input type="password" id="new_password" name="new_password" value="<?php echo set_value('new_password');?>"/>
							</li>
							<li class="info_req">
								<label for="confirm_new_password">Confirmar Nueva Contrase&ntilde;a:</label>
								<input type="password" id="confirm_new_password" name="confirm_new_password" value="<?php echo set_value('confirm_new_password');?>"/>
							</li>
							<li>
<!--								<label for="submit">Update Contrase&ntilde;a:</label>-->
								<input type="submit" name="change_password" id="submit" value="Enviar" class="link_button large"/>
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