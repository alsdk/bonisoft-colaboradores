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
                    <h2>Informaci&oacute;n Sobre los Cursos</h2>
                    <p>Consulte la informaci&oacute;n de sus estudiantes</p>
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
                        <form>
                          <fieldset>
                              <table>
                                  <tr>
                                      <th>Fecha del Curso</th>
                                      <th>Estudiantes (Nº de factura)</th>
                                      <th>Total de estudiantes</th>
                                  </tr>
                                  <?php echo $table_courses; ?>
                              </table>
                          </fieldset>
                        </form>
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