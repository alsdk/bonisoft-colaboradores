<?php $this->load->view('includes/head'); ?> 

<body id="register">

<div id="body_wrap">
	<!-- Header -->  
	<?php $this->load->view('includes/header'); ?> 
        
	<!-- Navigation -->
	<?php $this->load->view('includes/colab_header'); ?> 
	
	<!-- Intro Content -->
	<div class="content_wrap intro_bg">
            <div class="content clearfix">
                <div class="col100">
                    <h2>Descarga de Folletos</h2>
                    <p>Descargue sus folletos en el idioma que desee.</p>
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
                          <fieldset>
                              <?php 
                              // @TODO mover los chequeos al modelo y usar flashdata para los errores.
                              // Si el usuario es colaborador (uacc_group_fk == 1) y el admin establecio un codigo
                              // de colaborador para la cuenta mostrar el select de idiomas.

                              // Perfil de colaborador ?
                              if ($user['uacc_group_fk'] != 1) {
                                  echo "<b>Tu cuenta no es de colaborador.</b>";
                              }
                              // Tiene el codigo de colaborador establecido ?
                              elseif ( (strlen($user['upro_asoc_id']) <= 1)) {
                                  echo "<b>No tienes un c&ocute;digo de colaborador, el administrador debe asignarte uno.</b>";
                              }
                              // Mostrar form
                              else {
                                  echo form_open();
                              ?>
                                  Desde aqu&iacute; puede descargar sus folletos personalizados con el c&oacute;digo de colaborador y descuento para sus alumnos.<br /><br />
                                  Seleccione el idioma del folleto: <?php echo form_dropdown('language', $idiomas_folletos);?><br />
                                  <?php echo form_submit('get_leaflet', 'Descargar');?>
                                  <?php echo form_close(); 
                              }?>
                          </fieldset>
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