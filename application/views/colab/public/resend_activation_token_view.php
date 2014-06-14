<?php $this->load->view('includes/head'); ?> 


<body id="resend_activation_token">

<div id="body_wrap">
	<!-- Header -->  
	<?php $this->load->view('includes/header'); ?> 

	<!-- Demo Navigation -->
	<?php $this->load->view('includes/colab_header'); ?> 
	
	<!-- Intro Content -->
	<div class="content_wrap intro_bg">
		<div class="content clearfix">
			<div class="col100">
				<h2>Reenviar mensaje de activaci&oacute;n</h2>
				<p> Solicite de nuevo el correo electr&oacute;nico de activaci&oacute;n en caso de que no haber recibido el correo electr&oacute;nico inicial.</p>
			</div>		
		</div>
	</div>
	
	<!-- Main Content -->
	<div class="content_wrap main_content_bg">
		<div class="content clearfix">
			<div class="col100">
<!--				<h2>Resend Activation Token</h2>-->

			<?php if (! empty($message)) { ?>
				<div id="message">
					<?php echo $message; ?>
				</div>
			<?php } ?>
				
				<?php echo form_open(current_url());?>  	
					<div class="w100 frame">
						<ul>
							<li class="info_req">
								<label for="identity">Email o usuario:</label>
								<input type="text" id="identity" name="activation_token_identity" value="" class="tooltip_trigger"
									title="Please enter either your email address or username defined during registration."
								/>
							</li>
							<li>
<!--								<label for="submit">Send Email:</label>-->
								<input type="submit" name="send_activation_token" id="submit" value="Enviar email" class="link_button large"/>
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