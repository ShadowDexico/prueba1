<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);


    $to = "tuemail@dominio.com";  
    $subject = "Nuevo mensaje de $name";

   
    $body = "Tienes un nuevo mensaje de contacto:\n\n";
    $body .= "Nombre: $name\n";
    $body .= "Correo: $email\n";
    $body .= "Mensaje:\n$message";


    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8";

    if (mail($to, $subject, $body, $headers)) {
        echo "<p>¡Gracias por ponerte en contacto con nosotros, $name! Tu mensaje ha sido enviado.</p>";
    } else {
        echo "<p>Hubo un error al enviar tu mensaje. Por favor, inténtalo nuevamente más tarde.</p>";
    }
}
?>
