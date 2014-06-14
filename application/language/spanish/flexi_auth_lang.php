<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* Name: flexi auth lang - English
* 
* Author: BONISOFT Soluciones Informaticas, SLNE 
* info@bonisoft.com 
* spanishon.com/colaboradores 
* Copyright 2014 BONISOFT Soluciones Informaticas, SLNE http://www.bonisoft.com 
* 
*
* Released: 30/01/2014
*
* Description:
* English language file for flexi auth
*
* Requirements: PHP5 or above and Codeigniter 2.3+
*/

// Account Creation
$lang['account_creation_successful']		= 'Gracias por inscribirse como colaborador!. Le mandaremos un mensaje para que valide su correo electronico';
$lang['account_creation_unsuccessful']		= 'No se puede crear la cuenta.';
$lang['account_creation_duplicate_email']	= 'Ya existe una cuenta con esta dirección de correo electrónico.'; 
$lang['account_creation_duplicate_username']	= 'Ya existe una cuenta con este nombre de usuario.'; 
$lang['account_creation_duplicate_identity'] 	= 'Ya existe una cuenta con la misma identidad.';
$lang['account_creation_insufficient_data']	= 'Datos insuficientes para crear una cuenta. Asegúrese de una identidad y una contraseña válidos son enviadas.';

// Password
$lang['password_invalid']			= "El %s campo no es valido.";
$lang['password_change_successful'] 	 	= 'Contraseña se ha cambiado con éxito.';
$lang['password_change_unsuccessful'] 	  	= 'La contrase&ntilde;a presentada no coincide con nuestros registros.';
$lang['password_token_invalid']  		= 'El token de contraseña enviado no es válido o ha expirado.'; 
$lang['email_new_password_successful']		= 'Una nueva contraseña ha sido enviada por correo electrónico.';
$lang['email_forgot_password_successful']	= 'Un correo electrónico ha sido enviado para restablecer su contraseña.';
$lang['email_forgot_password_unsuccessful']  	= 'No es posible restablecer la contraseña.'; 

// Activation
$lang['activate_successful']			= 'Su email ha sido validado, le enviaremos un email en cuanto este preparado su panel de gestion. Gracias.';
$lang['activate_unsuccessful']			= 'No se puede activar la cuenta.';
$lang['deactivate_successful']			= 'La cuenta ha sido desactivada.';
$lang['deactivate_unsuccessful']		= 'No es posible desactivar la cuenta.';
$lang['activation_email_successful'] 	 	= 'Gracias por inscribirse como colaborador!. Le mandaremos un mensaje para que valide su correo electronico.';
$lang['activation_email_unsuccessful']  	= 'No se puede enviar correo electrónico de validación.';
$lang['account_requires_activation'] 		= 'Su cuenta debe ser validada mediante correo electronico.';
$lang['account_already_activated'] 		= 'Tu cuenta ya está validada.';
$lang['email_activation_email_successful']	= 'Un correo electrónico ha sido enviado para activar su nueva dirección de correo electrónico.';
$lang['email_activation_email_unsuccessful']	= 'No se puede enviar un correo electrónico para activar su nueva dirección de correo electrónico.';

// Login / Logout
$lang['login_successful']           = 'Ha iniciado una sesión con éxito.';
$lang['login_unsuccessful']         = 'Sus datos de identificaciÃ³n son incorrectos.';
$lang['logout_successful']          = 'Tu sesión se ha cerrado con éxito.';
$lang['login_details_invalid']      = 'Sus datos de acceso no son válidos.';
$lang['captcha_answer_invalid']     = 'Respuesta CAPTCHA incorrecta.';
$lang['login_attempts_exceeded']    = 'Los intentos de inicio de sesi&oacute;n m&acute;ximos se han superado, por favor espere unos momentos antes de volver a intentarlo.';
$lang['login_session_expired']      = 'Su sesión ha caducado.';
$lang['account_suspended']          = 'Su cuenta ha sido suspendida.';

// Account Changes
$lang['update_successful']	= 'La información de cuenta se ha actualizado correctamente.';
$lang['update_unsuccessful']	= 'No se puede actualizar información de la cuenta.';
$lang['delete_successful']	= 'La información de cuenta se ha eliminado correctamente.';
$lang['delete_unsuccessful']    = 'No se puede eliminar información de la cuenta.';

// Form Validation
$lang['form_validation_duplicate_identity'] = "Ya existe una cuenta con esta direccion de correo electronico o nombre de usuario.";
$lang['form_validation_duplicate_email']    = "El Email de %s campo no está disponible.";
$lang['form_validation_duplicate_username'] = "El nombre de usuario de %s campo no está disponible.";
$lang['form_validation_current_password']   = "El %s campo no es válido.";