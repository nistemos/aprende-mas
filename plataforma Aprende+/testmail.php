<?php
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "contacto@aprendemassyh.com";
    $to = "nisteemos@gmail.com";
    $subject = "Activacion de usuario en Aprende más";
    $message = "
    	<html>
			<head>
				<title>Activación usuario</title>
				<style type='text/css'>
					.boton_personalizado{
						text-decoration: none;
						padding: 10px;
						font-weight: 600;
						font-size: 20px;
						color: #ffffff;
						background-color: #1883ba;
						border-radius: 6px;
						border: 2px solid #0016b0;
						height: 30px;
					}
					.boton_personalizado:hover{
						color: #1883ba;
						background-color: #ffffff;
					}
				</style>
			</head>
			<body>
			  	<p>¡Termina el registro!</p>
			  	<a href='https://aprendemassyh.com/Controller/Controlleremail.php?cod=' target='_blank' class='boton_personalizado'>
	            	Haz click aquí
	        	</a>
	        	<footer>
	        		<p>Este es el pie de pagina</p>
	        	</footer>
			</body>
		</html>
    ";
    $headers = "From:" . $from. "\r\n";
    // Para enviar un correo HTML, debe establecerse la cabecera Content-type
	$headers  .= 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
    mail($to,$subject,$message, $headers);
    echo "El mensaje de email a sido enviado";
?>