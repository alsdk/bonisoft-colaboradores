<?php $this->load->view('includes/head'); ?> 

<!-- This document was successfully checked as HTML5!-->

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
               <h2>Insertar / Eliminar Curso</h2>
                           
            <?php if (! empty($message)) { ?>
                <div id="message">
                        <?php echo $message; ?>
                </div>
            <?php } 
                echo form_open('courses_controller/insert_courses');?>  	
                <fieldset>
                    <legend>Datos del curso</legend>
                    <ul>
                        <li class="info_req">
                            <label for="course_date_day">Fecha de comienzo del curso:</label>
<!--                            <input type="text" id="course_date" name="update_course_date" value="<?php echo set_value('update_course_date',$course['course_date']);?>"/> -->
                            <select id="course_date_day" name="update_course_date_day">
                                <option value="01">01</option>
                                <option value="02">02</option>
                                <option value="03">03</option>
                                <option value="04">04</option>
                                <option value="05">05</option>
                                <option value="06">06</option>
                                <option value="07">07</option>
                                <option value="08">08</option>
                                <option value="09">09</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                                <option value="31">31</option>
                            </select>
                            
                            <select id="course_date_month" name="update_course_date_month">
                                <option value="01">01</option>
                                <option value="02">02</option>
                                <option value="03">03</option>
                                <option value="04">04</option>
                                <option value="05">05</option>
                                <option value="06">06</option>
                                <option value="07">07</option>
                                <option value="08">08</option>
                                <option value="09">09</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                            </select>
                            
                            <select id="course_date_year" name="update_course_date_year">
                                <option value="2014">2014</option>
                                <option value="2015">2015</option>
                                <option value="2016">2016</option>
                                <option value="2017">2017</option>
                                <option value="2018">2018</option>
                                <option value="2019">2019</option>
                                <option value="2020">2020</option>
                            </select>
                        </li>
                        <li class="info_req">
                             <label for="course_description">Descripci&oacute;n del curso:</label>
                            <input type="text" id="course_description" name="course_description"/>
                        <li>
                            <input type="submit" name="update_users_account" id="submit" value="Enviar" class="link_button large"/>
                        </li>
                    </ul>
                </fieldset>
               <?php echo form_close();?>
               
               
                <table>
                    <tr>
                        <th>ID Curso</th>
                        <th>Fecha de inicio del curso</th>
                        <th>Descripci&oacute;n del curso</th>
                        <th>Borrar</th>
                    </tr>
                    <?php echo $table_courses; ?>
                </table>
            
            </div><!-- fin class="col100" -->
        </div> <!-- class="content clearfix -->
    </div>	

    <!-- Footer -->  
    <?php $this->load->view('includes/footer'); ?> 
</div>

<!-- Scripts -->  
<?php $this->load->view('includes/scripts'); ?> 

</body>
</html>