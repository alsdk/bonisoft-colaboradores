<?php $this->load->view('includes/head'); ?> 

<body id="update_email">

<div id="body_wrap">
	<!-- Header -->  
	<?php $this->load->view('includes/header'); ?> 

	<!-- Demo Navigation -->
	<?php $this->load->view('includes/colab_header'); ?> 
	
	<!-- Intro Content -->
	<div class="content_wrap intro_bg">
		<div class="content clearfix">
			<div class="col100">
				<h2>Public: Actualizar email con verificaci&oacute;n mediante correo</h2>
				<p>Revise su buz&oacute;n y confirme el cambio de correo electr&oacute;nico.</p>
			</div>		
		</div>
	</div>
	
	<!-- Main Content -->
	<div class="content_wrap main_content_bg">
		<div class="content clearfix">
			<div class="col100">
				<h2>Change Email via Email Verification</h2>
				<a href="<?php echo base_url();?>auth_public/update_account">Actualizar Detalles de la Cuenta</a>

			<?php if (! empty($message)) { ?>
				<div id="message">
					<?php echo $message; ?>
				</div>
			<?php } ?>
				
				<?php echo form_open(current_url());	?>  	
					<div class="w100 frame">
						<ul>
							<li class="info_req">
								<label for="email_address">New Email Direcci&oacute;n:</label>
								<input type="text" id="email_address" name="email_address" value="<?php echo set_value('email_address');?>"/>
							</li>
							<li>
								<label for="submit">Update Email:</label>
								<input type="submit" name="update_email" id="submit" value="Enviar" class="link_button large"/>
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