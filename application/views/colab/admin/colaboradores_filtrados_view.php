<?php $this->load->view('includes/head'); ?> 

<body id="list_users">

<div id="body_wrap">
	<!-- Header -->  
	<?php $this->load->view('includes/header'); ?> 

	<!-- Demo Navigation -->
	<?php $this->load->view('includes/colab_header'); ?> 
	
	<!-- Intro Content -->
	<div class="content_wrap intro_bg">
		<div class="content clearfix">
			<div class="col100">
				<h2>Admin: <?php echo $titulo;?></h2>
				<p>It includes functions to return custom database queries on user account data.</p>
			<?php if (isset($status) && $status == 'failed_login_users') { ?>
				<p>This page demonstrates a database query to display all user accounts that have a high number of failed login attempts since the users last successful login. Such data could be used to highlight potential brute force hacking attempts on user accounts.</p>
			<?php } else { ?>
				<?php if (isset($status) && $status == 'active_users') { ?>
					<p>This page demonstrates a database query to display all users that have activated their account since registration.</p>
				<?php } else { ?>
					<p>This page demonstrates a database query to display all users that have not activated their account since registration.</p>
				<?php } ?>
			<?php } ?>
			</div>		
		</div>
	</div>
	
	<!-- Main Content -->
	<div class="content_wrap main_content_bg">
            
                    
            
		<div class="content clearfix">
			<div class="col100">
				<h2><?php echo $titulo;?></h2>
                                
                                <form action="<?php echo base_url();?>auth_admin/list_colaboradores_filtrados/<?php echo $campo_filtro;?>" method="post" accept-charset="utf-8">					<fieldset>
        <?php //echo form_open(current_url());	?>       
            <legend>Search Filter</legend>

                <label for="search">Search Users:</label>
                <?php 
                    if ($campo_filtro != 'upro_country') {
                        echo '<input type="text" id="valor_filtro" name="valor_filtro" value="" class="tooltip_trigger"
                        title="This example searches for users by email, first name and last name." />';
                    } else {
                        ?>
                            <select style="" title="" id="valor_filtro" name="valor_filtro">
                                <option value="AD">Andorra</option><option value="AM">Armenia</option><option value="AT">Austria</option><option value="AZ">Azerbaijan</option><option value="BY">Belarus</option><option value="BE">Belgium</option><option value="BA">Bosnia And Herzegovina</option><option value="BG">Bulgaria</option><option value="HR">Croatia (Hrvatska)</option><option value="CY">Cyprus</option><option value="CZ">Czech Republic</option><option value="DK">Denmark</option><option value="EE">Estonia</option><option value="FO">Faroe Islands</option><option value="FI">Finland</option><option value="FR">France</option><option value="DE">Germany</option><option value="GR">Greece</option><option value="GL">Greenland</option><option value="HU">Hungary</option><option value="IS">Iceland</option><option value="IE">Ireland</option><option value="IL">Israel</option><option value="IT">Italy</option><option value="LV">Latvia</option><option value="LI">Liechtenstein</option><option value="LT">Lithuania</option><option value="LU">Luxembourg</option><option value="MK">Macedonia</option><option value="MT">Malta</option><option value="MD">Moldova</option><option value="MC">Monaco</option><option value="NL">Netherlands</option><option value="NO">Norway</option><option value="PL">Poland</option><option value="PT">Portugal</option><option value="RO">Romania</option><option value="RU">Russia</option><option value="SM">San Marino</option><option value="SK">Slovak Republic</option><option value="SI">Slovenia</option>
                                <option value="ES" selected="selected">Spain</option><option value="SE">Sweden</option><option value="CH">Switzerland</option><option value="UA">Ukraine</option><option value="UK">United Kingdom</option><option value="VA">Vatican Ciudad (Holy See)</option><option value="YU">Yugoslavia</option><option value="AF">Afghanistan</option><option value="AL">Albania</option><option value="DZ">Algeria</option><option value="AS">American Samoa</option><option value="AO">Angola</option><option value="AI">Anguilla</option><option value="AQ">Antarctica</option><option value="AG">Antigua And Barbuda</option><option value="AR">Argentina</option><option value="AW">Aruba</option><option value="AU">Australia</option><option value="BS">Bahamas</option><option value="BH">Bahrain</option><option value="BD">Bangladesh</option><option value="BB">Barbados</option><option value="BZ">Belize</option><option value="BJ">Benin</option><option value="BM">Bermuda</option><option value="BT">Bhutan</option><option value="BO">Bolivia</option><option value="BW">Botswana</option><option value="BV">Bouvet Island</option><option value="BR">Brazil</option><option value="IO">British Indian Ocean Territory</option><option value="BN">Brunei</option><option value="BF">Burkina Faso</option><option value="BI">Burundi</option><option value="KH">Cambodia</option><option value="CM">Cameroon</option><option value="CA">Canada</option><option value="CV">Cape Verde</option><option value="KY">Cayman Islands</option><option value="CF">Central African Republic</option><option value="TD">Chad</option><option value="CL">Chile</option><option value="CN">China</option><option value="CX">Christmas Island</option><option value="CC">Cocos (Keeling) Islands</option><option value="CO">Colombia</option><option value="KM">Comoros</option><option value="CG">Congo</option><option value="CK">Cook Islands</option><option value="CR">Costa Rica</option><option value="CI">Cote D'Ivorie (Ivory Coast)</option><option value="CU">Cuba</option><option value="CD">Democratic Republic Of Congo (Zaire)</option><option value="DJ">Djibouti</option><option value="DM">Dominica</option><option value="DO">Dominican Republic</option><option value="TP">East Timor</option><option value="EC">Ecuador</option><option value="EG">Egypt</option><option value="SV">El Salvador</option><option value="GQ">Equatorial Guinea</option><option value="ER">Eritrea</option><option value="ET">Ethiopia</option><option value="FK">Falkland Islands (Malvinas)</option><option value="FJ">Fiji</option><option value="GF">French Guinea</option><option value="FX">France, Metropolitan</option><option value="PF">French Polynesia</option><option value="TF">French Southern Territories</option><option value="GA">Gabon</option><option value="GM">Gambia</option><option value="GE">Georgia</option><option value="GH">Ghana</option><option value="GI">Gibraltar</option><option value="GD">Grenada</option><option value="GP">Guadeloupe</option><option value="GU">Guam</option><option value="GT">Guatemala</option><option value="GN">Guinea</option><option value="GW">Guinea-Bissau</option><option value="GY">Guyana</option><option value="HT">Haiti</option><option value="HM">Heard And McDonald Islands</option><option value="HN">Honduras</option><option value="HK">Hong Kong</option><option value="IN">India</option><option value="ID">Indonesia</option><option value="IR">Iran</option><option value="IQ">Iraq</option><option value="JM">Jamaica</option><option value="JP">Japan</option><option value="JO">Jordan</option><option value="KZ">Kazakhstan</option><option value="KE">Kenya</option><option value="KI">Kiribati</option><option value="KW">Kuwait</option><option value="KG">Kyrgyzstan</option><option value="LA">Laos</option><option value="LB">Lebanon</option><option value="LS">Lesotho</option><option value="LR">Liberia</option><option value="LY">Libya</option><option value="MO">Macau</option><option value="MG">Madagascar</option><option value="MW">Malawi</option><option value="MY">Malaysia</option><option value="MV">Maldives</option><option value="ML">Mali</option><option value="MH">Marshall Islands</option><option value="MQ">Martinique</option><option value="MR">Mauritania</option><option value="MU">Mauritius</option><option value="YT">Mayotte</option><option value="MX">Mexico</option><option value="FM">Micronesia</option><option value="MN">Mongolia</option><option value="MS">Montserrat</option><option value="MA">Morocco</option><option value="MZ">Mozambique</option><option value="MM">Myanmar (Burma)</option><option value="NA">Namibia</option><option value="NR">Nauru</option><option value="NP">Nepal</option><option value="AN">Netherlands Antilles</option><option value="NC">New Caledonia</option><option value="NZ">New Zealand</option><option value="NI">Nicaragua</option><option value="NE">Niger</option><option value="NG">Nigeria</option><option value="NU">Niue</option><option value="NF">Norfolk Island</option><option value="KP">North Korea</option><option value="MP">Northern Mariana Islands</option><option value="OM">Oman</option><option value="PK">Pakistan</option><option value="PW">Palau</option><option value="PA">Panama</option><option value="PG">Papua New Guinea</option><option value="PY">Paraguay</option><option value="PE">Peru</option><option value="PH">Philippines</option><option value="PN">Pitcairn</option><option value="PR">Puerto Rico</option><option value="QA">Qatar</option><option value="RE">Reunion</option><option value="RW">Rwanda</option><option value="SH">Saint Helena</option><option value="KN">Saint Kitts And Nevis</option><option value="LC">Saint Lucia</option><option value="PM">Saint Pierre And Miquelon</option><option value="VC">Saint Vincent And The Grenadines</option><option value="ST">Sao Tome And Principe</option><option value="SA">Saudi Arabia</option><option value="SN">Senegal</option><option value="SC">Seychelles</option><option value="SL">Sierra Leone</option><option value="SG">Singapore</option><option value="SB">Solomon Islands</option><option value="SO">Somalia</option><option value="ZA">South Africa</option><option value="GS">South Georgia And South Sandwich Islands</option><option value="KR">South Korea</option><option value="LK">Sri Lanka</option><option value="SD">Sudan</option><option value="SR">Suriname</option><option value="SJ">Svalbard And Jan Mayen</option><option value="SZ">Swaziland</option><option value="SY">Syria</option><option value="TW">Taiwan</option><option value="TJ">Tajikistan</option><option value="TZ">Tanzania</option><option value="TH">Thailand</option><option value="TG">Togo</option><option value="TK">Tokelau</option><option value="TO">Tonga</option><option value="TT">Trinidad And Tobago</option><option value="TN">Tunisia</option><option value="TR">Turkey</option><option value="TM">Turkmenistan</option><option value="TC">Turks And Caicos Islands</option><option value="TV">Tuvalu</option><option value="UG">Uganda</option><option value="AE">United Arab Emirates</option><option value="US">United States</option><option value="UM">United States Minor Outlying Islands</option><option value="UY">Uruguay</option><option value="UZ">Uzbekistan</option><option value="VU">Vanuatu</option><option value="VE">Venezuela</option><option value="VN">Vietnam</option><option value="VG">Virgin Islands (British)</option><option value="VI">Virgin Islands (US)</option><option value="WF">Wallis And Futuna Islands</option><option value="EH">Western Sahara</option><option value="WS">Western Samoa</option><option value="YE">Yemen</option><option value="ZM">Zambia</option><option value="ZW">Zimbabwe</option>
                            </select>
                 <?php
                 }
                ?>
                
                <input type="submit" name="search_users" value="Search" class="link_button"/>
               
 <!--<a href="<?php echo base_url();?>spanishon.com/colaboradores/auth_admin/list_colaboradores_filtrados/<?php echo $campo_filtro;?>" class="link_button grey">Reset</a>-->

        </fieldset>
        </form>	


			<?php if (! empty($message)) { ?>
				<div id="message">
					<?php echo $message; ?>
				</div>
			<?php } ?>
				
				<?php echo form_open(current_url()); ?>
					<table>
						<thead>
							<tr>
                                                            <th>C&oacute;digo asociado</th>
                                                            <th>Nombre</th>
                                                            <th>Apellidos</th>
                                                            <th>Ciudad</th>
                                                            <th>País</th>
							</tr>
						</thead>
					<?php if (! empty($users)) { ?>
						<tbody>
						<?php foreach ($users as $user) { ?>
							<tr>
                                        			<td class="align_ctr">
									<?php echo $user['upro_asoc_id'];?>
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
					<?php } else { ?>
						<tbody>
							<tr>
								<td colspan="<?php echo (isset($status) && $status == 'failed_login_users') ? '6' : '5'; ?>" class="highlight_red">
                                                                    No se ha encontrado ning&uacute;n usuario con esos par&aacute;metros de b&uacute;squeda.
								</td>
							</tr>
						</tbody>
					<?php } ?>
					</table>
				<?php echo form_close(); ?>
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