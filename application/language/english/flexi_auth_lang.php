<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* Name: colaboradores lang - Spanish / Español
* 
* @author Jose Miguel Bonilla Silio <info@jmbs.es>
* @copyright (c) 2014, BONISOFT Soluciones Informaticas, SLNE 
* @link http://www.bonisoft.com BONISOFT
* info@bonisoft.com 
* spanishon.com/colaboradores 
 
* 
* 
* Previous Authors / Contributors: 
* Rob Hussey haseydesign.com, 
* Ben Edmunds, benedmunds.com
* Phil Sturgeon, philsturgeon.co.uk
* Mathew Davies
*
* Licensed under the terms of the contract signed between BONISOFT Soluciones Informaticas, SLNE
*  and SYNKRON 2000, SL for the unlimited use of the software
* by Jose Antonio Garcia Sanchez 
* 
* Unless required by applicable law or agreed to in writing, software
* distributed under the License is distributed on an "AS IS" BASIS,
* WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
* See the License for the specific language governing permissions and
* limitations under the License.
*
* Description: English language file for Collaborators managament
* Released: 30/01/2014
* Requirements: PHP5 or above and Codeigniter 2.3+
*/

// Account Creation
$lang['account_creation_successful']        = 'Your account has successfully been created.';
$lang['account_creation_unsuccessful']      = 'Unable to create account.';
$lang['account_creation_duplicate_email']   = 'Ya existe una cuenta con esta dirección correo electrónico o nombre de usuario.'; 
$lang['account_creation_duplicate_username']= 'Ya existe una cuenta con este nombre de usuario.'; 
$lang['account_creation_duplicate_identity']= 'An account with this identity already exists.';
$lang['account_creation_insufficient_data'] = 'Insufficient data to create an account. Ensure a valid identity and password are submitted.';

// Password
$lang['password_invalid']		    = "The %s field is invalid.";
$lang['password_change_successful'] 	 	 		= 'Password has successfully been changed.';
$lang['password_change_unsuccessful'] 	  	 		= 'Your submitted password does not match our records.';
$lang['password_token_invalid']  					= 'Your submitted password token is invalid or has expired.'; 
$lang['email_new_password_successful']				= 'A new password has been emailed to you.';
$lang['email_forgot_password_successful']	 		= 'An email has been sent to reset your password.';
$lang['email_forgot_password_unsuccessful']  		= 'Unable to reset password.'; 

// Activation
$lang['activate_successful']						= 'Account has been activated.';
$lang['activate_unsuccessful']						= 'Unable to activate account.';
$lang['deactivate_successful']						= 'Account has been deactivated.';
$lang['deactivate_unsuccessful']					= 'Unable to deactivate account.';
$lang['activation_email_successful'] 	 			= 'An activation email has been sent.';
$lang['activation_email_unsuccessful']  	 		= 'Unable to send activation email.';
$lang['account_requires_activation'] 				= 'Your account needs to be activated via email.';
$lang['account_already_activated'] 					= 'Your account has already been activated.';
$lang['email_activation_email_successful']			= 'An email has been sent to activate your new email address.';
$lang['email_activation_email_unsuccessful']		= 'Unable to send an email to activate your new email address.';

// Login / Logout
$lang['login_successful']							= 'You have been successfully logged in.';
$lang['login_unsuccessful']							= 'Your submitted login details are incorrect.';
$lang['logout_successful']							= 'You have been successfully logged out.';
$lang['login_details_invalid'] 						= 'Your login details are invalid.';
$lang['captcha_answer_invalid'] 					= 'CAPTCHA answer is incorrect.';
$lang['login_attempts_exceeded'] 					= 'The maximum login attempts have been exceeded, please wait a few moments before trying again.';
$lang['login_session_expired']						= 'Your login session has expired.';
$lang['account_suspended'] 							= 'Your account has been suspended.';

// Account Changes
$lang['update_successful']                  = 'Account information has been successfully updated.';
$lang['update_unsuccessful']                = 'Unable to update account information.';
$lang['delete_successful']                  = 'Account information has been successfully deleted.';
$lang['delete_unsuccessful']                = 'Unable to delete account information.';

// Form Validation
$lang['form_validation_duplicate_identity'] = "An account with this email address or username already exists.";
$lang['form_validation_duplicate_email']    = "The Email of %s field is not available.";
$lang['form_validation_duplicate_username'] = "The Username of %s field is not available.";
$lang['form_validation_current_password']   = "The %s field is invalid.";