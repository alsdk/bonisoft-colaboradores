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
								<label for="first_name">Nombre:</label>
								<input type="text" id="first_name" name="update_first_name" value="<?php echo set_value('update_first_name',$user['upro_first_name']);?>"/>
							</li>
							<li class="info_req">
								<label for="last_name">Apellidos:</label>
								<input type="text" id="last_name" name="update_last_name" value="<?php echo set_value('update_last_name',$user['upro_last_name']);?>"/>
							</li>
                                                        
                                                        <li class="info_req">
                                                            <label for="address">Direcci&oacute;n:</label>
								<input type="text" id="address" name="update_address" value="<?php echo set_value('update_address',$user['upro_address']);?>"/>
							</li>
                                                        <li class="info_req">
								<label for="city">Ciudad:</label>
								<input type="text" id="city" name="update_city" value="<?php echo set_value('update_city',$user['upro_city']);?>"/>
							</li>
                                                        <li class="info_req">
								<label for="country">País:</label>
                                                                <!--<input type="text" id="country" name="update_country" value="<?php echo set_value('update_country',$user['upro_country']);?>"/>-->
                                                                <select style="" title="" name="update_country" id="easy-form-country">
                                                                    <option value="AD" <?php echo set_select('update_country', 'AD', (!empty($user['upro_country']) && $user['upro_country'] == "AD" ? TRUE : FALSE) ); ?> >Andorra</option>
                                                                    <option value="AM" <?php echo set_select('update_country', 'AM', (!empty($user['upro_country']) && $user['upro_country'] == "AM" ? TRUE : FALSE) ); ?> >Armenia</option>
                                                                    <option value="AT" <?php echo set_select('update_country', 'AT', (!empty($user['upro_country']) && $user['upro_country'] == "AT" ? TRUE : FALSE) ); ?> >Austria</option>
                                                                    <option value="AZ" <?php echo set_select('update_country', 'AZ', (!empty($user['upro_country']) && $user['upro_country'] == "AZ" ? TRUE : FALSE) ); ?> >Azerbaijan</option>
                                                                    <option value="BY" <?php echo set_select('update_country', 'BY', (!empty($user['upro_country']) && $user['upro_country'] == "BY" ? TRUE : FALSE) ); ?> >Belarus</option>
                                                                    <option value="BE" <?php echo set_select('update_country', 'BE', (!empty($user['upro_country']) && $user['upro_country'] == "BE" ? TRUE : FALSE) ); ?> >Belgium</option>
                                                                    <option value="BA" <?php echo set_select('update_country', 'BA', (!empty($user['upro_country']) && $user['upro_country'] == "BA" ? TRUE : FALSE) ); ?> >Bosnia And Herzegovina</option>
                                                                    <option value="BG" <?php echo set_select('update_country', 'BG', (!empty($user['upro_country']) && $user['upro_country'] == "BG" ? TRUE : FALSE) ); ?> >Bulgaria</option>
                                                                    <option value="HR" <?php echo set_select('update_country', 'HR', (!empty($user['upro_country']) && $user['upro_country'] == "HR" ? TRUE : FALSE) ); ?> >Croatia (Hrvatska)</option>
                                                                    <option value="CY" <?php echo set_select('update_country', 'CY', (!empty($user['upro_country']) && $user['upro_country'] == "CY" ? TRUE : FALSE) ); ?> >Cyprus</option>
                                                                    <option value="CZ" <?php echo set_select('update_country', 'CZ', (!empty($user['upro_country']) && $user['upro_country'] == "CZ" ? TRUE : FALSE) ); ?> >Czech Republic</option>
                                                                    <option value="DK" <?php echo set_select('update_country', 'DK', (!empty($user['upro_country']) && $user['upro_country'] == "DK" ? TRUE : FALSE) ); ?> >Denmark</option>
                                                                    <option value="EE" <?php echo set_select('update_country', 'EE', (!empty($user['upro_country']) && $user['upro_country'] == "EE" ? TRUE : FALSE) ); ?> >Estonia</option>
                                                                    <option value="FO" <?php echo set_select('update_country', 'FO', (!empty($user['upro_country']) && $user['upro_country'] == "FO" ? TRUE : FALSE) ); ?> >Faroe Islands</option>
                                                                    <option value="FI" <?php echo set_select('update_country', 'FI', (!empty($user['upro_country']) && $user['upro_country'] == "FI" ? TRUE : FALSE) ); ?> >Finland</option>
                                                                    <option value="FR" <?php echo set_select('update_country', 'FR', (!empty($user['upro_country']) && $user['upro_country'] == "FR" ? TRUE : FALSE) ); ?> >France</option>
                                                                    <option value="DE" <?php echo set_select('update_country', 'DE', (!empty($user['upro_country']) && $user['upro_country'] == "DE" ? TRUE : FALSE) ); ?> >Germany</option>
                                                                    <option value="GR" <?php echo set_select('update_country', 'GR', (!empty($user['upro_country']) && $user['upro_country'] == "GR" ? TRUE : FALSE) ); ?> >Greece</option>
                                                                    <option value="GL" <?php echo set_select('update_country', 'GL', (!empty($user['upro_country']) && $user['upro_country'] == "GL" ? TRUE : FALSE) ); ?> >Greenland</option>
                                                                    <option value="HU" <?php echo set_select('update_country', 'HU', (!empty($user['upro_country']) && $user['upro_country'] == "HU" ? TRUE : FALSE) ); ?> >Hungary</option>
                                                                    <option value="IS" <?php echo set_select('update_country', 'IS', (!empty($user['upro_country']) && $user['upro_country'] == "IS" ? TRUE : FALSE) ); ?> >Iceland</option>
                                                                    <option value="IE" <?php echo set_select('update_country', 'IE', (!empty($user['upro_country']) && $user['upro_country'] == "IE" ? TRUE : FALSE) ); ?> >Ireland</option>
                                                                    <option value="IL" <?php echo set_select('update_country', 'IL', (!empty($user['upro_country']) && $user['upro_country'] == "IL" ? TRUE : FALSE) ); ?> >Israel</option>
                                                                    <option value="IT" <?php echo set_select('update_country', 'IT', (!empty($user['upro_country']) && $user['upro_country'] == "IT" ? TRUE : FALSE) ); ?> >Italy</option>
                                                                    <option value="LV" <?php echo set_select('update_country', 'LV', (!empty($user['upro_country']) && $user['upro_country'] == "LV" ? TRUE : FALSE) ); ?> >Latvia</option>
                                                                    <option value="LI" <?php echo set_select('update_country', 'LI', (!empty($user['upro_country']) && $user['upro_country'] == "LI" ? TRUE : FALSE) ); ?> >Liechtenstein</option>
                                                                    <option value="LT" <?php echo set_select('update_country', 'LT', (!empty($user['upro_country']) && $user['upro_country'] == "LT" ? TRUE : FALSE) ); ?> >Lithuania</option>
                                                                    <option value="LU" <?php echo set_select('update_country', 'LU', (!empty($user['upro_country']) && $user['upro_country'] == "LU" ? TRUE : FALSE) ); ?> >Luxembourg</option>
                                                                    <option value="MK" <?php echo set_select('update_country', 'MK', (!empty($user['upro_country']) && $user['upro_country'] == "MK" ? TRUE : FALSE) ); ?> >Macedonia</option>
                                                                    <option value="MT" <?php echo set_select('update_country', 'MT', (!empty($user['upro_country']) && $user['upro_country'] == "MT" ? TRUE : FALSE) ); ?> >Malta</option>
                                                                    <option value="MD" <?php echo set_select('update_country', 'MD', (!empty($user['upro_country']) && $user['upro_country'] == "MD" ? TRUE : FALSE) ); ?> >Moldova</option>
                                                                    <option value="MC" <?php echo set_select('update_country', 'MC', (!empty($user['upro_country']) && $user['upro_country'] == "MC" ? TRUE : FALSE) ); ?> >Monaco</option>
                                                                    <option value="NL" <?php echo set_select('update_country', 'NL', (!empty($user['upro_country']) && $user['upro_country'] == "NL" ? TRUE : FALSE) ); ?> >Netherlands</option>
                                                                    <option value="NO" <?php echo set_select('update_country', 'NO', (!empty($user['upro_country']) && $user['upro_country'] == "NO" ? TRUE : FALSE) ); ?> >Norway</option>
                                                                    <option value="PL" <?php echo set_select('update_country', 'PL', (!empty($user['upro_country']) && $user['upro_country'] == "PL" ? TRUE : FALSE) ); ?> >Poland</option>
                                                                    <option value="PT" <?php echo set_select('update_country', 'PT', (!empty($user['upro_country']) && $user['upro_country'] == "PT" ? TRUE : FALSE) ); ?> >Portugal</option>
                                                                    <option value="RO" <?php echo set_select('update_country', 'RO', (!empty($user['upro_country']) && $user['upro_country'] == "RO" ? TRUE : FALSE) ); ?> >Romania</option>
                                                                    <option value="RU" <?php echo set_select('update_country', 'RU', (!empty($user['upro_country']) && $user['upro_country'] == "RU" ? TRUE : FALSE) ); ?> >Russia</option>
                                                                    <option value="SM" <?php echo set_select('update_country', 'SM', (!empty($user['upro_country']) && $user['upro_country'] == "SM" ? TRUE : FALSE) ); ?> >San Marino</option>
                                                                    <option value="SK" <?php echo set_select('update_country', 'SK', (!empty($user['upro_country']) && $user['upro_country'] == "SK" ? TRUE : FALSE) ); ?> >Slovak Republic</option>
                                                                    <option value="SI" <?php echo set_select('update_country', 'SI', (!empty($user['upro_country']) && $user['upro_country'] == "SI" ? TRUE : FALSE) ); ?> >Slovenia</option>
                                                                    <option value="ES" <?php echo set_select('update_country', 'ES', (!empty($user['upro_country']) && $user['upro_country'] == "ES" ? TRUE : FALSE) ); ?> >Spain</option>
                                                                    <option value="SE" <?php echo set_select('update_country', 'SE', (!empty($user['upro_country']) && $user['upro_country'] == "SE" ? TRUE : FALSE) ); ?> >Sweden</option>
                                                                    <option value="CH" <?php echo set_select('update_country', 'CH', (!empty($user['upro_country']) && $user['upro_country'] == "CH" ? TRUE : FALSE) ); ?> >Switzerland</option>
                                                                    <option value="UA" <?php echo set_select('update_country', 'UA', (!empty($user['upro_country']) && $user['upro_country'] == "UA" ? TRUE : FALSE) ); ?> >Ukraine</option>
                                                                    <option value="UK" <?php echo set_select('update_country', 'UK', (!empty($user['upro_country']) && $user['upro_country'] == "UK" ? TRUE : FALSE) ); ?> >United Kingdom</option>
                                                                    <option value="VA" <?php echo set_select('update_country', 'VA', (!empty($user['upro_country']) && $user['upro_country'] == "VA" ? TRUE : FALSE) ); ?> >Vatican Ciudad (Holy See)</option>
                                                                    <option value="YU" <?php echo set_select('update_country', 'YU', (!empty($user['upro_country']) && $user['upro_country'] == "YU" ? TRUE : FALSE) ); ?> >Yugoslavia</option>
                                                                    <option value="AF" <?php echo set_select('update_country', 'AF', (!empty($user['upro_country']) && $user['upro_country'] == "AF" ? TRUE : FALSE) ); ?> >Afghanistan</option>
                                                                    <option value="AL" <?php echo set_select('update_country', 'AL', (!empty($user['upro_country']) && $user['upro_country'] == "AL" ? TRUE : FALSE) ); ?> >Albania</option>
                                                                    <option value="DZ" <?php echo set_select('update_country', 'DZ', (!empty($user['upro_country']) && $user['upro_country'] == "DZ" ? TRUE : FALSE) ); ?> >Algeria</option>
                                                                    <option value="AS" <?php echo set_select('update_country', 'AS', (!empty($user['upro_country']) && $user['upro_country'] == "AS" ? TRUE : FALSE) ); ?> >American Samoa</option>
                                                                    <option value="AO" <?php echo set_select('update_country', 'AO', (!empty($user['upro_country']) && $user['upro_country'] == "AO" ? TRUE : FALSE) ); ?> >Angola</option>
                                                                    <option value="AI" <?php echo set_select('update_country', 'AI', (!empty($user['upro_country']) && $user['upro_country'] == "AI" ? TRUE : FALSE) ); ?> >Anguilla</option>
                                                                    <option value="AQ" <?php echo set_select('update_country', 'AQ', (!empty($user['upro_country']) && $user['upro_country'] == "AQ" ? TRUE : FALSE) ); ?> >Antarctica</option>
                                                                    <option value="AG" <?php echo set_select('update_country', 'AG', (!empty($user['upro_country']) && $user['upro_country'] == "AG" ? TRUE : FALSE) ); ?> >Antigua And Barbuda</option>
                                                                    <option value="AR" <?php echo set_select('update_country', 'AR', (!empty($user['upro_country']) && $user['upro_country'] == "AR" ? TRUE : FALSE) ); ?> >Argentina</option>
                                                                    <option value="AW" <?php echo set_select('update_country', 'AW', (!empty($user['upro_country']) && $user['upro_country'] == "AW" ? TRUE : FALSE) ); ?> >Aruba</option>
                                                                    <option value="AU" <?php echo set_select('update_country', 'AU', (!empty($user['upro_country']) && $user['upro_country'] == "AU" ? TRUE : FALSE) ); ?> >Australia</option>
                                                                    <option value="BS" <?php echo set_select('update_country', 'BS', (!empty($user['upro_country']) && $user['upro_country'] == "BS" ? TRUE : FALSE) ); ?> >Bahamas</option>
                                                                    <option value="BH" <?php echo set_select('update_country', 'BH', (!empty($user['upro_country']) && $user['upro_country'] == "BH" ? TRUE : FALSE) ); ?> >Bahrain</option>
                                                                    <option value="BD" <?php echo set_select('update_country', 'BD', (!empty($user['upro_country']) && $user['upro_country'] == "BD" ? TRUE : FALSE) ); ?> >Bangladesh</option>
                                                                    <option value="BB" <?php echo set_select('update_country', 'BB', (!empty($user['upro_country']) && $user['upro_country'] == "BB" ? TRUE : FALSE) ); ?> >Barbados</option>
                                                                    <option value="BZ" <?php echo set_select('update_country', 'BZ', (!empty($user['upro_country']) && $user['upro_country'] == "BZ" ? TRUE : FALSE) ); ?> >Belize</option>
                                                                    <option value="BJ" <?php echo set_select('update_country', 'BJ', (!empty($user['upro_country']) && $user['upro_country'] == "BJ" ? TRUE : FALSE) ); ?> >Benin</option>
                                                                    <option value="BM" <?php echo set_select('update_country', 'BM', (!empty($user['upro_country']) && $user['upro_country'] == "BM" ? TRUE : FALSE) ); ?> >Bermuda</option>
                                                                    <option value="BT" <?php echo set_select('update_country', 'BT', (!empty($user['upro_country']) && $user['upro_country'] == "BT" ? TRUE : FALSE) ); ?> >Bhutan</option>
                                                                    <option value="BO" <?php echo set_select('update_country', 'BO', (!empty($user['upro_country']) && $user['upro_country'] == "BO" ? TRUE : FALSE) ); ?> >Bolivia</option>
                                                                    <option value="BW" <?php echo set_select('update_country', 'BW', (!empty($user['upro_country']) && $user['upro_country'] == "BW" ? TRUE : FALSE) ); ?> >Botswana</option>
                                                                    <option value="BV" <?php echo set_select('update_country', 'BV', (!empty($user['upro_country']) && $user['upro_country'] == "BV" ? TRUE : FALSE) ); ?> >Bouvet Island</option>
                                                                    <option value="BR" <?php echo set_select('update_country', 'BR', (!empty($user['upro_country']) && $user['upro_country'] == "BR" ? TRUE : FALSE) ); ?> >Brazil</option>
                                                                    <option value="IO" <?php echo set_select('update_country', 'IO', (!empty($user['upro_country']) && $user['upro_country'] == "IO" ? TRUE : FALSE) ); ?> >British Indian Ocean Territory</option>
                                                                    <option value="BN" <?php echo set_select('update_country', 'BN', (!empty($user['upro_country']) && $user['upro_country'] == "BN" ? TRUE : FALSE) ); ?> >Brunei</option>
                                                                    <option value="BF" <?php echo set_select('update_country', 'BF', (!empty($user['upro_country']) && $user['upro_country'] == "BF" ? TRUE : FALSE) ); ?> >Burkina Faso</option>
                                                                    <option value="BI" <?php echo set_select('update_country', 'BI', (!empty($user['upro_country']) && $user['upro_country'] == "BI" ? TRUE : FALSE) ); ?> >Burundi</option>
                                                                    <option value="KH" <?php echo set_select('update_country', 'KH', (!empty($user['upro_country']) && $user['upro_country'] == "KH" ? TRUE : FALSE) ); ?> >Cambodia</option>
                                                                    <option value="CM" <?php echo set_select('update_country', 'CM', (!empty($user['upro_country']) && $user['upro_country'] == "CM" ? TRUE : FALSE) ); ?> >Cameroon</option>
                                                                    <option value="CA" <?php echo set_select('update_country', 'CA', (!empty($user['upro_country']) && $user['upro_country'] == "CA" ? TRUE : FALSE) ); ?> >Canada</option>
                                                                    <option value="CV" <?php echo set_select('update_country', 'CV', (!empty($user['upro_country']) && $user['upro_country'] == "CV" ? TRUE : FALSE) ); ?> >Cape Verde</option>
                                                                    <option value="KY" <?php echo set_select('update_country', 'KY', (!empty($user['upro_country']) && $user['upro_country'] == "KY" ? TRUE : FALSE) ); ?> >Cayman Islands</option>
                                                                    <option value="CF" <?php echo set_select('update_country', 'CF', (!empty($user['upro_country']) && $user['upro_country'] == "CF" ? TRUE : FALSE) ); ?> >Central African Republic</option>
                                                                    <option value="TD" <?php echo set_select('update_country', 'TD', (!empty($user['upro_country']) && $user['upro_country'] == "TD" ? TRUE : FALSE) ); ?> >Chad</option>
                                                                    <option value="CL" <?php echo set_select('update_country', 'CL', (!empty($user['upro_country']) && $user['upro_country'] == "CL" ? TRUE : FALSE) ); ?> >Chile</option>
                                                                    <option value="CN" <?php echo set_select('update_country', 'CN', (!empty($user['upro_country']) && $user['upro_country'] == "CN" ? TRUE : FALSE) ); ?> >China</option>
                                                                    <option value="CX" <?php echo set_select('update_country', 'CX', (!empty($user['upro_country']) && $user['upro_country'] == "CX" ? TRUE : FALSE) ); ?> >Christmas Island</option>
                                                                    <option value="CC" <?php echo set_select('update_country', 'CC', (!empty($user['upro_country']) && $user['upro_country'] == "CC" ? TRUE : FALSE) ); ?> >Cocos (Keeling) Islands</option>
                                                                    <option value="CO" <?php echo set_select('update_country', 'CO', (!empty($user['upro_country']) && $user['upro_country'] == "CO" ? TRUE : FALSE) ); ?> >Colombia</option>
                                                                    <option value="KM" <?php echo set_select('update_country', 'KM', (!empty($user['upro_country']) && $user['upro_country'] == "KM" ? TRUE : FALSE) ); ?> >Comoros</option>
                                                                    <option value="CG" <?php echo set_select('update_country', 'CG', (!empty($user['upro_country']) && $user['upro_country'] == "CG" ? TRUE : FALSE) ); ?> >Congo</option>
                                                                    <option value="CK" <?php echo set_select('update_country', 'CK', (!empty($user['upro_country']) && $user['upro_country'] == "CK" ? TRUE : FALSE) ); ?> >Cook Islands</option>
                                                                    <option value="CR" <?php echo set_select('update_country', 'CR', (!empty($user['upro_country']) && $user['upro_country'] == "CR" ? TRUE : FALSE) ); ?> >Costa Rica</option>
                                                                    <option value="CI" <?php echo set_select('update_country', 'CI', (!empty($user['upro_country']) && $user['upro_country'] == "CI" ? TRUE : FALSE) ); ?> >Cote D'Ivorie (Ivory Coast)</option>
                                                                    <option value="CU" <?php echo set_select('update_country', 'CU', (!empty($user['upro_country']) && $user['upro_country'] == "CU" ? TRUE : FALSE) ); ?> >Cuba</option>
                                                                    <option value="CD" <?php echo set_select('update_country', 'CD', (!empty($user['upro_country']) && $user['upro_country'] == "CD" ? TRUE : FALSE) ); ?> >Democratic Republic Of Congo (Zaire)</option>
                                                                    <option value="DJ" <?php echo set_select('update_country', 'DJ', (!empty($user['upro_country']) && $user['upro_country'] == "DJ" ? TRUE : FALSE) ); ?> >Djibouti</option>
                                                                    <option value="DM" <?php echo set_select('update_country', 'DM', (!empty($user['upro_country']) && $user['upro_country'] == "DM" ? TRUE : FALSE) ); ?> >Dominica</option>
                                                                    <option value="DO" <?php echo set_select('update_country', 'DO', (!empty($user['upro_country']) && $user['upro_country'] == "DO" ? TRUE : FALSE) ); ?> >Dominican Republic</option>
                                                                    <option value="TP" <?php echo set_select('update_country', 'TP', (!empty($user['upro_country']) && $user['upro_country'] == "TP" ? TRUE : FALSE) ); ?> >East Timor</option>
                                                                    <option value="EC" <?php echo set_select('update_country', 'EC', (!empty($user['upro_country']) && $user['upro_country'] == "EC" ? TRUE : FALSE) ); ?> >Ecuador</option>
                                                                    <option value="EG" <?php echo set_select('update_country', 'EG', (!empty($user['upro_country']) && $user['upro_country'] == "EG" ? TRUE : FALSE) ); ?> >Egypt</option>
                                                                    <option value="SV" <?php echo set_select('update_country', 'SV', (!empty($user['upro_country']) && $user['upro_country'] == "SV" ? TRUE : FALSE) ); ?> >El Salvador</option>
                                                                    <option value="GQ" <?php echo set_select('update_country', 'GQ', (!empty($user['upro_country']) && $user['upro_country'] == "GQ" ? TRUE : FALSE) ); ?> >Equatorial Guinea</option>
                                                                    <option value="ER" <?php echo set_select('update_country', 'ER', (!empty($user['upro_country']) && $user['upro_country'] == "ER" ? TRUE : FALSE) ); ?> >Eritrea</option>
                                                                    <option value="ET" <?php echo set_select('update_country', 'ET', (!empty($user['upro_country']) && $user['upro_country'] == "ET" ? TRUE : FALSE) ); ?> >Ethiopia</option>
                                                                    <option value="FK" <?php echo set_select('update_country', 'FK', (!empty($user['upro_country']) && $user['upro_country'] == "FK" ? TRUE : FALSE) ); ?> >Falkland Islands (Malvinas)</option>
                                                                    <option value="FJ" <?php echo set_select('update_country', 'FJ', (!empty($user['upro_country']) && $user['upro_country'] == "FJ" ? TRUE : FALSE) ); ?> >Fiji</option>
                                                                    <option value="GF" <?php echo set_select('update_country', 'GF', (!empty($user['upro_country']) && $user['upro_country'] == "GF" ? TRUE : FALSE) ); ?> >French Guinea</option>
                                                                    <option value="FX" <?php echo set_select('update_country', 'FX', (!empty($user['upro_country']) && $user['upro_country'] == "FX" ? TRUE : FALSE) ); ?> >France, Metropolitan</option>
                                                                    <option value="PF" <?php echo set_select('update_country', 'PF', (!empty($user['upro_country']) && $user['upro_country'] == "PF" ? TRUE : FALSE) ); ?> >French Polynesia</option>
                                                                    <option value="TF" <?php echo set_select('update_country', 'TF', (!empty($user['upro_country']) && $user['upro_country'] == "TF" ? TRUE : FALSE) ); ?> >French Southern Territories</option>
                                                                    <option value="GA" <?php echo set_select('update_country', 'GA', (!empty($user['upro_country']) && $user['upro_country'] == "GA" ? TRUE : FALSE) ); ?> >Gabon</option>
                                                                    <option value="GM" <?php echo set_select('update_country', 'GM', (!empty($user['upro_country']) && $user['upro_country'] == "GM" ? TRUE : FALSE) ); ?> >Gambia</option>
                                                                    <option value="GE" <?php echo set_select('update_country', 'GE', (!empty($user['upro_country']) && $user['upro_country'] == "GE" ? TRUE : FALSE) ); ?> >Georgia</option>
                                                                    <option value="GH" <?php echo set_select('update_country', 'GH', (!empty($user['upro_country']) && $user['upro_country'] == "GH" ? TRUE : FALSE) ); ?> >Ghana</option>
                                                                    <option value="GI" <?php echo set_select('update_country', 'GI', (!empty($user['upro_country']) && $user['upro_country'] == "GI" ? TRUE : FALSE) ); ?> >Gibraltar</option>
                                                                    <option value="GD" <?php echo set_select('update_country', 'GD', (!empty($user['upro_country']) && $user['upro_country'] == "GD" ? TRUE : FALSE) ); ?> >Grenada</option>
                                                                    <option value="GP" <?php echo set_select('update_country', 'GP', (!empty($user['upro_country']) && $user['upro_country'] == "GP" ? TRUE : FALSE) ); ?> >Guadeloupe</option>
                                                                    <option value="GU" <?php echo set_select('update_country', 'GU', (!empty($user['upro_country']) && $user['upro_country'] == "GU" ? TRUE : FALSE) ); ?> >Guam</option>
                                                                    <option value="GT" <?php echo set_select('update_country', 'GT', (!empty($user['upro_country']) && $user['upro_country'] == "GT" ? TRUE : FALSE) ); ?> >Guatemala</option>
                                                                    <option value="GN" <?php echo set_select('update_country', 'GN', (!empty($user['upro_country']) && $user['upro_country'] == "GN" ? TRUE : FALSE) ); ?> >Guinea</option>
                                                                    <option value="GW" <?php echo set_select('update_country', 'GW', (!empty($user['upro_country']) && $user['upro_country'] == "GW" ? TRUE : FALSE) ); ?> >Guinea-Bissau</option>
                                                                    <option value="GY" <?php echo set_select('update_country', 'GY', (!empty($user['upro_country']) && $user['upro_country'] == "GY" ? TRUE : FALSE) ); ?> >Guyana</option>
                                                                    <option value="HT" <?php echo set_select('update_country', 'HT', (!empty($user['upro_country']) && $user['upro_country'] == "HT" ? TRUE : FALSE) ); ?> >Haiti</option>
                                                                    <option value="HM" <?php echo set_select('update_country', 'HM', (!empty($user['upro_country']) && $user['upro_country'] == "HM" ? TRUE : FALSE) ); ?> >Heard And McDonald Islands</option>
                                                                    <option value="HN" <?php echo set_select('update_country', 'HN', (!empty($user['upro_country']) && $user['upro_country'] == "HN" ? TRUE : FALSE) ); ?> >Honduras</option>
                                                                    <option value="HK" <?php echo set_select('update_country', 'HK', (!empty($user['upro_country']) && $user['upro_country'] == "HK" ? TRUE : FALSE) ); ?> >Hong Kong</option>
                                                                    <option value="IN" <?php echo set_select('update_country', 'IN', (!empty($user['upro_country']) && $user['upro_country'] == "IN" ? TRUE : FALSE) ); ?> >India</option>
                                                                    <option value="ID" <?php echo set_select('update_country', 'ID', (!empty($user['upro_country']) && $user['upro_country'] == "ID" ? TRUE : FALSE) ); ?> >Indonesia</option>
                                                                    <option value="IR" <?php echo set_select('update_country', 'IR', (!empty($user['upro_country']) && $user['upro_country'] == "IR" ? TRUE : FALSE) ); ?> >Iran</option>
                                                                    <option value="IQ" <?php echo set_select('update_country', 'IQ', (!empty($user['upro_country']) && $user['upro_country'] == "IQ" ? TRUE : FALSE) ); ?> >Iraq</option>
                                                                    <option value="JM" <?php echo set_select('update_country', 'JM', (!empty($user['upro_country']) && $user['upro_country'] == "JM" ? TRUE : FALSE) ); ?> >Jamaica</option>
                                                                    <option value="JP" <?php echo set_select('update_country', 'JP', (!empty($user['upro_country']) && $user['upro_country'] == "JP" ? TRUE : FALSE) ); ?> >Japan</option>
                                                                    <option value="JO" <?php echo set_select('update_country', 'JO', (!empty($user['upro_country']) && $user['upro_country'] == "JO" ? TRUE : FALSE) ); ?> >Jordan</option>
                                                                    <option value="KZ" <?php echo set_select('update_country', 'KZ', (!empty($user['upro_country']) && $user['upro_country'] == "KZ" ? TRUE : FALSE) ); ?> >Kazakhstan</option>
                                                                    <option value="KE" <?php echo set_select('update_country', 'KE', (!empty($user['upro_country']) && $user['upro_country'] == "KE" ? TRUE : FALSE) ); ?> >Kenya</option>
                                                                    <option value="KI" <?php echo set_select('update_country', 'KI', (!empty($user['upro_country']) && $user['upro_country'] == "KI" ? TRUE : FALSE) ); ?> >Kiribati</option>
                                                                    <option value="KW" <?php echo set_select('update_country', 'KW', (!empty($user['upro_country']) && $user['upro_country'] == "KW" ? TRUE : FALSE) ); ?> >Kuwait</option>
                                                                    <option value="KG" <?php echo set_select('update_country', 'KG', (!empty($user['upro_country']) && $user['upro_country'] == "KG" ? TRUE : FALSE) ); ?> >Kyrgyzstan</option>
                                                                    <option value="LA" <?php echo set_select('update_country', 'LA', (!empty($user['upro_country']) && $user['upro_country'] == "LA" ? TRUE : FALSE) ); ?> >Laos</option>
                                                                    <option value="LB" <?php echo set_select('update_country', 'LB', (!empty($user['upro_country']) && $user['upro_country'] == "LB" ? TRUE : FALSE) ); ?> >Lebanon</option>
                                                                    <option value="LS" <?php echo set_select('update_country', 'LS', (!empty($user['upro_country']) && $user['upro_country'] == "LS" ? TRUE : FALSE) ); ?> >Lesotho</option>
                                                                    <option value="LR" <?php echo set_select('update_country', 'LR', (!empty($user['upro_country']) && $user['upro_country'] == "LR" ? TRUE : FALSE) ); ?> >Liberia</option>
                                                                    <option value="LY" <?php echo set_select('update_country', 'LY', (!empty($user['upro_country']) && $user['upro_country'] == "LY" ? TRUE : FALSE) ); ?> >Libya</option>
                                                                    <option value="MO" <?php echo set_select('update_country', 'MO', (!empty($user['upro_country']) && $user['upro_country'] == "MO" ? TRUE : FALSE) ); ?> >Macau</option>
                                                                    <option value="MG" <?php echo set_select('update_country', 'MG', (!empty($user['upro_country']) && $user['upro_country'] == "MG" ? TRUE : FALSE) ); ?> >Madagascar</option>
                                                                    <option value="MW" <?php echo set_select('update_country', 'MW', (!empty($user['upro_country']) && $user['upro_country'] == "MW" ? TRUE : FALSE) ); ?> >Malawi</option>
                                                                    <option value="MY" <?php echo set_select('update_country', 'MY', (!empty($user['upro_country']) && $user['upro_country'] == "MY" ? TRUE : FALSE) ); ?> >Malaysia</option>
                                                                    <option value="MV" <?php echo set_select('update_country', 'MV', (!empty($user['upro_country']) && $user['upro_country'] == "MV" ? TRUE : FALSE) ); ?> >Maldives</option>
                                                                    <option value="ML" <?php echo set_select('update_country', 'ML', (!empty($user['upro_country']) && $user['upro_country'] == "ML" ? TRUE : FALSE) ); ?> >Mali</option>
                                                                    <option value="MH" <?php echo set_select('update_country', 'MH', (!empty($user['upro_country']) && $user['upro_country'] == "MH" ? TRUE : FALSE) ); ?> >Marshall Islands</option>
                                                                    <option value="MQ" <?php echo set_select('update_country', 'MQ', (!empty($user['upro_country']) && $user['upro_country'] == "MQ" ? TRUE : FALSE) ); ?> >Martinique</option>
                                                                    <option value="MR" <?php echo set_select('update_country', 'MR', (!empty($user['upro_country']) && $user['upro_country'] == "MR" ? TRUE : FALSE) ); ?> >Mauritania</option>
                                                                    <option value="MU" <?php echo set_select('update_country', 'MU', (!empty($user['upro_country']) && $user['upro_country'] == "MU" ? TRUE : FALSE) ); ?> >Mauritius</option>
                                                                    <option value="YT" <?php echo set_select('update_country', 'YT', (!empty($user['upro_country']) && $user['upro_country'] == "YT" ? TRUE : FALSE) ); ?> >Mayotte</option>
                                                                    <option value="MX" <?php echo set_select('update_country', 'MX', (!empty($user['upro_country']) && $user['upro_country'] == "MX" ? TRUE : FALSE) ); ?> >Mexico</option>
                                                                    <option value="FM" <?php echo set_select('update_country', 'FM', (!empty($user['upro_country']) && $user['upro_country'] == "FM" ? TRUE : FALSE) ); ?> >Micronesia</option>
                                                                    <option value="MN" <?php echo set_select('update_country', 'MN', (!empty($user['upro_country']) && $user['upro_country'] == "MN" ? TRUE : FALSE) ); ?> >Mongolia</option>
                                                                    <option value="MS" <?php echo set_select('update_country', 'MS', (!empty($user['upro_country']) && $user['upro_country'] == "MS" ? TRUE : FALSE) ); ?> >Montserrat</option>
                                                                    <option value="MA" <?php echo set_select('update_country', 'MA', (!empty($user['upro_country']) && $user['upro_country'] == "MA" ? TRUE : FALSE) ); ?> >Morocco</option>
                                                                    <option value="MZ" <?php echo set_select('update_country', 'MZ', (!empty($user['upro_country']) && $user['upro_country'] == "MZ" ? TRUE : FALSE) ); ?> >Mozambique</option>
                                                                    <option value="MM" <?php echo set_select('update_country', 'MM', (!empty($user['upro_country']) && $user['upro_country'] == "MM" ? TRUE : FALSE) ); ?> >Myanmar (Burma)</option>
                                                                    <option value="NA" <?php echo set_select('update_country', 'NA', (!empty($user['upro_country']) && $user['upro_country'] == "NA" ? TRUE : FALSE) ); ?> >Namibia</option>
                                                                    <option value="NR" <?php echo set_select('update_country', 'NR', (!empty($user['upro_country']) && $user['upro_country'] == "NR" ? TRUE : FALSE) ); ?> >Nauru</option>
                                                                    <option value="NP" <?php echo set_select('update_country', 'NP', (!empty($user['upro_country']) && $user['upro_country'] == "NP" ? TRUE : FALSE) ); ?> >Nepal</option>
                                                                    <option value="AN" <?php echo set_select('update_country', 'AN', (!empty($user['upro_country']) && $user['upro_country'] == "AN" ? TRUE : FALSE) ); ?> >Netherlands Antilles</option>
                                                                    <option value="NC" <?php echo set_select('update_country', 'NC', (!empty($user['upro_country']) && $user['upro_country'] == "NC" ? TRUE : FALSE) ); ?> >New Caledonia</option>
                                                                    <option value="NZ" <?php echo set_select('update_country', 'NZ', (!empty($user['upro_country']) && $user['upro_country'] == "NZ" ? TRUE : FALSE) ); ?> >New Zealand</option>
                                                                    <option value="NI" <?php echo set_select('update_country', 'NI', (!empty($user['upro_country']) && $user['upro_country'] == "NI" ? TRUE : FALSE) ); ?> >Nicaragua</option>
                                                                    <option value="NE" <?php echo set_select('update_country', 'NE', (!empty($user['upro_country']) && $user['upro_country'] == "NE" ? TRUE : FALSE) ); ?> >Niger</option>
                                                                    <option value="NG" <?php echo set_select('update_country', 'NG', (!empty($user['upro_country']) && $user['upro_country'] == "NG" ? TRUE : FALSE) ); ?> >Nigeria</option>
                                                                    <option value="NU" <?php echo set_select('update_country', 'NU', (!empty($user['upro_country']) && $user['upro_country'] == "NU" ? TRUE : FALSE) ); ?> >Niue</option>
                                                                    <option value="NF" <?php echo set_select('update_country', 'NF', (!empty($user['upro_country']) && $user['upro_country'] == "NF" ? TRUE : FALSE) ); ?> >Norfolk Island</option>
                                                                    <option value="KP" <?php echo set_select('update_country', 'KP', (!empty($user['upro_country']) && $user['upro_country'] == "KP" ? TRUE : FALSE) ); ?> >North Korea</option>
                                                                    <option value="MP" <?php echo set_select('update_country', 'MP', (!empty($user['upro_country']) && $user['upro_country'] == "MP" ? TRUE : FALSE) ); ?> >Northern Mariana Islands</option>
                                                                    <option value="OM" <?php echo set_select('update_country', 'OM', (!empty($user['upro_country']) && $user['upro_country'] == "OM" ? TRUE : FALSE) ); ?> >Oman</option>
                                                                    <option value="PK" <?php echo set_select('update_country', 'PK', (!empty($user['upro_country']) && $user['upro_country'] == "PK" ? TRUE : FALSE) ); ?> >Pakistan</option>
                                                                    <option value="PW" <?php echo set_select('update_country', 'PW', (!empty($user['upro_country']) && $user['upro_country'] == "PW" ? TRUE : FALSE) ); ?> >Palau</option>
                                                                    <option value="PA" <?php echo set_select('update_country', 'PA', (!empty($user['upro_country']) && $user['upro_country'] == "PA" ? TRUE : FALSE) ); ?> >Panama</option>
                                                                    <option value="PG" <?php echo set_select('update_country', 'PG', (!empty($user['upro_country']) && $user['upro_country'] == "PG" ? TRUE : FALSE) ); ?> >Papua New Guinea</option>
                                                                    <option value="PY" <?php echo set_select('update_country', 'PY', (!empty($user['upro_country']) && $user['upro_country'] == "PY" ? TRUE : FALSE) ); ?> >Paraguay</option>
                                                                    <option value="PE" <?php echo set_select('update_country', 'PE', (!empty($user['upro_country']) && $user['upro_country'] == "PE" ? TRUE : FALSE) ); ?> >Peru</option>
                                                                    <option value="PH" <?php echo set_select('update_country', 'PH', (!empty($user['upro_country']) && $user['upro_country'] == "PH" ? TRUE : FALSE) ); ?> >Philippines</option>
                                                                    <option value="PN" <?php echo set_select('update_country', 'PN', (!empty($user['upro_country']) && $user['upro_country'] == "PN" ? TRUE : FALSE) ); ?> >Pitcairn</option>
                                                                    <option value="PR" <?php echo set_select('update_country', 'PR', (!empty($user['upro_country']) && $user['upro_country'] == "PR" ? TRUE : FALSE) ); ?> >Puerto Rico</option>
                                                                    <option value="QA" <?php echo set_select('update_country', 'QA', (!empty($user['upro_country']) && $user['upro_country'] == "QA" ? TRUE : FALSE) ); ?> >Qatar</option>
                                                                    <option value="RE" <?php echo set_select('update_country', 'RE', (!empty($user['upro_country']) && $user['upro_country'] == "RE" ? TRUE : FALSE) ); ?> >Reunion</option>
                                                                    <option value="RW" <?php echo set_select('update_country', 'RW', (!empty($user['upro_country']) && $user['upro_country'] == "RW" ? TRUE : FALSE) ); ?> >Rwanda</option>
                                                                    <option value="SH" <?php echo set_select('update_country', 'SH', (!empty($user['upro_country']) && $user['upro_country'] == "SH" ? TRUE : FALSE) ); ?> >Saint Helena</option>
                                                                    <option value="KN" <?php echo set_select('update_country', 'KN', (!empty($user['upro_country']) && $user['upro_country'] == "KN" ? TRUE : FALSE) ); ?> >Saint Kitts And Nevis</option>
                                                                    <option value="LC" <?php echo set_select('update_country', 'LC', (!empty($user['upro_country']) && $user['upro_country'] == "LC" ? TRUE : FALSE) ); ?> >Saint Lucia</option>
                                                                    <option value="PM" <?php echo set_select('update_country', 'PM', (!empty($user['upro_country']) && $user['upro_country'] == "PM" ? TRUE : FALSE) ); ?> >Saint Pierre And Miquelon</option>
                                                                    <option value="VC" <?php echo set_select('update_country', 'VC', (!empty($user['upro_country']) && $user['upro_country'] == "VC" ? TRUE : FALSE) ); ?> >Saint Vincent And The Grenadines</option>
                                                                    <option value="ST" <?php echo set_select('update_country', 'ST', (!empty($user['upro_country']) && $user['upro_country'] == "ST" ? TRUE : FALSE) ); ?> >Sao Tome And Principe</option>
                                                                    <option value="SA" <?php echo set_select('update_country', 'SA', (!empty($user['upro_country']) && $user['upro_country'] == "SA" ? TRUE : FALSE) ); ?> >Saudi Arabia</option>
                                                                    <option value="SN" <?php echo set_select('update_country', 'SN', (!empty($user['upro_country']) && $user['upro_country'] == "SN" ? TRUE : FALSE) ); ?> >Senegal</option>
                                                                    <option value="SC" <?php echo set_select('update_country', 'SC', (!empty($user['upro_country']) && $user['upro_country'] == "SC" ? TRUE : FALSE) ); ?> >Seychelles</option>
                                                                    <option value="SL" <?php echo set_select('update_country', 'SL', (!empty($user['upro_country']) && $user['upro_country'] == "SL" ? TRUE : FALSE) ); ?> >Sierra Leone</option>
                                                                    <option value="SG" <?php echo set_select('update_country', 'SG', (!empty($user['upro_country']) && $user['upro_country'] == "SG" ? TRUE : FALSE) ); ?> >Singapore</option>
                                                                    <option value="SB" <?php echo set_select('update_country', 'SB', (!empty($user['upro_country']) && $user['upro_country'] == "SB" ? TRUE : FALSE) ); ?> >Solomon Islands</option>
                                                                    <option value="SO" <?php echo set_select('update_country', 'SO', (!empty($user['upro_country']) && $user['upro_country'] == "SO" ? TRUE : FALSE) ); ?> >Somalia</option>
                                                                    <option value="ZA" <?php echo set_select('update_country', 'ZA', (!empty($user['upro_country']) && $user['upro_country'] == "ZA" ? TRUE : FALSE) ); ?> >South Africa</option>
                                                                    <option value="GS" <?php echo set_select('update_country', 'GS', (!empty($user['upro_country']) && $user['upro_country'] == "GS" ? TRUE : FALSE) ); ?> >South Georgia And South Sandwich Islands</option>
                                                                    <option value="KR" <?php echo set_select('update_country', 'KR', (!empty($user['upro_country']) && $user['upro_country'] == "KR" ? TRUE : FALSE) ); ?> >South Korea</option>
                                                                    <option value="LK" <?php echo set_select('update_country', 'LK', (!empty($user['upro_country']) && $user['upro_country'] == "LK" ? TRUE : FALSE) ); ?> >Sri Lanka</option>
                                                                    <option value="SD" <?php echo set_select('update_country', 'SD', (!empty($user['upro_country']) && $user['upro_country'] == "SD" ? TRUE : FALSE) ); ?> >Sudan</option>
                                                                    <option value="SR" <?php echo set_select('update_country', 'SR', (!empty($user['upro_country']) && $user['upro_country'] == "SR" ? TRUE : FALSE) ); ?> >Suriname</option>
                                                                    <option value="SJ" <?php echo set_select('update_country', 'SJ', (!empty($user['upro_country']) && $user['upro_country'] == "SJ" ? TRUE : FALSE) ); ?> >Svalbard And Jan Mayen</option>
                                                                    <option value="SZ" <?php echo set_select('update_country', 'SZ', (!empty($user['upro_country']) && $user['upro_country'] == "SZ" ? TRUE : FALSE) ); ?> >Swaziland</option>
                                                                    <option value="SY" <?php echo set_select('update_country', 'SY', (!empty($user['upro_country']) && $user['upro_country'] == "SY" ? TRUE : FALSE) ); ?> >Syria</option>
                                                                    <option value="TW" <?php echo set_select('update_country', 'TW', (!empty($user['upro_country']) && $user['upro_country'] == "TW" ? TRUE : FALSE) ); ?> >Taiwan</option>
                                                                    <option value="TJ" <?php echo set_select('update_country', 'TJ', (!empty($user['upro_country']) && $user['upro_country'] == "TJ" ? TRUE : FALSE) ); ?> >Tajikistan</option>
                                                                    <option value="TZ" <?php echo set_select('update_country', 'TZ', (!empty($user['upro_country']) && $user['upro_country'] == "TZ" ? TRUE : FALSE) ); ?> >Tanzania</option>
                                                                    <option value="TH" <?php echo set_select('update_country', 'TH', (!empty($user['upro_country']) && $user['upro_country'] == "TH" ? TRUE : FALSE) ); ?> >Thailand</option>
                                                                    <option value="TG" <?php echo set_select('update_country', 'TG', (!empty($user['upro_country']) && $user['upro_country'] == "TG" ? TRUE : FALSE) ); ?> >Togo</option>
                                                                    <option value="TK" <?php echo set_select('update_country', 'TK', (!empty($user['upro_country']) && $user['upro_country'] == "TK" ? TRUE : FALSE) ); ?> >Tokelau</option>
                                                                    <option value="TO" <?php echo set_select('update_country', 'TO', (!empty($user['upro_country']) && $user['upro_country'] == "TO" ? TRUE : FALSE) ); ?> >Tonga</option>
                                                                    <option value="TT" <?php echo set_select('update_country', 'TT', (!empty($user['upro_country']) && $user['upro_country'] == "TT" ? TRUE : FALSE) ); ?> >Trinidad And Tobago</option>
                                                                    <option value="TN" <?php echo set_select('update_country', 'TN', (!empty($user['upro_country']) && $user['upro_country'] == "TN" ? TRUE : FALSE) ); ?> >Tunisia</option>
                                                                    <option value="TR" <?php echo set_select('update_country', 'TR', (!empty($user['upro_country']) && $user['upro_country'] == "TR" ? TRUE : FALSE) ); ?> >Turkey</option>
                                                                    <option value="TM" <?php echo set_select('update_country', 'TM', (!empty($user['upro_country']) && $user['upro_country'] == "TM" ? TRUE : FALSE) ); ?> >Turkmenistan</option>
                                                                    <option value="TC" <?php echo set_select('update_country', 'TC', (!empty($user['upro_country']) && $user['upro_country'] == "TC" ? TRUE : FALSE) ); ?> >Turks And Caicos Islands</option>
                                                                    <option value="TV" <?php echo set_select('update_country', 'TV', (!empty($user['upro_country']) && $user['upro_country'] == "TV" ? TRUE : FALSE) ); ?> >Tuvalu</option>
                                                                    <option value="UG" <?php echo set_select('update_country', 'UG', (!empty($user['upro_country']) && $user['upro_country'] == "UG" ? TRUE : FALSE) ); ?> >Uganda</option>
                                                                    <option value="AE" <?php echo set_select('update_country', 'AE', (!empty($user['upro_country']) && $user['upro_country'] == "AE" ? TRUE : FALSE) ); ?> >United Arab Emirates</option>
                                                                    <option value="US" <?php echo set_select('update_country', 'US', (!empty($user['upro_country']) && $user['upro_country'] == "US" ? TRUE : FALSE) ); ?> >United States</option>
                                                                    <option value="UM" <?php echo set_select('update_country', 'UM', (!empty($user['upro_country']) && $user['upro_country'] == "UM" ? TRUE : FALSE) ); ?> >United States Minor Outlying Islands</option>
                                                                    <option value="UY" <?php echo set_select('update_country', 'UY', (!empty($user['upro_country']) && $user['upro_country'] == "UY" ? TRUE : FALSE) ); ?> >Uruguay</option>
                                                                    <option value="UZ" <?php echo set_select('update_country', 'UZ', (!empty($user['upro_country']) && $user['upro_country'] == "UZ" ? TRUE : FALSE) ); ?> >Uzbekistan</option>
                                                                    <option value="VU" <?php echo set_select('update_country', 'VU', (!empty($user['upro_country']) && $user['upro_country'] == "VU" ? TRUE : FALSE) ); ?> >Vanuatu</option>
                                                                    <option value="VE" <?php echo set_select('update_country', 'VE', (!empty($user['upro_country']) && $user['upro_country'] == "VE" ? TRUE : FALSE) ); ?> >Venezuela</option>
                                                                    <option value="VN" <?php echo set_select('update_country', 'VN', (!empty($user['upro_country']) && $user['upro_country'] == "VN" ? TRUE : FALSE) ); ?> >Vietnam</option>
                                                                    <option value="VG" <?php echo set_select('update_country', 'VG', (!empty($user['upro_country']) && $user['upro_country'] == "VG" ? TRUE : FALSE) ); ?> >Virgin Islands (British)</option>
                                                                    <option value="VI" <?php echo set_select('update_country', 'VI', (!empty($user['upro_country']) && $user['upro_country'] == "VI" ? TRUE : FALSE) ); ?> >Virgin Islands (US)</option>
                                                                    <option value="WF" <?php echo set_select('update_country', 'WF', (!empty($user['upro_country']) && $user['upro_country'] == "WF" ? TRUE : FALSE) ); ?> >Wallis And Futuna Islands</option>
                                                                    <option value="EH" <?php echo set_select('update_country', 'EH', (!empty($user['upro_country']) && $user['upro_country'] == "EH" ? TRUE : FALSE) ); ?> >Western Sahara</option>
                                                                    <option value="WS" <?php echo set_select('update_country', 'WS', (!empty($user['upro_country']) && $user['upro_country'] == "WS" ? TRUE : FALSE) ); ?> >Western Samoa</option>
                                                                    <option value="YE" <?php echo set_select('update_country', 'YE', (!empty($user['upro_country']) && $user['upro_country'] == "YE" ? TRUE : FALSE) ); ?> >Yemen</option>
                                                                    <option value="ZM" <?php echo set_select('update_country', 'ZM', (!empty($user['upro_country']) && $user['upro_country'] == "ZM" ? TRUE : FALSE) ); ?> >Zambia</option>
                                                                    <option value="ZW" <?php echo set_select('update_country', 'ZW', (!empty($user['upro_country']) && $user['upro_country'] == "ZW" ? TRUE : FALSE) ); ?> >Zimbabwe</option></select>
                                                    
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
                                                                
                                                                <!--select style="" title="" name="update_country" id="country">
                                                                <?php

                                                                foreach($countries as $key => $value) {

                                                                ?>
                                                                <option value="<?= $key ?>" title="<?= htmlspecialchars($value) ?>"><?= htmlspecialchars($value) ?></option>
                                                                <?php

                                                                }

                                                                ?>
                                                                </select-->
							</li>
<!-- Inicio código de Antonio
     Añadimos las nuevas cajas de texto-->
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
<!-- Fin código de Antonio-->
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