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
$lang['account_creation_duplicate_email']	= 'Ya existe una cuenta con esta direcci�n de correo electr�nico.'; 
$lang['account_creation_duplicate_username']	= 'Ya existe una cuenta con este nombre de usuario.'; 
$lang['account_creation_duplicate_identity'] 	= 'Ya existe una cuenta con la misma identidad.';
$lang['account_creation_insufficient_data']	= 'Datos insuficientes para crear una cuenta. Aseg�rese de una identidad y una contrase�a v�lidos son enviadas.';

// Password
$lang['password_invalid']			= "El %s campo no es valido.";
$lang['password_change_successful'] 	 	= 'Contrase�a se ha cambiado con �xito.';
$lang['password_change_unsuccessful'] 	  	= 'La contrase&ntilde;a presentada no coincide con nuestros registros.';
$lang['password_token_invalid']  		= 'El token de contrase�a enviado no es v�lido o ha expirado.'; 
$lang['email_new_password_successful']		= 'Una nueva contrase�a ha sido enviada por correo electr�nico.';
$lang['email_forgot_password_successful']	= 'Un correo electr�nico ha sido enviado para restablecer su contrase�a.';
$lang['email_forgot_password_unsuccessful']  	= 'No es posible restablecer la contrase�a.'; 

// Activation
$lang['activate_successful']			= 'Su email ha sido validado, le enviaremos un email en cuanto este preparado su panel de gestion. Gracias.';
$lang['activate_unsuccessful']			= 'No se puede activar la cuenta.';
$lang['deactivate_successful']			= 'La cuenta ha sido desactivada.';
$lang['deactivate_unsuccessful']		= 'No es posible desactivar la cuenta.';
$lang['activation_email_successful'] 	 	= 'Gracias por inscribirse como colaborador!. Le mandaremos un mensaje para que valide su correo electronico.';
$lang['activation_email_unsuccessful']  	= 'No se puede enviar correo electr�nico de validaci�n.';
$lang['account_requires_activation'] 		= 'Su cuenta debe ser validada mediante correo electronico.';
$lang['account_already_activated'] 		= 'Tu cuenta ya est� validada.';
$lang['email_activation_email_successful']	= 'Un correo electr�nico ha sido enviado para activar su nueva direcci�n de correo electr�nico.';
$lang['email_activation_email_unsuccessful']	= 'No se puede enviar un correo electr�nico para activar su nueva direcci�n de correo electr�nico.';

// Login / Logout
$lang['login_successful']           = 'Ha iniciado una sesi�n con �xito.';
$lang['login_unsuccessful']         = 'Sus datos de identificación son incorrectos.';
$lang['logout_successful']          = 'Tu sesi�n se ha cerrado con �xito.';
$lang['login_details_invalid']      = 'Sus datos de acceso no son v�lidos.';
$lang['captcha_answer_invalid']     = 'Respuesta CAPTCHA incorrecta.';
$lang['login_attempts_exceeded']    = 'Los intentos de inicio de sesi&oacute;n m&acute;ximos se han superado, por favor espere unos momentos antes de volver a intentarlo.';
$lang['login_session_expired']      = 'Su sesi�n ha caducado.';
$lang['account_suspended']          = 'Su cuenta ha sido suspendida.';

// Account Changes
$lang['update_successful']	= 'La informaci�n de cuenta se ha actualizado correctamente.';
$lang['update_unsuccessful']	= 'No se puede actualizar informaci�n de la cuenta.';
$lang['delete_successful']	= 'La informaci�n de cuenta se ha eliminado correctamente.';
$lang['delete_unsuccessful']    = 'No se puede eliminar informaci�n de la cuenta.';

// Form Validation
$lang['form_validation_duplicate_identity'] = "Ya existe una cuenta con esta direccion de correo electronico o nombre de usuario.";
$lang['form_validation_duplicate_email']    = "El Email de %s campo no est� disponible.";
$lang['form_validation_duplicate_username'] = "El nombre de usuario de %s campo no est� disponible.";
$lang['form_validation_current_password']   = "El %s campo no es v�lido.";