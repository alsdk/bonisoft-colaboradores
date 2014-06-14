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
                    <h2>Registro</h2>
                    <p>Rellene el siguiente formulario para registrarse como colaborador.</p>
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

                    <?php echo form_open(current_url()); ?>  	
                            <fieldset>
                                <legend>Datos b&aacute;sicos: </legend>
                                <ul>
                                    <li class="info_req">
                                        <label for="first_name">Nombre:</label>
                                        <input type="text" id="first_name" name="register_first_name" value="<?php echo set_value('register_first_name');?>"/>
                                    </li>
                                    <li class="info_req">
                                        <label for="last_name">Apellidos:</label>
                                        <input type="text" id="last_name" name="register_last_name" value="<?php echo set_value('register_last_name');?>"/>
                                    </li>

                                    <li class="info_req">
                                        <label for="address">Direcci&oacute;n:</label>
                                        <input type="text" id="address" name="register_address" value="<?php echo set_value('register_address');?>"/>
                                    </li>
                                    <li class="info_req">
                                        <label for="postal_code">C&oacute;digo Postal:</label>
                                        <input type="text" id="postal_code" name="register_postal_code" value="<?php echo set_value('register_postal_code');?>"/>
                                    </li>
                                    <li class="info_req">
                                        <label for="city">Ciudad:</label>
                                        <input type="text" id="city" name="register_city" value="<?php echo set_value('register_city');?>"/>
                                    </li>
                                    <li class="info_req">
                                        <label for="last_name">País:</label>
                                        <select style="" title="" name="country" id="easy-form-country">
                                            <option value="AD">Andorra</option><option value="AM">Armenia</option><option value="AT">Austria</option><option value="AZ">Azerbaijan</option><option value="BY">Belarus</option><option value="BE">Belgium</option><option value="BA">Bosnia And Herzegovina</option><option value="BG">Bulgaria</option><option value="HR">Croatia (Hrvatska)</option><option value="CY">Cyprus</option><option value="CZ">Czech Republic</option><option value="DK">Denmark</option><option value="EE">Estonia</option><option value="FO">Faroe Islands</option><option value="FI">Finland</option><option value="FR">France</option><option value="DE">Germany</option><option value="GR">Greece</option><option value="GL">Greenland</option><option value="HU">Hungary</option><option value="IS">Iceland</option><option value="IE">Ireland</option><option value="IL">Israel</option><option value="IT">Italy</option><option value="LV">Latvia</option><option value="LI">Liechtenstein</option><option value="LT">Lithuania</option><option value="LU">Luxembourg</option><option value="MK">Macedonia</option><option value="MT">Malta</option><option value="MD">Moldova</option><option value="MC">Monaco</option><option value="NL">Netherlands</option><option value="NO">Norway</option><option value="PL">Poland</option><option value="PT">Portugal</option><option value="RO">Romania</option><option value="RU">Russia</option><option value="SM">San Marino</option><option value="SK">Slovak Republic</option><option value="SI">Slovenia</option>
                                            <option value="ES" selected="selected">Spain</option>
                                            <option value="SE">Sweden</option><option value="CH">Switzerland</option><option value="UA">Ukraine</option><option value="UK">United Kingdom</option><option value="VA">Vatican Ciudad (Holy See)</option><option value="YU">Yugoslavia</option><option value="AF">Afghanistan</option><option value="AL">Albania</option><option value="DZ">Algeria</option><option value="AS">American Samoa</option><option value="AO">Angola</option><option value="AI">Anguilla</option><option value="AQ">Antarctica</option><option value="AG">Antigua And Barbuda</option><option value="AR">Argentina</option><option value="AW">Aruba</option><option value="AU">Australia</option><option value="BS">Bahamas</option><option value="BH">Bahrain</option><option value="BD">Bangladesh</option><option value="BB">Barbados</option><option value="BZ">Belize</option><option value="BJ">Benin</option><option value="BM">Bermuda</option><option value="BT">Bhutan</option><option value="BO">Bolivia</option><option value="BW">Botswana</option><option value="BV">Bouvet Island</option><option value="BR">Brazil</option><option value="IO">British Indian Ocean Territory</option><option value="BN">Brunei</option><option value="BF">Burkina Faso</option><option value="BI">Burundi</option><option value="KH">Cambodia</option><option value="CM">Cameroon</option><option value="CA">Canada</option><option value="CV">Cape Verde</option><option value="KY">Cayman Islands</option><option value="CF">Central African Republic</option><option value="TD">Chad</option><option value="CL">Chile</option><option value="CN">China</option><option value="CX">Christmas Island</option><option value="CC">Cocos (Keeling) Islands</option><option value="CO">Colombia</option><option value="KM">Comoros</option><option value="CG">Congo</option><option value="CK">Cook Islands</option><option value="CR">Costa Rica</option><option value="CI">Cote D'Ivorie (Ivory Coast)</option><option value="CU">Cuba</option><option value="CD">Democratic Republic Of Congo (Zaire)</option><option value="DJ">Djibouti</option><option value="DM">Dominica</option><option value="DO">Dominican Republic</option><option value="TP">East Timor</option><option value="EC">Ecuador</option><option value="EG">Egypt</option><option value="SV">El Salvador</option><option value="GQ">Equatorial Guinea</option><option value="ER">Eritrea</option><option value="ET">Ethiopia</option><option value="FK">Falkland Islands (Malvinas)</option><option value="FJ">Fiji</option><option value="GF">French Guinea</option><option value="FX">France, Metropolitan</option><option value="PF">French Polynesia</option><option value="TF">French Southern Territories</option><option value="GA">Gabon</option><option value="GM">Gambia</option><option value="GE">Georgia</option><option value="GH">Ghana</option><option value="GI">Gibraltar</option><option value="GD">Grenada</option><option value="GP">Guadeloupe</option><option value="GU">Guam</option><option value="GT">Guatemala</option><option value="GN">Guinea</option><option value="GW">Guinea-Bissau</option><option value="GY">Guyana</option><option value="HT">Haiti</option><option value="HM">Heard And McDonald Islands</option><option value="HN">Honduras</option><option value="HK">Hong Kong</option><option value="IN">India</option><option value="ID">Indonesia</option><option value="IR">Iran</option><option value="IQ">Iraq</option><option value="JM">Jamaica</option><option value="JP">Japan</option><option value="JO">Jordan</option><option value="KZ">Kazakhstan</option><option value="KE">Kenya</option><option value="KI">Kiribati</option><option value="KW">Kuwait</option><option value="KG">Kyrgyzstan</option><option value="LA">Laos</option><option value="LB">Lebanon</option><option value="LS">Lesotho</option><option value="LR">Liberia</option><option value="LY">Libya</option><option value="MO">Macau</option><option value="MG">Madagascar</option><option value="MW">Malawi</option><option value="MY">Malaysia</option><option value="MV">Maldives</option><option value="ML">Mali</option><option value="MH">Marshall Islands</option><option value="MQ">Martinique</option><option value="MR">Mauritania</option><option value="MU">Mauritius</option><option value="YT">Mayotte</option><option value="MX">Mexico</option><option value="FM">Micronesia</option><option value="MN">Mongolia</option><option value="MS">Montserrat</option><option value="MA">Morocco</option><option value="MZ">Mozambique</option><option value="MM">Myanmar (Burma)</option><option value="NA">Namibia</option><option value="NR">Nauru</option><option value="NP">Nepal</option><option value="AN">Netherlands Antilles</option><option value="NC">New Caledonia</option><option value="NZ">New Zealand</option><option value="NI">Nicaragua</option><option value="NE">Niger</option><option value="NG">Nigeria</option><option value="NU">Niue</option><option value="NF">Norfolk Island</option><option value="KP">North Korea</option><option value="MP">Northern Mariana Islands</option><option value="OM">Oman</option><option value="PK">Pakistan</option><option value="PW">Palau</option><option value="PA">Panama</option><option value="PG">Papua New Guinea</option><option value="PY">Paraguay</option><option value="PE">Peru</option><option value="PH">Philippines</option><option value="PN">Pitcairn</option><option value="PR">Puerto Rico</option><option value="QA">Qatar</option><option value="RE">Reunion</option><option value="RW">Rwanda</option><option value="SH">Saint Helena</option><option value="KN">Saint Kitts And Nevis</option><option value="LC">Saint Lucia</option><option value="PM">Saint Pierre And Miquelon</option><option value="VC">Saint Vincent And The Grenadines</option><option value="ST">Sao Tome And Principe</option><option value="SA">Saudi Arabia</option><option value="SN">Senegal</option><option value="SC">Seychelles</option><option value="SL">Sierra Leone</option><option value="SG">Singapore</option><option value="SB">Solomon Islands</option><option value="SO">Somalia</option><option value="ZA">South Africa</option><option value="GS">South Georgia And South Sandwich Islands</option><option value="KR">South Korea</option><option value="LK">Sri Lanka</option><option value="SD">Sudan</option><option value="SR">Suriname</option><option value="SJ">Svalbard And Jan Mayen</option><option value="SZ">Swaziland</option><option value="SY">Syria</option><option value="TW">Taiwan</option><option value="TJ">Tajikistan</option><option value="TZ">Tanzania</option><option value="TH">Thailand</option><option value="TG">Togo</option><option value="TK">Tokelau</option><option value="TO">Tonga</option><option value="TT">Trinidad And Tobago</option><option value="TN">Tunisia</option><option value="TR">Turkey</option><option value="TM">Turkmenistan</option><option value="TC">Turks And Caicos Islands</option><option value="TV">Tuvalu</option><option value="UG">Uganda</option><option value="AE">United Arab Emirates</option><option value="US">United States</option><option value="UM">United States Minor Outlying Islands</option><option value="UY">Uruguay</option><option value="UZ">Uzbekistan</option><option value="VU">Vanuatu</option><option value="VE">Venezuela</option><option value="VN">Vietnam</option><option value="VG">Virgin Islands (British)</option><option value="VI">Virgin Islands (US)</option><option value="WF">Wallis And Futuna Islands</option><option value="EH">Western Sahara</option><option value="WS">Western Samoa</option><option value="YE">Yemen</option><option value="ZM">Zambia</option><option value="ZW">Zimbabwe</option></select>
                                    </li>
                                </ul>
                            </fieldset>

<!--					<fieldset>
                                            <legend>Contact Details</legend>
                                            <ul>
                                                    <li class="info_req">
                                                            <label for="phone_number">Direcci&oacute;n:</label>
                                                            <input type="text" id="phone_number" name="register_address" value="<?php echo set_value('register_address');?>"/>
                                                    </li>
                                                    <li>
                                                            <label for="newsletter">Subscribe to Ciudad:</label>
                                                            <input type="checkbox" id="newsletter" name="register_city" value="1" <?php echo set_checkbox('register_city',1);?>/>
                                                    </li>
                                            </ul>
                                    </fieldset>-->

                                    <fieldset>
                                            <legend>Datos de acceso</legend>
                                            <ul>
                                                <li class="info_req">
                                                        <label for="email_address">Email de contacto:</label>
                                                        <input type="text" id="email_address" name="register_email_address" value="<?php echo set_value('register_email_address');?>" class="tooltip_trigger"
                                                                title="This application requires that upon registration, you will need to activate your account via clicking a link that is sent to your email address."
                                                        />
                                                </li>
                                                <li class="info_req">
                                                        <label for="username">Usuario:</label>
                                                        <input type="text" id="username" name="register_username" value="<?php echo set_value('register_username');?>" class="tooltip_trigger"
                                                                title="Set a username that can be used to login with."/>
                                                </li>
                                                <li>							
                                                        <small>
                                                                <strong>Por razones de seguridad, han sido definidas las siguientes reglas de validaci&oacute;n:</strong><br/>
                                                                La longitud de la contrase&ntilde;a ha de ser de al menos <?php echo $this->flexi_auth->min_password_length(); ?> caracteres de longitud.<br/>Admite letras, n&uacute;meros, guinoes, guiones bajos, puntos y coma.
                                                        </small>
                                                </li>
                                                <li class="info_req">
                                                        <label for="password">Contrase&ntilde;a:</label>
                                                        <input type="password" id="password" name="register_password" value="<?php echo set_value('register_password');?>"/>
                                                </li>
                                                <li class="info_req">
                                                        <label for="confirm_password">Confirma contrase&ntilde;a:</label>
                                                        <input type="password" id="confirm_password" name="register_confirm_password" value="<?php echo set_value('register_confirm_password');?>"/>
                                                </li>
                                                <li class="info_req">
                                                            <label for="privacy">He leido el <a href="<?php echo base_url();?>auth/lopd" target="_blank">Aviso de Protecci&oacute;n de datos</a>:</label>
                                                            <input type="checkbox" id="privacy" name="register_privacy" value="1" <?php echo set_checkbox('register_privacy',1);?>/>
                                                </li>
                                                <li>
                                                        <hr/>
<!--								<label for="submit">Register:</label>-->
                                                        <input type="submit" name="register_user" id="submit" value="Enviar" class="link_button large"/>
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