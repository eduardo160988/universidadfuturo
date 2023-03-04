<?php

/** RUTAS GENERALES **/

define('DOC_ROOT', $_SERVER['DOCUMENT_ROOT']."/");
define('DOC_ROOT_SUBIR', $_SERVER['DOCUMENT_ROOT']."");
define('WEB_ROOT', 'https://');
define('DOC_ROOT_CLASSES',$_SERVER['DOCUMENT_ROOT']."");
 
 


/** BASE DE DATOS **/
define('SQL_HOST', '');
define('SQL_DATABASE', '');
define('SQL_USER', '');
define('SQL_PASSWORD',''); 

define('USER_PAC', '');
define('PW_PAC', '');

/** SMTP **/
define('SMTP_HOST','');
define('SMTP_USER','');
define('SMTP_PASS','');
define('SMTP_PORT','587'); 





/** NOMBRE DEL SISTEMA **/

define('PROJECT_NAME', 'nombre del proyecto');
define('RAZONSOCIAL', '');




define('AVISOCONF','	<HR width=50% align="center"> <h3><strong>AVISO DE CONFIDENCIALIDAD</strong></h3>
				    <p style="text-align:justify;">Este correo electr&oacute;nico, incluyendo en su caso, los archivos adjuntos al mismo, pueden contener informaci&oacute;n 
					de car&aacute;cter confidencial y/o privilegiada, y se env&iacute;an a la atenci&oacute;n &uacute;nica y exclusivamente 
					de la persona y/o entidad a quien va dirigido. La copia, revisi&oacute;n, uso, revelaci&oacute;n y/o distribuci&oacute;n de dicha informaci&oacute;n
					confidencial sin la autorizaci&oacute;n por escrito de '.RAZONSOCIAL.'  est&aacute; prohibida.</p> 
					 
					<p style="text-align:justify;">Si usted no es el destinatario a quien se dirige el presente 
					correo, favor de contactar al remitente respondiendo al presente correo y eliminar el correo original incluyendo sus archivos, as&iacute; como cualesquiera copia del mismo. 
					Mediante la recepci&oacute;n del presente correo usted reconoce y acepta que en caso de incumplimiento de su parte y/o de sus representantes a los t&eacute;rminos antes mencionados, 
					'.RAZONSOCIAL.' tendr&aacute; derecho a los da&ntilde;os y perjuicios que esto le cause.</p>');

?>