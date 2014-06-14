<?php $this->load->view('includes/head'); ?> 

<body id="update_user_account">

<div id="body_wrap">
	<!-- Header -->  
	<?php $this->load->view('includes/header'); ?> 

	<!-- Demo Navigation -->
	<?php $this->load->view('includes/colab_header'); ?> 
	
	<!-- Intro Content -->
	<div class="content_wrap intro_bg">
		<div class="content clearfix">
			<div class="col100">
				<h2>Admin: Update User Account</h2>
				<p>It includes functions to aid the management of user accounts by site administrators.</p>
				<p>This page is similar to the page used by users updating their own account details, but has the additional option for the admininstrator to update the users user group.</p>
			</div>		
		</div>
	</div>
	
	<!-- Main Content -->
	<div class="content_wrap main_content_bg">
		<div class="content clearfix">
			<div class="col100">
				<h2>Update Account of <?php echo $user['upro_first_name'].' '.$user['upro_last_name']; ?></h2>
				<a href="<?php echo base_url();?>auth_admin/manage_user_accounts">Manage User Accounts</a>

			<?php if (! empty($message)) { ?>
				<div id="message">
					<?php echo $message; ?>
				</div>
			<?php } ?>
				
				<?php echo form_open(current_url());?>  	
					<fieldset>
						<legend>Personal Details</legend>
						<ul>
                                                            <li class="info_req">
								<label for="first_name">PRUEBA DE VISTA Nombre:</label>
								<input type="text" id="first_name" name="update_first_name" value="<?php echo set_value('update_first_name',$user['upro_first_name']);?>"/>
							</li>
							<li class="info_req">
								<label for="last_name">PRUEBA DE VISTA Apellidos:</label>
								<input type="text" id="last_name" name="update_last_name" value="<?php echo set_value('update_last_name',$user['upro_last_name']);?>"/>
							</li>
                                                        
                                                        <li class="info_req">
                                                            <label for="address">PRUEBA DE VISTA Direcci&oacute;n:</label>
								<input type="text" id="address" name="update_address" value="<?php echo set_value('update_address',$user['upro_address']);?>"/>
							</li>
                                                        <li class="info_req">
								<label for="city">Ciudad:</label>
								<input type="text" id="city" name="update_city" value="<?php echo set_value('update_city',$user['upro_city']);?>"/>
							</li>
                                                        <li class="info_req">
								<label for="country">País:</label>
                                                                <input type="text" id="country" name="update_country" value="<?php echo set_value('update_country',$user['upro_country']);?>"/>
                                                    
                                                                <?php
                                                                $countries = array( "AD" => "Andorra",                                                                                
                                                                                    "AM" => "Armenia",
                                                                                    "AT" => "Austria",
                                                                                    "AZ" => "Azerbaijan",
                                                                                    "BY" => "Belarus",
                                                                                    "BE" => "Belgium",
                                                                                    "BA" => "Bosnia And Herzegovina",
                                                                                    "BG" => "Bulgaria",
                                                                        "HR" => "Croatia (Hrvatska)",
                                                                        "CY" => "Cyprus",
                                                                        "CZ" => "Czech Republic",
                                                                        "DK" => "Denmark",
                                                                        "EE" => "Estonia",
                                                                        "FO" => "Faroe Islands",
                                                                        "FI" => "Finland",
                                                                        "FR" => "France",
                                                                        "DE" => "Germany",
                                                                        "GR" => "Greece",
                                                                        "GL" => "Greenland",
                                                                        "HU" => "Hungary",
                                                                        "IS" => "Iceland",
                                                                        "IE" => "Ireland",
                                                                        "IL" => "Israel",
                                                                        "IT" => "Italy",
                                                                        "LV" => "Latvia",
                                                                        "LI" => "Liechtenstein",
                                                                        "LT" => "Lithuania",
                                                                        "LU" => "Luxembourg",
                                                                         "MK" => "Macedonia",
                                                                         "MT" => "Malta",
                                                                         "MD" => "Moldova",
                                                                         "MC" => "Monaco",
                                                                         "NL" => "Netherlands",
                                                                         "NO" => "Norway",
                                                                         "PL" => "Poland",
                                                                         "PT" => "Portugal",
                                                                         "RO" => "Romania",
                                                                         "RU" => "Russia",
                                                                         "SM" => "San Marino",
                                                                         "SK" => "Slovak Republic",
                                                                         "SI" => "Slovenia",
                                                                         "ES" => "Spain",
                                                                         "SE" => "Sweden",
                                                                         "CH" => "Switzerland",
                                                                         "UA" => "Ukraine",
                                                                         "UK" => "United Kingdom",
                                                                         "VA" => "Vatican Ciudad (Holy See)",
                                                                         "YU" => "Yugoslavia",
                                                                         "AF" => "Afghanistan",
                                                                         "AL" => "Albania",
                                                                         "DZ" => "Algeria",
                                                                         "AS" => "American Samoa",
                                                                         "AO" => "Angola",
                                                                         "AI" => "Anguilla",
                                                                         "AQ" => "Antarctica",
                                                                         "AG" => "Antigua And Barbuda",
                                                                         "AR" => "Argentina",
                                                                         "AW" => "Aruba",
                                                                         "AU" => "Australia",
                                                                         "BS" => "Bahamas",
                                                                         "BH" => "Bahrain",
                                                                         "BD" => "Bangladesh",
                                                                         "BB" => "Barbados",
                                                                         "BZ" => "Belize",
                                                                         "BJ" => "Benin",
                                                                         "BM" => "Bermuda",
                                                                         "BT" => "Bhutan",
                                                                         "BO" => "Bolivia",
                                                                         "BW" => "Botswana",
                                                                         "BV" => "Bouvet Island",
                                                                         "BR" => "Brazil",
                                                                         "IO" => "British Indian Ocean Territory",
                                                                         "BN" => "Brunei",
                                                                         "BF" => "Burkina Faso",
                                                                         "BI" => "Burundi",
                                                                         "KH" => "Cambodia",
                                                                         "CM" => "Cameroon",
                                                                         "CA" => "Canada",
                                                                         "CV" => "Cape Verde",
                                                                         "KY" => "Cayman Islands",
                                                                         "CF" => "Central African Republic",
                                                                         "TD" => "Chad",
                                                                         "CL" => "Chile",
                                                                         "CN" => "China",
                                                                         "CX" => "Christmas Island",
                                                                         "CC" => "Cocos (Keeling) Islands",
                                                                         "CO" => "Colombia",
                                                                         "KM" => "Comoros",
                                                                         "CG" => "Congo",
                                                                         "CK" => "Cook Islands",
                                                                         "CR" => "Costa Rica",
                                                                         "CI" => "Cote D'Ivorie (Ivory Coast)",
                                                                         "CU" => "Cuba",
                                                                         "CD" => "Democratic Republic Of Congo (Zaire)",
                                                                         "DJ" => "Djibouti",
                                                                         "DM" => "Dominica",
                                                                         "DO" => "Dominican Republic",
                                                                         "TP" => "East Timor",
                                                                         "EC" => "Ecuador",
                                                                         "EG" => "Egypt",
                                                                         "SV" => "El Salvador",
                                                                         "GQ" => "Equatorial Guinea",
                                                                         "ER" => "Eritrea",
                                                                         "ET" => "Ethiopia",
                                                                         "FK" => "Falkland Islands (Malvinas)",
                                                                         "FJ" => "Fiji",
                                                                         "GF" => "French Guinea",
                                                                         "FX" => "France, Metropolitan",
                                                                         "PF" => "French Polynesia",
                                                                         "TF" => "French Southern Territories",
                                                                         "GA" => "Gabon",
                                                                         "GM" => "Gambia",
                                                                         "GE" => "Georgia",
                                                                         "GH" => "Ghana",
                                                                         "GI" => "Gibraltar",
                                                                         "GD" => "Grenada",
                                                                         "GP" => "Guadeloupe",
                                                                         "GU" => "Guam",
                                                                         "GT" => "Guatemala",
                                                                         "GN" => "Guinea",
                                                                         "GW" => "Guinea-Bissau",
                                                                         "GY" => "Guyana",
                                                                         "HT" => "Haiti",
                                                                         "HM" => "Heard And McDonald Islands",
                                                                         "HN" => "Honduras",
                                                                         "HK" => "Hong Kong",
                                                                         "IN" => "India",
                                                                         "ID" => "Indonesia",
                                                                         "IR" => "Iran",
                                                                         "IQ" => "Iraq",
                                                                         "JM" => "Jamaica",
                                                                         "JP" => "Japan",
                                                                         "JO" => "Jordan",
                                                                         "KZ" => "Kazakhstan",
                                                                         "KE" => "Kenya",
                                                                         "KI" => "Kiribati",
                                                                         "KW" => "Kuwait",
                                                                         "KG" => "Kyrgyzstan",
                                                                         "LA" => "Laos",
                                                                         "LB" => "Lebanon",
                                                                         "LS" => "Lesotho",
                                                                        "LR" => "Liberia",
                                                                         "LY" => "Libya",
                                                                         "MO" => "Macau",
                                                                         "MG" => "Madagascar",
                                                                         "MW" => "Malawi",
                                                                         "MY" => "Malaysia",
                                                                         "MV" => "Maldives",
                                                                         "ML" => "Mali",
                                                                         "MH" => "Marshall Islands",
                                                                         "MQ" => "Martinique",
                                                                         "MR" => "Mauritania",
                                                                         "MU" => "Mauritius",
                                                                         "YT" => "Mayotte",
                                                                         "MX" => "Mexico",
                                                                         "FM" => "Micronesia",
                                                                         "MN" => "Mongolia",
                                                                         "MS" => "Montserrat",
                                                                         "MA" => "Morocco",
                                                                         "MZ" => "Mozambique",
                                                                         "MM" => "Myanmar (Burma)",
                                                                         "NA" => "Namibia",
                                                                         "NR" => "Nauru",
                                                                         "NP" => "Nepal",
                                                                         "AN" => "Netherlands Antilles",
                                                                         "NC" => "New Caledonia",
                                                                         "NZ" => "New Zealand",
                                                                         "NI" => "Nicaragua",
                                                                         "NE" => "Niger",
                                                                         "NG" => "Nigeria",
                                                                         "NU" => "Niue",
                                                                         "NF" => "Norfolk Island",
                                                                         "KP" => "North Korea",
                                                                         "MP" => "Northern Mariana Islands",
                                                                         "OM" => "Oman",
                                                                         "PK" => "Pakistan",
                                                                         "PW" => "Palau",
                                                                         "PA" => "Panama",
                                                                         "PG" => "Papua New Guinea",
                                                                         "PY" => "Paraguay",
                                                                         "PE" => "Peru",
                                                                         "PH" => "Philippines",
                                                                         "PN" => "Pitcairn",
                                                                         "PR" => "Puerto Rico",
                                                                         "QA" => "Qatar",
                                                                         "RE" => "Reunion",
                                                                         "RW" => "Rwanda",
                                                                         "SH" => "Saint Helena",
                                                                         "KN" => "Saint Kitts And Nevis",
                                                                         "LC" => "Saint Lucia",
                                                                         "PM" => "Saint Pierre And Miquelon",
                                                                         "VC" => "Saint Vincent And The Grenadines",
                                                                         "ST" => "Sao Tome And Principe",
                                                                         "SA" => "Saudi Arabia",
                                                                         "SN" => "Senegal",
                                                                         "SC" => "Seychelles",
                                                                         "SL" => "Sierra Leone",
                                                                         "SG" => "Singapore",
                                                                         "SB" => "Solomon Islands",
                                                                         "SO" => "Somalia",
                                                                         "ZA" => "South Africa",
                                                                         "GS" => "South Georgia And South Sandwich Islands",
                                                                         "KR" => "South Korea",
                                                                         "LK" => "Sri Lanka",
                                                                         "SD" => "Sudan",
                                                                         "SR" => "Suriname",
                                                                         "SJ" => "Svalbard And Jan Mayen",
                                                                         "SZ" => "Swaziland",
                                                                         "SY" => "Syria",
                                                                         "TW" => "Taiwan",
                                                                         "TJ" => "Tajikistan",
                                                                         "TZ" => "Tanzania",
                                                                         "TH" => "Thailand",
                                                                         "TG" => "Togo",
                                                                         "TK" => "Tokelau",
                                                                         "TO" => "Tonga",
                                                                         "TT" => "Trinidad And Tobago",
                                                                         "TN" => "Tunisia",
                                                                         "TR" => "Turkey",
                                                                         "TM" => "Turkmenistan",
                                                                         "TC" => "Turks And Caicos Islands",
                                                                         "TV" => "Tuvalu",
                                                                         "UG" => "Uganda",
                                                                         "AE" => "United Arab Emirates",
                                                                         "US" => "United States",
                                                                         "UM" => "United States Minor Outlying Islands",
                                                                         "UY" => "Uruguay",
                                                                         "UZ" => "Uzbekistan",
                                                                         "VU" => "Vanuatu",
                                                                         "VE" => "Venezuela",
                                                                         "VN" => "Vietnam",
                                                                         "VG" => "Virgin Islands (British)",
                                                                         "VI" => "Virgin Islands (US)",
                                                                         "WF" => "Wallis And Futuna Islands",
                                                                         "EH" => "Western Sahara",
                                                                         "WS" => "Western Samoa",
                                                                         "YE" => "Yemen",
                                                                         "ZM" => "Zambia",
                                                                         "ZW" =>"Zimbabwe");

                                                                ?>
<!--								<select style="" title="" name="update_country" id="country">
                                                                    <option value="AD">Andorra</option><option value="AM">Armenia</option><option value="AT">Austria</option><option value="AZ">Azerbaijan</option><option value="BY">Belarus</option><option value="BE">Belgium</option><option value="BA">Bosnia And Herzegovina</option><option value="BG">Bulgaria</option><option value="HR">Croatia (Hrvatska)</option><option value="CY">Cyprus</option><option value="CZ">Czech Republic</option><option value="DK">Denmark</option><option value="EE">Estonia</option><option value="FO">Faroe Islands</option><option value="FI">Finland</option><option value="FR">France</option><option value="DE">Germany</option><option value="GR">Greece</option><option value="GL">Greenland</option><option value="HU">Hungary</option><option value="IS">Iceland</option><option value="IE">Ireland</option><option value="IL">Israel</option><option value="IT">Italy</option><option value="LV">Latvia</option><option value="LI">Liechtenstein</option><option value="LT">Lithuania</option><option value="LU">Luxembourg</option><option value="MK">Macedonia</option><option value="MT">Malta</option><option value="MD">Moldova</option><option value="MC">Monaco</option><option value="NL">Netherlands</option><option value="NO">Norway</option><option value="PL">Poland</option><option value="PT">Portugal</option><option value="RO">Romania</option><option value="RU">Russia</option><option value="SM">San Marino</option><option value="SK">Slovak Republic</option><option value="SI">Slovenia</option>
                                                                   <option value="ES">Spain</option><option value="SE">Sweden</option><option value="CH">Switzerland</option><option value="UA">Ukraine</option><option value="UK">United Kingdom</option><option value="VA">Vatican Ciudad (Holy See)</option><option value="YU">Yugoslavia</option><option value="AF">Afghanistan</option><option value="AL">Albania</option><option value="DZ">Algeria</option><option value="AS">American Samoa</option><option value="AO">Angola</option><option value="AI">Anguilla</option><option value="AQ">Antarctica</option><option value="AG">Antigua And Barbuda</option><option value="AR">Argentina</option><option value="AW">Aruba</option><option value="AU">Australia</option><option value="BS">Bahamas</option><option value="BH">Bahrain</option><option value="BD">Bangladesh</option><option value="BB">Barbados</option><option value="BZ">Belize</option><option value="BJ">Benin</option><option value="BM">Bermuda</option><option value="BT">Bhutan</option><option value="BO">Bolivia</option><option value="BW">Botswana</option><option value="BV">Bouvet Island</option><option value="BR">Brazil</option><option value="IO">British Indian Ocean Territory</option><option value="BN">Brunei</option><option value="BF">Burkina Faso</option><option value="BI">Burundi</option><option value="KH">Cambodia</option><option value="CM">Cameroon</option><option value="CA">Canada</option><option value="CV">Cape Verde</option><option value="KY">Cayman Islands</option><option value="CF">Central African Republic</option><option value="TD">Chad</option><option value="CL">Chile</option><option value="CN">China</option><option value="CX">Christmas Island</option><option value="CC">Cocos (Keeling) Islands</option><option value="CO">Colombia</option><option value="KM">Comoros</option><option value="CG">Congo</option><option value="CK">Cook Islands</option><option value="CR">Costa Rica</option><option value="CI">Cote D'Ivorie (Ivory Coast)</option><option value="CU">Cuba</option><option value="CD">Democratic Republic Of Congo (Zaire)</option><option value="DJ">Djibouti</option><option value="DM">Dominica</option><option value="DO">Dominican Republic</option><option value="TP">East Timor</option><option value="EC">Ecuador</option><option value="EG">Egypt</option><option value="SV">El Salvador</option><option value="GQ">Equatorial Guinea</option><option value="ER">Eritrea</option><option value="ET">Ethiopia</option><option value="FK">Falkland Islands (Malvinas)</option><option value="FJ">Fiji</option><option value="GF">French Guinea</option><option value="FX">France, Metropolitan</option><option value="PF">French Polynesia</option><option value="TF">French Southern Territories</option><option value="GA">Gabon</option><option value="GM">Gambia</option><option value="GE">Georgia</option><option value="GH">Ghana</option><option value="GI">Gibraltar</option><option value="GD">Grenada</option><option value="GP">Guadeloupe</option><option value="GU">Guam</option><option value="GT">Guatemala</option><option value="GN">Guinea</option><option value="GW">Guinea-Bissau</option><option value="GY">Guyana</option><option value="HT">Haiti</option><option value="HM">Heard And McDonald Islands</option><option value="HN">Honduras</option><option value="HK">Hong Kong</option><option value="IN">India</option><option value="ID">Indonesia</option><option value="IR">Iran</option><option value="IQ">Iraq</option><option value="JM">Jamaica</option><option value="JP">Japan</option><option value="JO">Jordan</option><option value="KZ">Kazakhstan</option><option value="KE">Kenya</option><option value="KI">Kiribati</option><option value="KW">Kuwait</option><option value="KG">Kyrgyzstan</option><option value="LA">Laos</option><option value="LB">Lebanon</option><option value="LS">Lesotho</option><option value="LR">Liberia</option><option value="LY">Libya</option><option value="MO">Macau</option><option value="MG">Madagascar</option><option value="MW">Malawi</option><option value="MY">Malaysia</option><option value="MV">Maldives</option><option value="ML">Mali</option><option value="MH">Marshall Islands</option><option value="MQ">Martinique</option><option value="MR">Mauritania</option><option value="MU">Mauritius</option><option value="YT">Mayotte</option><option value="MX">Mexico</option><option value="FM">Micronesia</option><option value="MN">Mongolia</option><option value="MS">Montserrat</option><option value="MA">Morocco</option><option value="MZ">Mozambique</option><option value="MM">Myanmar (Burma)</option><option value="NA">Namibia</option><option value="NR">Nauru</option><option value="NP">Nepal</option><option value="AN">Netherlands Antilles</option><option value="NC">New Caledonia</option><option value="NZ">New Zealand</option><option value="NI">Nicaragua</option><option value="NE">Niger</option><option value="NG">Nigeria</option><option value="NU">Niue</option><option value="NF">Norfolk Island</option><option value="KP">North Korea</option><option value="MP">Northern Mariana Islands</option><option value="OM">Oman</option><option value="PK">Pakistan</option><option value="PW">Palau</option><option value="PA">Panama</option><option value="PG">Papua New Guinea</option><option value="PY">Paraguay</option><option value="PE">Peru</option><option value="PH">Philippines</option><option value="PN">Pitcairn</option><option value="PR">Puerto Rico</option><option value="QA">Qatar</option><option value="RE">Reunion</option><option value="RW">Rwanda</option><option value="SH">Saint Helena</option><option value="KN">Saint Kitts And Nevis</option><option value="LC">Saint Lucia</option><option value="PM">Saint Pierre And Miquelon</option><option value="VC">Saint Vincent And The Grenadines</option><option value="ST">Sao Tome And Principe</option><option value="SA">Saudi Arabia</option><option value="SN">Senegal</option><option value="SC">Seychelles</option><option value="SL">Sierra Leone</option><option value="SG">Singapore</option><option value="SB">Solomon Islands</option><option value="SO">Somalia</option><option value="ZA">South Africa</option><option value="GS">South Georgia And South Sandwich Islands</option><option value="KR">South Korea</option><option value="LK">Sri Lanka</option><option value="SD">Sudan</option><option value="SR">Suriname</option><option value="SJ">Svalbard And Jan Mayen</option><option value="SZ">Swaziland</option><option value="SY">Syria</option><option value="TW">Taiwan</option><option value="TJ">Tajikistan</option><option value="TZ">Tanzania</option><option value="TH">Thailand</option><option value="TG">Togo</option><option value="TK">Tokelau</option><option value="TO">Tonga</option><option value="TT">Trinidad And Tobago</option><option value="TN">Tunisia</option><option value="TR">Turkey</option><option value="TM">Turkmenistan</option><option value="TC">Turks And Caicos Islands</option><option value="TV">Tuvalu</option><option value="UG">Uganda</option><option value="AE">United Arab Emirates</option><option value="US">United States</option><option value="UM">United States Minor Outlying Islands</option><option value="UY">Uruguay</option><option value="UZ">Uzbekistan</option><option value="VU">Vanuatu</option><option value="VE">Venezuela</option><option value="VN">Vietnam</option><option value="VG">Virgin Islands (British)</option><option value="VI">Virgin Islands (US)</option><option value="WF">Wallis And Futuna Islands</option><option value="EH">Western Sahara</option><option value="WS">Western Samoa</option><option value="YE">Yemen</option><option value="ZM">Zambia</option><option value="ZW">Zimbabwe</option>
                                                                </select>-->
                                                                
                                                                <select style="" title="" name="update_country" id="country">
                                                                <?php

                                                                foreach($countries as $key => $value) {

                                                                ?>
                                                                <option value="<?= $key ?>" title="<?= htmlspecialchars($value) ?>"><?= htmlspecialchars($value) ?></option>
                                                                <?php

                                                                }

                                                                ?>
                                                                </select>
							</li>
<!-- Inicio código de Antonio-->
                                                        <li class="info_req">
                                                            <label for="asoc_id">C&oacute;digo de asociado:</label>
								<input type="text" id="asoc_id" name="update_asoc_id" value="<?php echo set_value('update_asoc_id',$user['upro_asoc_id']);?>"/>
							</li>
                                                        <li class="info_req">
                                                            <label for="descuento">Descuento:</label>
								<input type="text" id="descuento" name="update_descuento" value="<?php echo set_value('update_descuento',$user['upro_descuento']);?>"/>
							</li>
                                                        <li class="info_req">
                                                            <label for="comision">Comisi&oacute;n:</label>
								<input type="text" id="comision" name="update_comision" value="<?php echo set_value('update_comision',$user['upro_comision']);?>"/>
							</li>
<!-- Inicio código de Antonio-->
						</ul>
					</fieldset>
					
<!--					<fieldset>
						<legend>Contact Details</legend>
						<ul>
							<li class="info_req">
								<label for="phone_number">Direcci&oacute;n:</label>
								<input type="text" id="phone_number" name="update_address" value="<?php echo set_value('update_address',$user['upro_address']);?>"/>
							</li>
							<li>
								<?php $newsletter = ($user['upro_city'] == 1) ;?>
								<label for="newsletter">Subscribe to Ciudad:</label>
								<input type="checkbox" id="newsletter" name="update_city" value="1" <?php echo set_checkbox('update_city','1',$newsletter); ?>/>
							</li>
						</ul>
					</fieldset>-->
					
					<fieldset>
						<legend>Login Details</legend>
						<ul>
							<li class="info_req">
								<label for="email_address">Email:</label>
								<input type="text" id="email_address" name="update_email_address" value="<?php echo set_value('update_email_address',$user[$this->flexi_auth->db_column('user_acc', 'email')]);?>" class="tooltip_trigger"
									title="Set the users email address that they can use to login with."
								/>
							</li>
							<li>
								<label for="username">Usuario:</label>
								<input type="text" id="username" name="update_username" value="<?php echo set_value('update_username',$user[$this->flexi_auth->db_column('user_acc', 'username')]);?>" class="tooltip_trigger"
									title="Set the users username that they can use to login with."
								/>
							</li>
							<li class="info_req">
								<label for="group">Grupo:</label>
								<select id="group" name="update_group" class="tooltip_trigger"
									title="Set the users group, that can define them as an admin, public, moderator etc."
								>
								<?php foreach($groups as $group) { ?>
									<?php $user_group = ($group[$this->flexi_auth->db_column('user_group', 'id')] == $user[$this->flexi_auth->db_column('user_acc', 'group_id')]) ? TRUE : FALSE;?>
									<option value="<?php echo $group[$this->flexi_auth->db_column('user_group', 'id')];?>" <?php echo set_select('update_group', $group[$this->flexi_auth->db_column('user_group', 'id')], $user_group);?>>
										<?php echo $group[$this->flexi_auth->db_column('user_group', 'name')];?>
									</option>
								<?php } ?>
								</select>
							</li>
							<li>
								<label>Privilegios:</label>
								<a href="<?php echo base_url() . 'auth_admin/update_user_privileges/'.$user[$this->flexi_auth->db_column('user_acc', 'id')];?>" class="tooltip_trigger"
									title="Manage a users access privileges.">Manage User Privileges</a>
							</li>
						</ul>
<!--					</fieldset>
					
					<fieldset>
						<legend>Update Account</legend>
						<ul>-->
							<li>
<!--								<label for="submit">Update Account:</label>-->
								<input type="submit" name="update_users_account" id="submit" value="Enviar" class="link_button large"/>
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