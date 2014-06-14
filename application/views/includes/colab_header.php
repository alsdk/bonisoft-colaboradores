	<div class="content_wrap nav_bg">
		<div id="sub_nav_wrap" class="content">
			<ul id="sub_nav">

			<?php if (! $this->flexi_auth->is_logged_in_via_password()) { ?>
				<li>
					<a href="<?php echo base_url();?>auth"><?php echo ($this->flexi_auth->is_logged_in()) ? 'Login via Password' : 'Acceder';?></a>
				</li>

			<?php } ?>
			<?php
                        // SI NO SE HA IDENTIFICADO SOLO PODR�? VER EL LOGIN Y EL REGISTRO
                        if (! $this->flexi_auth->is_logged_in()) { ?>
				<li>
					<a href="<?php echo base_url();?>auth/register_account">Registro</a>
				</li>
			<?php } else { ?>
				<li>
					<a href="<?php echo base_url();?>auth/logout">Cerrar sesi&oacute;n</a>
				</li>

				
				<li class="css_nav_dropmenu">
					<a href="<?php echo base_url();?>auth_public/">Mis datos</a>
					<ul>
                                                <!--<li>
							<a href="<?php echo base_url();?>auth_public/">Public Dashboard</a>
						</li>-->
						<li class="header">Seleccione una opci&oacute;n</li>
						<li>
							<a href="<?php echo base_url();?>auth_public/update_account">Actualizar Detalles de la Cuenta</a>
						</li>
						<li>
							<a href="<?php echo base_url();?>auth_public/update_email">Actualizar Email</a>
						</li>
						<li>
							<a href="<?php echo base_url();?>auth_public/change_password">Actualizar Contrase&ntilde;a</a>
						</li>
                                                <li class="header"></li>
                                                <li>
							<a href="<?php echo base_url();?>auth_public/view_courses">Planning de cursos</a>
						</li>
                                                <li>
                                                        <a href="<?php echo base_url();?>auth_public/get_leaflet">Descarga de folletos</a>
                                                </li>
                                                <!--<li>
							<a href="">Generar Recibos comisi&oacute;n a cobrar</a>
						</li>
                                                <li>
                                                    <a href="">Hist&oacute;rico de Recibos generados</a>
						</li>-->
                                                <!--<li>
							<a href="<?php echo base_url();?>auth_public/manage_address_book">Manage Direcci&oacute;n Book</a>
						</li>-->
					</ul>		
				</li>
                            <?php
              // SI ES ADMINISTRADOR
                            if ($this->flexi_auth->is_admin()) 
                            {
                                 ?>
				<li class="css_nav_dropmenu">
					<a href="<?php echo base_url();?>auth_admin/">Panel de Control Administrador</a>
					<ul>
                                            <li>
							<a href="<?php echo base_url();?>auth_admin/manage_user_accounts">Manage User Accounts</a>			
                                            </li>
                                            <?php //print_r($this->flexi_auth->get_user_group_id());
                                            if ($this->flexi_auth->get_user_group_id() == 3) { // MASTER ADMIN bonisoft ?>
						<li>
							<a href="<?php echo base_url();?>auth_admin/">Admin Dashboard</a>
						</li>
						<li class="header">Seleccione una opci&oacute;n</li>
						
						<li>
							<a href="<?php echo base_url();?>auth_admin/manage_user_groups">Manage User Groups</a>			
						</li>
						<li>
							<a href="<?php echo base_url();?>auth_admin/manage_privileges">Manage User Privileges</a>			
						</li>
                                                <li>
							<a href="<?php echo base_url();?>auth_admin/failed_login_users">List Failed Logins</a>			
						</li>	
                                            <?php   }   ?>
                                                
						<li>
							<a href="<?php echo base_url();?>auth_admin/list_user_status/active">List Active Users</a>
						</li>	
						<li>
							<a href="<?php echo base_url();?>auth_admin/list_user_status/inactive">List Inactive Users</a>
						</li>	
						<li>
							<a href="<?php echo base_url();?>auth_admin/delete_unactivated_users">List Unactivated Users</a>
						</li>
                                                
                                                <li>
							<a href="<?php echo base_url();?>courses_controller/edit_courses">Cursos por colaborador</a>
						</li>
                                                
<!-- Inicio código Antonio --><!-- LISTADOS ANTONIO -->
                                                
                                                <li>
                                                    <a href="<?php echo base_url();?>courses_controller/list_courses">Intoducir fechas cursos</a>
                                                </li>
                                                <li>
							<a href="<?php echo base_url();?>auth_admin/list_colaboradores_filtrados/upro_country">Listado de colaboradores por pa&iacute;s</a>
						</li>
<!-- Fin código Antonio -->                     <li>
							<a href="<?php echo base_url();?>auth_admin/list_colaboradores_filtrados/upro_asoc_id">Listado de colaboradores por C&oacute;digo</a>
						</li>
                                                <li>
							<a href="<?php echo base_url();?>auth_admin/list_colaboradores_filtrados/upro_first_name">Listado de colaboradores por Nombre</a>
						</li>
						
					</ul>		
				</li>
                         <?php   }   ?>
				
<!--                                <li>
					<a href="http://spanishon.com/calendario-y-reservas" target="_blank">Calendario de Reservas de cursos</a>
				</li>-->
                            <?php } ?>
			</ul>
		</div>
	</div>