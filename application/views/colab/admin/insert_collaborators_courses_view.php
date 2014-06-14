<?php $this->load->view('includes/head'); ?> 

<body id="insert_update_course">

<div id="body_wrap">
    <!-- Header -->  
    <?php $this->load->view('includes/header'); ?> 

    <!-- Demo Navigation -->
    <?php $this->load->view('includes/colab_header'); ?> 

    <!-- Intro Content -->
    <div class="content_wrap intro_bg">
        <div class="content clearfix">
            <div class="col100">
                <h2>Admin: Edit Courses</h2>
                <p>It includes functions to aid the management of courses by site administrators.</p>
            </div>		
        </div>
    </div>

    <!-- Main Content -->
    <div class="content_wrap main_content_bg">
        <div class="content clearfix">
           <div class="col100">
               <h2>Insertar curso por colaborador</h2>
                           
            <?php if (! empty($message)) { ?>
                <div id="message">
                        <?php echo $message; ?>
                </div>
            <?php } 
                echo form_open(current_url());?>  	
                <fieldset>
                    <legend>Datos del curso</legend>
                    <ul>
                        <li class="info_req">
                            <label for="course_dates_inicio">Fecha de comienzo del curso:</label>
<!--                            <form>-->
                                <?php 
                                $sql = "SELECT course_dates_inicio FROM courses";
                                $query = $this->db->query($sql);
                                ?>
                                <select id="update_course_dates_inicio" name="update_course_dates_inicio">
                                    <?php foreach ($query->result_array() as $row) {
                                        echo '<option value="'.$row['course_dates_inicio'].'">'.$row['course_dates_inicio'].'</option>';
                                    }?>
                                </select>
<!--                            </form>-->
                        </li>
                         <li class="info_req">
                            <label for="course_upro_asoc_id">C&oacute;digo de Colaborador:</label>
<!-- Inicio cÃ³digo lista desplegable -->
                            <!--<form>-->
                                <?php 
                                    $sql = "SELECT upro_asoc_id FROM collaborators_user_profiles";
                                    $query = $this->db->query($sql);
                                ?>
                                <select id="upro_asoc_id" name="update_upro_asoc_id">
                                    <?php foreach ($query->result_array() as $row) {
                                            echo '<option value="'.$row['upro_asoc_id'].'">'.$row['upro_asoc_id'].'</option>';
                                    }?>
                                </select>
                            
<!-- Fin de cÃ³digo -->
                        </li>
                        <li class="info_req">
                            <label for="course_students_id">Estudiante (n&ordm; de factura):</label>
                            <input type="text" id="course_students_id" name="update_course_students_id" value="<?php echo set_value('update_course_students_id',$course['course_students_id']);?>"/>
                        </li>
                        <li>
                            <input type="submit" name="update_users_account" id="submit" value="Enviar" class="link_button large"/>
                        </li>
                        
                    </ul>
                    </form>
                </fieldset>
                <fieldset>
                    <table>
                        <tr>
                            <th>ID Colaborador</th>
                            <th>Fecha del Curso</th>
                            <th>Estudiantes (Nº de factura)</th>
                            <th>Total de estudiantes</th>
                        </tr>
                            <?php echo $table_courses; ?>
                    </table>
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