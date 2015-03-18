<?php  
  
// check for form submission - if it doesn't exist then send back to contact form  
if (!isset($_POST["save"]) || $_POST["save"] != "contact") {  
    header("Location: index.php"); exit;  
}  
      
// get the posted data  
$name = $_POST["contact_name"];  
$email_address = $_POST["contact_email"];
$personas = $_POST["cant_personas"];
$message = $_POST["contact_message"];  
      
// check that a name was entered  
if (empty ($name))  
    $error = "No pudimos enviar tu mensaje. Falta el nombre";  
// check that an email address was entered  
elseif (empty ($email_address))   
    $error = "No pudimos enviar tu mensaje. Falta el correo o teléfono";  


          
// check if an error was found - if there was, send the user back to the form  
if (isset($error)) {  
    header("Location: index.php?e=".urlencode($error)); exit;  
}  
          
// write the email content  
$email_content = "Nombre: $name\n";  
$email_content .= "Correo o telefono: $email_address\n";  
$email_content .= "Cantidad Personas: $personas\n";  
$email_content .= "Mensaje:\n\n$message";  
      
// send the email  
mail ("andres@elbuencamino.com", "Contacto desde Gurqui", $email_content);  
      
// send the user back to the form  
header("Location: index.php?s=".urlencode("Nos llegó tu reserva, nos contactaremos contigo a la brevedad.")); exit;  
  
?>