<?php
/*
 * The data sender of contact form
 */
	if(isset($_POST['g-recaptcha-response'])):
		$data = array(
			'secret' => "6Le3Y9AUAAAAAGvqAfWA5Av5iMtJ1JtCSugnZXlm",
			'response' => $_POST['g-recaptcha-response']
		);

			$verify = curl_init();
			curl_setopt($verify, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
			curl_setopt($verify, CURLOPT_POST, true);
			curl_setopt($verify, CURLOPT_POSTFIELDS, http_build_query($data));
			curl_setopt($verify, CURLOPT_SSL_VERIFYPEER, false);
			curl_setopt($verify, CURLOPT_RETURNTRANSFER, true);
			$response = curl_exec($verify);

			$response = json_decode($response);

			if($response->success):
					//contact form submission code
					$nombreCompleto 		= !empty($_POST['nombreCompleto']);
					$correoelectronico 		= !empty($_POST['correoelectronico']);
					$telefonoDeContacto 	= !empty($_POST['telefonoDeContacto']);
					$montoaSolicitar 		= !empty($_POST['montoaSolicitar']);
					$finalidad 				= !empty($_POST['finalidad']);
					$numerodeSocio 			= !empty($_POST['numerodeSocio']);
					$estado 				= !empty($_POST['estado']);
					$municipio 				= !empty($_POST['municipio']);
					$avisoDePrivacidad 		= !empty($_POST['avisoDePrivacidad']);

					$htmlContent = "

						<!DOCTYPE html PUBLIC '-//W3C//DTD HTML 4.01 Transitional//EN' 'http://www.w3.org/TR/html4/loose.dtd'>
						<html lang='es'>
						<head>
						<meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
						<meta name='viewport' content='width=device-width, initial-scale=1'> <!-- So that mobile will display zoomed in -->
						<meta http-equiv='X-UA-Compatible' content='IE=edge'> <!-- enable media queries for windows phone 8 -->
						<meta name='format-detection' content='telephone=no'> <!-- disable auto telephone linking in iOS -->
						<title>Información de formulario</title>
						<style type='text/css'>
							body {margin: 0;padding: 0;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;}
							table {border-spacing: 0;}
							table td {border-collapse: collapse;}
							.ExternalClass {width: 100%;}
							.ExternalClass,.ExternalClass p,.ExternalClass span,.ExternalClass font,.ExternalClass td,.ExternalClass div {line-height: 100%;}
							.ReadMsgBody {width: 100%;background-color: #ebebeb;}
							table {mso-table-lspace: 0pt;mso-table-rspace: 0pt;}
							img {-ms-interpolation-mode: bicubic;}
							.yshortcuts a {border-bottom: none !important;}
							@media screen and (max-width: 599px) {table[class='force-row'],table[class='container'] {width: 100% !important;max-width: 100% !important;}}
							@media screen and (max-width: 400px) {td[class*='container-padding'] {padding-left: 12px !important;padding-right: 12px !important;}}
							.ios-footer a {color: #aaaaaa !important;text-decoration: underline;}
						</style>
						</head>
						<body style='margin:0; padding:0;' bgcolor='#f0f0f0' leftmargin='0' topmargin='0' marginwidth='0' marginheight='0'>
						<!-- 100% background wrapper (grey background) -->
						<table border='0' width='100%' height='100%' cellpadding='0' cellspacing='0' bgcolor='#f0f0f0'>
							<tr>
								<td align='center' valign='top' bgcolor='#f0f0f0' style='background-color: #f0f0f0;'>
									<br>
									<!-- 600px container (white background) -->
									<table border='0' width='600' cellpadding='0' cellspacing='0' class='container' style='width:600px;max-width:600px;'>
										<tr>
											<td align='center' class='container-padding header' align='left' bgcolor='#45bf00' style='background-color:#45bf00;font-family:Helvetica, Arial, sans-serif;font-size:24px;font-weight:bold;padding-bottom:12px;padding-top:12px;color:#fff;padding-left:24px;padding-right:24px;text-align:center;'>
												<img src='http://cpm.coop/dev/assets/img/cpm-logo.png' width='90' height='90'>
											</td>
										</tr>
										<tr>
											<td class='container-padding content' align='left' style='padding-left:24px;padding-right:24px;padding-top:12px;padding-bottom:12px;background-color:#ffffff'>
												<br>
												<div class='title' style='font-family:Helvetica, Arial, sans-serif;font-size:18px;font-weight:600;color:#374550'>Crédito X - Solicitud de información</div>
												<br>
												<div class='body-text' style='font-family:Helvetica, Arial, sans-serif;font-size:14px;line-height:20px;text-align:left;color:#333333'>
														<p>Dato 1: <strong>$nombreCompleto</strong></p>
														<p>Dato 2: <strong>$correoelectronico</strong></p>
														<p>Dato 3: <strong>$telefonoDeContacto</strong></p>
														<p>Dato 4: <strong>$montoaSolicitar</strong></p>
														<p>Dato 5: <strong>$finalidad</strong></p>
														<p>Dato 6: <strong>$numerodeSocio</strong></p>
														<p>Dato 7: <strong>$estado</strong></p>
														<p>Dato 8: <strong>$municipio</strong></p>
														<p>Dato 9: <strong>$avisoDePrivacidad</strong></p>
												</div>
											</td>
										</tr>
										<tr>
											<td class='container-padding footer-text' align='left' style='font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:16px;color:#aaaaaa;padding-left:24px;padding-right:24px'>
												<br>
												<small>Tecnología por: <a href='http://cyanmedialab.com/' target='_blank'>Cyan Media Lab</a></small>
												<br><br><br><br>
											</td>
										</tr>
									</table>
									<!--/600px container -->
								</td>
							</tr>
						</table>
						<!--/100% background wrapper-->
						</body>
						</html>

					";
					
					$to = 'fgonzalez@cyanmedialab.com';
					$subject = 'Crédito X - Solicitud de información';
					
					// Always set content-type when sending HTML email
					$headers = "MIME-Version: 1.0" . "\r\n";
					$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
					// More headers
					$headers .= 'From:'.$nombre.' <'.$correo.'>' . "\r\n";
					//send email
					@mail($to,$subject,$htmlContent,$headers);
					
			echo "<script>
					alert('Datos enviados');
					window.location = 'localhost/cpm-html/index.php';
				</script>";
			else:
					echo "<script>alert('Ha surgido un error');</script>";
			endif;
	else:
			echo "<script>alert('Se ha detectado un robot!');</script>";
	endif;
?>