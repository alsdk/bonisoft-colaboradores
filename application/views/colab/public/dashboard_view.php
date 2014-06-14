<?php $this->load->view('includes/head'); ?> 

<body id="public_dashboard">

<div id="body_wrap">
	<!-- Header -->  
	<?php $this->load->view('includes/header'); ?> 

	<!-- Demo Navigation -->
	<?php $this->load->view('includes/colab_header'); ?> 
	
	<!-- Intro Content -->
	<div class="content_wrap intro_bg">
		<div class="content clearfix">
			<div class="col100">
				<h2>Public: Dashboard</h2>
				<p>This page acts as an example dashboard landing page for logged in public users, demonstrating how some of the functions within the flexi auth library can be used to manage the account details of public users.</p>
			</div>		
		</div>
	</div>
	
	<!-- Main Content -->
	<div class="content_wrap main_content_bg">
		<div class="content clearfix">
			<div class="col100">
			
			<?php if (! empty($message)) { ?>
				<div id="message">
					<?php echo $message; ?>
				</div>
			<?php } ?>
				
				<div class="w100 frame">							
					<h3>Account Details</h3>
					<p>Update the account details of the currently logged in user.</p>
					<p>This example updates records from the required 'User Accounts' table, and from the custom 'Demo User Profile' table that in this demo is used to store a users name, phone number etc.</p>
					<ul>
						<li>
							<a href="<?php echo base_url();?>auth_public/update_account">Actualizar Detalles de la Cuenta</a>
						</li>	
					</ul>
					<hr/>
					
					<h3>Email Direcci&oacute;n</h3>
					<p>Update the email address of the currently logged in user, via email verification.</p>
					<p>
						Using email verification to update an email address confirms the user has entered the correct new email address.<br/>
						If they were make a typo entering the address, that then was NOT verified via email, they could potentially be prevented from logging back in via their email address as they wouldn't know how they misspelled it. 
					</p>
					<ul>
						<li>
							<a href="<?php echo base_url();?>auth_public/update_email">Actualizar Email via Email Verification</a>
						</li>	
					</ul>
					<hr/>
					
					<h3>Password</h3>
					<p>Update the password of the currently logged in user.</p>
					<p>All passwords are securely hashed using the <a href="http://www.openwall.com/phpass/" target="_blank">phpass framework</a>.</p>
					<ul>
						<li>
							<a href="<?php echo base_url();?>auth_public/change_password">Actualizar Contrase&ntilde;a</a>
						</li>	
					</ul>
					<hr/>
					
					<h3>Direcci&oacute;n Book</h3>
					<p>Manage the custom address details of the currently logged in user.</p>
					<p>This example manages records from the custom 'Demo User Direcci&oacute;n' table that in this demo is used to store a list of different addresses per user.</p>
					<ul>
						<li>
							<a href="<?php echo base_url();?>auth_public/manage_address_book">Manage Direcci&oacute;n Book</a>
						</li>	
					</ul>
				</div>
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