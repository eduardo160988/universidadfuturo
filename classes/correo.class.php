<?php 

class Correo extends Main
{
	public $asunto;
	
	public $mensaje;
	private $recoveryKey;
	public $destinoNombre;
	public $destinoEmail;
	public $OrigenNombre="dentalcoid";
	public $origenEmail="no-responder@dentalcoid.com";
	public $archivo=0;
	public $ruta=DOC_ROOT;
	public $confidencialidad=AVISOCONF; 
	public $infoExpediente;
	public $passwd="{T2pby1gn*}*1";
	public $host="mail.dentalcoid.com";
	public $listaArchivos=array();
	public $correos=array();
	public $datos;
	public $origenNombre;

	public function setItemArchivo($item){
		$this->listaArchivos[]=$item;
	}
	
	public function setArchivo($value){
		$this->archivo=$value;
	}
	
	public function setHost($value){
		$this->host=$value;
	}
	
	public function setInfoExpediente($value){
		$this->infoExpediente=$value;
	}
	
	public function setPassWd($value){
		$this->passwd=$value;
	}
	
	public function setOrigenEmail($value){
		$this->origenEmail=$value;
	}
	public function setLlave($value){
		$this->recoveryKey=$value;
	} 
	
	public function setEmailDestino($value){
		$this->destinoEmail=$value;
	}
	public function setDestinoNombre($value){
		$this->destinoNombre=$value;
	}
	public function setDatos($value){
		$this->datos = $value;
	}
	
	public function setAsunto($value){
		$this->asunto=$value;
	}
	
	public function getCorreosEnvioFactura(){
		$sql="select * from correocertificado where estatus=1";
		$this->Util()->DB()->setQuery($sql);
	    $result = $this->Util()->DB()->GetResult();
		return $result;
	}
	
	public function SaveMensaje($datos){ 
		$sql="
									INSERT INTO
										contactos
									(
										`nombre`,
										`email`,
										`mensaje`,
										`ip`,
										`fecha`
								)
								VALUES
								(				
										'".$datos["nombre"]."',
										'".$datos["email"]."',
										'".$datos["mensaje"]."',
										'".$this->getRealIP()."',
										'".date("Y-m-d H:i:s")."'
										
								);";
							 $this->Util()->DB()->setQuery($sql);   
							 $this->Util()->DB()->InsertData();
	}
	public function getRealIP() {

			if (!empty($_SERVER['HTTP_CLIENT_IP']))
				return $_SERVER['HTTP_CLIENT_IP'];
			   
			if (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
				return $_SERVER['HTTP_X_FORWARDED_FOR'];
		   
			return $_SERVER['REMOTE_ADDR'];
	}
	public function setMensaje($datos){
		if($datos["opcion"]=="contacto"){
			$this->mensaje="
					<!DOCTYPE HTML>

							<html>
								<head>
								
								</head>
								<body>
								<img src='https://dentalcoid.com/admin/images/log.png' alt='' width='200px'>
										<h3>Nos han contactado en nuestra web con la siguiente Informaci&oacute;n</h3>
										".date("d-m-Y")." ".date("H:i")."
										<table style='border:1px solid #9c7bc6;text-left'>
												<tr >
														<td style='background:#9c7bc6;color:#ffffff;font-weight:700;padding:10px;border:1px solid #fff'>Nombre</td>
														<td>".$datos["nombre"]."</td>
												</tr>
												<tr>
														<td style='background:#9c7bc6;color:#ffffff;font-weight:700;padding:10px;border:1px solid #fff'>Email</td>
														<td>".$datos["email"]."</td>
												</tr>
												<tr>
														<td style='background:#9c7bc6;color:#ffffff;font-weight:700;padding:10px;border:1px solid #fff'>Celular</td>
														<td>".$datos["cel"]."</td>
												</tr>
												<tr>
														<td colspan='2' style='background:#9c7bc6;color:#ffffff;font-weight:700;padding:10px;border:1px solid #fff'>Mensaje</td>
														
												</tr>
												<tr>
														<td colspan='2'>".$datos["mensaje"]."</td>
														
												</tr>
										</table>
								</body>
								
							<html>
			";
			
		}else if($datos["opcion"]=="compraMembresia"){
			$this->mensaje="
					<!DOCTYPE HTML>
							<html>								
								<body>
								
										<h3>Bienvenido a la familia COID</h3>
										<h4> Has adquirido una membresia ".$this->datos["tipo"]["tipo"]." con folio <strong> ".$this->datos["respuesta"]["membresia"]." </strong> y vencimiento ".$this->datos["respuesta"]["vencimiento"]["larga"]."</h4>
										<h5> Beneficiarios </h5> <ul>";
										foreach($this->datos["beneficiarios"] as $key=>$row){
											$this->mensaje.="<li>".$row["folio"]."-".$row["nombre"]." ".$row["apPaterno"]." ".$row["apMaterno"]."</li>";
										}
										$this->mensaje.= "</ul> <h5>Beneficios</h5><ul>";
										foreach($this->datos["tipo"]["beneficios"] as $key=>$row){
											$this->mensaje.="<li>".$row["concepto"]."</li>";
										}
										$this->mensaje.="</ul">
					
								$this->mensaje.="<br>
								<img src='https://dentalcoid.com/admin/images/log.png' alt='' width='200px'>
								".AVISOCONF."
								</body>
								
							<html>
			";
		}else if($datos["opcion"]=="recovery-email"){
				$this->mensaje="
					<!DOCTYPE HTML>

							<html>
								<head>
								
								</head>
								<body>
								<img src='https://dentalcoid.com/admin/images/log.png' alt='' width='200px'>
										<br>
										".date("d-m-Y")." ".date("H:i")."
										<h3>Hola ".$this->datos["nombre"]." ".$this->datos["apellidoPaterno"]."</h3>
										<h5>Haz solicitado la restauración de tu contraseña  haz click en el siguiente enlace para crear una contraseña nueva</h5>
										<h2> <a href='https://dentalcoid.com/admin/new-password/key/".$this->datos["llave"]."'> Crear contraseña nueva </a> </h2>
										<br>  
										<h5>El enlace vence ".$nuevafecha = date ( 'd-m-Y H:i' , strtotime($this->datos["caducidad"]))."</h5>
										<br>
										".AVISOCONF."
								</body>
								
							<html>
			";
		}else if($datos["opcion"]=="envioFactura"){
			$this->mensaje="<div  style='margin: 0'>
								<table bgcolor='#EBEBEB' align='center' border='0' cellpadding='0' cellspacing='0' width='100%' style='min-width: 600px; max-width: 100%; padding: 32px'>

								<td>
									<table bgcolor='#FFFFFF' align='center' border='0' cellpadding='0' cellspacing='0' width='100%' style='min-width: 400px; max-width: 600px; border-radius: 4px'>

										 
										 
										<tr>
											<td>
												<table align='center' border='0' cellpadding='2' cellspacing='0' width='100%' style='padding: 32px; border-bottom: 1px solid #EBEBEB'>
													<tr>

														
														<td align='left' valign='middle'></td>

														
														<td align='right' valign='middle'>
															<img width='180' style='width: 180px' src='https://dentalcoid.com/admin/images/log.png' alt='facturama-logo' />
														</td>
													</tr>
												</table>
											</td>
										</tr>

										

										<tr>
											<td style='padding: 32px; border-bottom: 1px solid #EBEBEB'>
												<table border='0' cellpadding='0' cellspacing='0' width='100%' style='min-width: 400px'>
													<tr>

														

														<td colspan='2'>
															<h1 style='font-family: Montserrat, Helvetica, Arial, sans-serif; font-size: 32px; font-weight: 400; color: #3C5A65; line-height: 40px; text-align: center; margin: 0'>
																<span>".$datos["razonSocial"]."</span><br /> RFC <span>".$datos["rfc"]."</span>
															</h1>
														</td>
													</tr>

													

													<tr>
														<td colspan='2'>
															<p style='font-family: Montserrat, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 300; color: #3C5A65; line-height: 24px; text-align: center; margin: 40px 0 24px 0'>
																Has recibido una factura electrónica<br />
																<span style='font-weight: 500; color: #00AFC0'>".$datos["serie"]." </span>
																<span style='white-space: pre-wrap'></span>
															</p>
														</td>
													</tr>

													


													<tr>
														<td colspan='2' width='50%'>
															<p style='font-family: \Montserrat\', -apple-system, Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 300; color: #3C5A65; line-height: 24px; text-align: center; margin: 24px 0 24px 0'>
																Estimado paciente: A continuación adjuntamos su recibo de honorarios. <br /><br />
																Gracias por confiar en COID
															</p>
															
														</td>
													</tr>
													

												</table>
											</td>
										</tr>



											

										<tr>
											<td bgcolor='#3C5A65' style='padding: 8px 30px 8px 30px; background-size: 120%; background-position: bottom right; background-image: url(https://app.facturama.mx/Content/img/site/shapes-footer.png)'>
												<table border='0' cellpadding='0' cellspacing='0' width='100%'>
													<tr>
														<td>
															<p style='color:#FFFFFF!important;font-family: \'Montserrat\', -apple-system, Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 14px; font-weight: 300; line-height: 20px; text-align: center; margin: 16px 0 16px 0'>
																
																	<span>
																		<span style='color:#FFFFFF!importante' >".AVISOCONF."</span><br />
																		<span style='color: #00AFC0; line-height: 20px'>www.dentalcoid.com</span>
																	</span>
																<br />
																
															</p>
														</td>
													</tr>
												</table>
											</td>
										</tr>

									</table>
								</td>

							</table>
							</div>
							";
						}else if($datos["opcion"]=="actualizacionDatos"){
		
							$this->mensaje="<div  style='margin: 0'>
												<table bgcolor='#EBEBEB' align='center' border='0' cellpadding='0' cellspacing='0' width='100%' style='min-width: 600px; max-width: 100%; padding: 32px'>
				
												<td>
													<table bgcolor='#FFFFFF' align='center' border='0' cellpadding='0' cellspacing='0' width='100%' style='min-width: 400px; max-width: 600px; border-radius: 4px'>
				
														 
														 
														<tr>
															<td>
																<table align='center' border='0' cellpadding='2' cellspacing='0' width='100%' style='padding: 32px; border-bottom: 1px solid #EBEBEB'>
																	<tr>
				
																		
																		<td align='left' valign='middle'></td>
				
																		
																		<td align='right' valign='middle'>
																			<img width='180' style='width: 180px' src='https://dentalcoid.com/admin/images/log.png' alt='COID' />
																		</td>
																	</tr>
																</table>
															</td>
														</tr>				
																	<tr>
																		<td colspan='2'>
																			<p style='font-family: Montserrat, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 300; color: #3C5A65; line-height: 24px; text-align: center; margin: 40px 0 24px 0'>
																				Gracias por actualizar tus datos de facturación<br />
																				
																				<span style='white-space: pre-wrap'></span>
																				<div  style='display:flex; justify-content:center; margin-left:9px;'>
				<div style='display:flex; ;
				  font-family: Arial, sans-serif; 
				  color: #3C5A65; text-align: center;
				   font-size: 18px; width: 98%; max-width: 2000px; 
				   -webkit-box-sizing: border-box; box-sizing: border-box; border: 1px solid rgba(43, 40, 40, 0.1);'>
					<div style='padding-left:20%; margin:0; width: 60%; position: relative; background-color: #ffffff;'>
					  <h3 style='position: relative;
					  top: 0;
					  font-weight: 800;
					  padding: 5px 15px 0 15px;
					  margin: 0 auto;
					  -webkit-transform: translateY(-50%);
					  transform: translateY(-50%);
					  display: inline-block;
					  background-color: #0b427c;
					  color: #ffffff;
					  text-transform: uppercase; margin-left:5%; text-align: center;'>
						Tus datos
					  </h3>
					  <div style='padding: 0px 10px 20px;'></div>
					  <ul style=' padding: 0;
					  margin: 0;
					  text-align: center;
					  list-style: outside none none;
					  font-size: 0.8em;'>
						<li style='border-top: 1px solid #d2d7e2;
						padding: 10px 5%;'> <strong> RFC  </strong> </li>
						<li style='background: rgba(0, 0, 0, 0.08); padding: 10px 5%;'>".$this->datos["rfc"]." </li>
						<li style=' border-top: 1px solid #d2d7e2;
						padding: 10px 5%;'> <strong>Razón Social <strong> </li>
						<li style='background: rgba(0, 0, 0, 0.08); padding: 10px 5%;'>".$this->datos["razonSocial"]."</li>
						<li style='border-top: 1px solid #d2d7e2;
						padding: 10px 5%;'><strong>CP  <strong> </li>
						<li style='background: rgba(0, 0, 0, 0.08); padding: 10px 5%;'>".$this->datos["cp"]."</li>
						<li style='border-top: 1px solid #d2d7e2;
						padding: 10px 5%;'> <strong>Regimén Fiscal  <strong> </li>
						<li style='background: rgba(0, 0, 0, 0.08); padding: 10px 5%;'>".$this->datos["descripcion"]."</li>
						<li style=' border-top: 1px solid #d2d7e2;
						padding: 10px 5%;'> <strong>Uso CFDI <strong> </li>
						<li style='background: rgba(0, 0, 0, 0.08); padding: 10px 5%;'>".$this->datos["concepto"]."</li>
					  </ul>
					</div>
					</div>
				  </div>	<p style='font-family: Montserrat, Helvetica, Arial, sans-serif; font-size: 23px; font-weight: 700; color: #3C5A65; line-height: 24px; text-align:center; margin: 25px 0 24px 0'>
				  Gracias por confiar en COID	</p>
			  </p>
  
																</div>
																					</td>
																	</tr>
																</table>
															</td>
														</tr>		
														<tr>
															<td bgcolor='#3C5A65' style='padding: 8px 30px 8px 30px; background-size: 120%; background-position: bottom right; background-image: url(https://app.facturama.mx/Content/img/site/shapes-footer.png)'>
																<table border='0' cellpadding='0' cellspacing='0' width='100%'>
																	<tr>
																		<td>
																			<p style='color:#FFFFFF!important;font-family: \'Montserrat\', -apple-system, Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 14px; font-weight: 300; line-height: 20px; text-align: center; margin: 16px 0 16px 0'>
																				
																					<span>
																						<span style='color:#FFFFFF!importante' >".AVISOCONF."</span><br />
																						<span style='color: #00AFC0; line-height: 20px'>www.dentalcoid.com</span>
																					</span>
																				<br />
																				
																			</p>
																		</td>
																	</tr>
																</table>
															</td>
														</tr>
				
													</table>
												</td>
				
											</table>
											</div>
											";
						
						 } else if($datos["opcion"]=="InvitacionActualizacionDatos"){
		
							$this->mensaje="<div  style='margin: 0'>
												<table bgcolor='#EBEBEB' align='center' border='0' cellpadding='0' cellspacing='0' width='100%' style='min-width: 600px; max-width: 100%; padding: 32px'>
												<td>
													<table bgcolor='#FFFFFF' align='center' border='0' cellpadding='0' cellspacing='0' width='100%' style='min-width: 400px; max-width: 600px; border-radius: 4px'>											 
														<tr>
															<td>
																<table align='center' border='0' cellpadding='2' cellspacing='0' width='100%' style='padding: 32px; border-bottom: 1px solid #EBEBEB'>
																	<tr>											
																		<td align='left' valign='middle'></td>		
																		<td align='right' valign='middle'>
																			<img width='180' style='width: 180px' src='https://i.pinimg.com/originals/f4/f3/17/f4f3172ff739eab83e57104dd33290ce.jpg' alt='facturama-logo' />
																		</td>
																	</tr>
																</table>
															</td>
														</tr>				
																	<tr>
																		<td colspan='2'>
																					<span style='white-space: pre-wrap'></span>
																					<div  style='width: 100%;'>
																					<img style='width: 90%; margin-left:5%;' src='https://i.pinimg.com/originals/75/e8/a9/75e8a95a4b534c5a2ef56814f951447d.jpg' alt=''/>				 
																					<br>
																					
																					<br>
																					<h2 style='color: rgb(0, 0, 0); margin-left:28%; margin-top: 1.5rem;'>	
																					<a href='https://dentalcoid.com/mis-datos-de-facturacion' style='color:#000; font-weight: 800; text-decoration:none; padding: 0.25rem 0.5rem; line-height: 1.5;border-radius: 0.2rem;color: #fff;	background-color: #0069d9;	border-color: #0062cc;'>
																					Actualizar mis datos  </a>
																					<br><br>
																					Gracias por confiar en COID
																			</h2> 	  </p>
  
																</div>
																					</td>
																	</tr>
																</table>
															</td>
														</tr>		
														<tr>
															<td bgcolor='#3C5A65' style='padding: 8px 30px 8px 30px; background-size: 120%; background-position: bottom right; background-image: url(https://app.facturama.mx/Content/img/site/shapes-footer.png)'>
																<table border='0' cellpadding='0' cellspacing='0' width='100%'>
																	<tr>
																		<td>
																			<p style='color:#FFFFFF!important;font-family: \'Montserrat\', -apple-system, Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 14px; font-weight: 300; line-height: 20px; text-align: center; margin: 16px 0 16px 0'>
																				
																					<span>
																						<span style='color:#FFFFFF!importante' >".AVISOCONF."</span><br />
																						<span style='color: #00AFC0; line-height: 20px'>www.dentalcoid.com</span>
																					</span>
																				<br />
																				
																			</p>
																		</td>
																	</tr>
																</table>
															</td>
														</tr>
				
													</table>
												</td>
				
											</table>
											</div>
											";
						
						 }
	
					}



	public function EnumerateNotificaciones(){
		$sql="select * from correosweb where activo=1 ";
		$this->Util()->DB()->setQuery($sql);
		$result = $this->Util()->DB()->GetResult();
		return $result;
	}
	public function setEmailDestinoMasivo($value){
		$this->correos=$value;
		//echo $this->correos;
		foreach($this->correos as $key2=>$row2){
			echo $row2;
			// $_mail->AddAttachment($row,basename($row)); 
			echo "en el for";
		}
	}
	
////////////////////////////////	
		public function envio(){
						//echo $this->origenEmail."____".$this->passwd;
					//echo $this->destinoEmail;					
						$_mail = new PHPMailer(true);
						$_mail->IsSMTP(); 
						$_mail->CharSet = 'UTF-8';
						$_mail->SMTPAuth = true;  // estaba en true					
						$_mail->Host = $this->host; 
						$_mail->SMTPSecure = 'tls';
						$_mail->Username = $this->origenEmail; 
						$_mail->Password = $this->passwd; 
						$_mail->Port = "587"; 						
						$_mail->AddAddress($this->destinoEmail,$this->destinoNombre);
						$_mail->SetFrom($this->origenEmail,$this->origenNombre);		  
						$_mail->Subject = $this->asunto;		 
						$_mail->MsgHTML($this->mensaje);
					
						if($this->archivo==1){
							foreach($this->listaArchivos as $key=>$row){
								echo $row;
								$_mail->AddAttachment($row,basename($row)); 
							}							    
						}
						
						
						
						$_mail->Send();

			  
			}
	

}

?>