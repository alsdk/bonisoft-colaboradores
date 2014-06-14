<?php $this->load->view('includes/head'); ?> 

<body id="update_address">

<div id="body_wrap">
	<!-- Header -->  
	<?php $this->load->view('includes/header'); ?> 

	<!-- Demo Navigation -->
	<?php $this->load->view('includes/colab_header'); ?> 
	
	<!-- Intro Content -->
	<div class="content_wrap intro_bg">
		<div class="content clearfix">
			<div class="col100">
				<h2>Public: Update Direcci&oacute;n</h2>
				<p>It allows multiple custom user data tables to be related to the libraries user account table.</p>
				<p>As an example of this, this demo includes a user address book that can be used by each user to save addresses and relate them to their account.</p>
				<p>This page will update a specific address within the current logged in users address book.</p>
			</div>		
		</div>
	</div>
	
	<!-- Main Content -->
	<div class="content_wrap main_content_bg">
		<div class="content clearfix">
			<div class="col100">
				<h2>Update Direcci&oacute;n</h2>
				<a href="<?php echo base_url();?>auth_public/manage_address_book">Manage Direcci&oacute;n Book</a>

			<?php if (! empty($message)) { ?>
				<div id="message">
					<?php echo $message; ?>
				</div>
			<?php } ?>
				
				<?php echo form_open(current_url());	?>  	
					<fieldset>
						<legend>Direcci&oacute;n Alias</legend>
						<ul>
							<li class="info_req">
								<label for="alias">Alias:</label>
								<input type="text" id="alias" name="update_alias" value="<?php echo set_value('update_alias',$address['uadd_alias']);?>" class="tooltip_trigger"
									title="An alias to reference the address by."
								/>
							</li>
						</ul>
					</fieldset>
					
					<fieldset>
						<legend>Recipient Details</legend>
						<ul>
							<li class="info_req">
								<label for="recipient">Recipient Name:</label>
								<input type="text" id="recipient" name="update_recipient" value="<?php echo set_value('update_recipient',$address['uadd_recipient']);?>"/>
							</li>
							<li class="info_req">
								<label for="phone_number">Direcci&oacute;n:</label>
								<input type="text" id="phone_number" name="update_address" value="<?php echo set_value('update_address',$address['uadd_phone']);?>"/>
							</li>
						</ul>
					</fieldset>
					
					<fieldset>
						<legend>Direcci&oacute;n Details</legend>
						<ul>
							<li>
								<label for="company">Company:</label>
								<input type="text" id="company" name="update_company" value="<?php echo set_value('update_company',$address['uadd_company']);?>"/>
							</li>
							<li class="info_req">
								<label for="address_01">Direcci&oacute;n 01:</label>
								<input type="text" id="address_01" name="update_address_01" value="<?php echo set_value('update_address_01',$address['uadd_address_01']);?>"/>
							</li>
							<li>
								<label for="address_02">Direcci&oacute;n 02:</label>
								<input type="text" id="address_02" name="update_address_02" value="<?php echo set_value('update_address_02',$address['uadd_address_02']);?>"/>
							</li>
							<li class="info_req">
								<label for="city">Ciudad / Town:</label>
								<input type="text" id="city" name="update_city" value="<?php echo set_value('update_city',$address['uadd_city']);?>"/>
							</li>
							<li class="info_req">
								<label for="county">State / County:</label>
								<input type="text" id="county" name="update_county" value="<?php echo set_value('update_county',$address['uadd_county']);?>"/>
							</li>
							<li class="info_req">
								<label for="post_code">Post Code:</label>
								<input type="text" id="post_code" name="update_post_code" value="<?php echo set_value('update_post_code',$address['uadd_post_code']);?>"/>
							</li>
							<li class="info_req">
								<label for="country">Country:</label>
								<input type="text" id="country" name="update_country" value="<?php echo set_value('update_country',$address['uadd_country']);?>"/>
							</li>
						</ul>
					</fieldset>
							
					<fieldset>
						<legend>Update Direcci&oacute;n Book</legend>
						<ul>
							<li>
								<h6>Important Note</h6>
								<small>The data saved via this demo is available for anyone else using the demo to see, therefore, it is recommended you do not include any personal details. All data that is saved via this demo, is completely wiped every few hours.</small>
							</li>
							<li>
								<hr/>
								<label for="submit">Update Direcci&oacute;n:</label>
								<input type="submit" name="update_address" id="submit" value="Enviar" class="link_button large"/>
								<input type="hidden" name="update_address_id" value="<?php echo $address['uadd_id'];?>"/>
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