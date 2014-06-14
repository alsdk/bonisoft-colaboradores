<?php $this->load->view('includes/head'); ?> 

<body id="manage_users">

<div id="body_wrap">
	<!-- Header -->  
	<?php $this->load->view('includes/header'); ?> 

	<!-- Demo Navigation -->
	<?php $this->load->view('includes/colab_header'); ?> 
	
	<!-- Intro Content -->
	<div class="content_wrap intro_bg">
		<div class="content clearfix">
			<div class="col100">
				<h2>Listado de colaboradores registrados</h2>
				<p>Display a paginated list of all user accounts and then apply a search filter to find specific users via user identificator.</p>
			</div>		
		</div>
	</div>
	
	<!-- Main Content -->
	<div class="content_wrap main_content_bg">
		<div class="content clearfix">
			<div class="col100">
				<h2>User Accounts</h2>

			<?php if (! empty($message)) { ?>
				<div id="message">
					<?php echo $message; ?>
				</div>
			<?php } ?>
				
				<?php echo form_open(current_url());	?>
					<fieldset>
						<legend>Search Filter</legend>
						
						<label for="search">Search Users:</label>
						<input type="text" id="search" name="search_query" value="<?php echo set_value('search_users',$search_query);?>" class="tooltip_trigger"
						/>
						<input type="submit" name="search_users" value="Search" class="link_button"/>
						<a href="<?php echo base_url(); ?>auth_admin/list_user_id" class="link_button grey">Reset</a>
						
					</fieldset>
				<?php echo form_close();?>
			
				<?php echo form_open(current_url());	?>
					<table>
						<thead>
							<tr>
								<th class="spacer_200">Mail</th>
                                                                <th>Identificador</th>
								<th>Nombre</th>
								<th>Apellidos</th>
                                                                <th>Ciudad</th>
                                                                <th>País</th>
							</tr>
						</thead>
						<?php if (!empty($users)) { ?>
						<tbody>
							<?php foreach ($users as $user) { ?>
							<tr>
								<td>
									<a href="<?php echo $base_url.'auth_admin/list_user_id/'.$user[$this->flexi_auth->db_column('user_acc', 'id')];?>">
										<?php echo $user[$this->flexi_auth->db_column('user_acc', 'email')];?>
									</a>
								</td>
                                                                <td>
                                                                        <?php echo $user['upro_id'];?>
                                                                </td>
								<td>
									<?php echo $user['upro_first_name'];?>
								</td>
								<td>
									<?php echo $user['upro_last_name'];?>
								</td>
								<td class="align_ctr">
									<?php echo $user['upro_city'];?>
								</td>
								<td class="align_ctr">
									<?php echo $user['upro_country'];?>
								</td>
								
							</tr>
						<?php } ?>
						</tbody>
						<tfoot>
							<tr>
                                                            <!--
								<td colspan="7">
									<?php $disable = (! $this->flexi_auth->is_privileged('Update Users') && ! $this->flexi_auth->is_privileged('Delete Users')) ? 'disabled="disabled"' : NULL;?>
									<input type="submit" name="update_users" value="Update / Delete Users" class="link_button large" <?php echo $disable; ?>/>
								</td>
                                                            -->    
							</tr>
						</tfoot>
					<?php } else { ?>
						<tbody>
							<tr>
								<td colspan="7" class="highlight_red">
									No users are available.
								</td>
							</tr>
						</tbody>
					<?php } ?>
					</table>
					
				<?php if (! empty($pagination['links'])) { ?>
					<div id="pagination" class="w100 frame">
						<p>Pagination: <?php echo $pagination['total_users'];?> users match your search</p>
						<p>Links: <?php echo $pagination['links'];?></p>
					</div>
				<?php } ?>
					
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