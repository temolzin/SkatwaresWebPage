<?php
// Check for empty fields
if(empty($_POST['nombre'])  		||
   empty($_POST['email']) 		||
   empty($_POST['telefono']) 		||
   empty($_POST['mensaje'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No has llenado todos los campos";
	return false;
   }
	
$nombre = $_POST['nombre'];
$email_address = $_POST['email'];
$telefono = $_POST['telefono'];
$mensaje= $_POST['mensaje'];
	
// Create the email and send the message
$to = 'skaineitor@hotmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Skatwares, Formulario de contacto:  $nombre";
$email_body = "Mensaje a la página de Skatwares. \n\n"." Detalles:\n\nNombre: $nombre\n\nEmail: $email_address\n\nTeléfono: $telefono\n\nMensaje:\n$mensaje";
$headers = "From: skaineitor@hotmail.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;			
?>