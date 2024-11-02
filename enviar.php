<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST['nombre']);
    $email = htmlspecialchars($_POST['email']);
    $mensaje = htmlspecialchars($_POST['mensaje']);

    $to = 'ashleycarolina.herrera1@gmail.com'; // Reemplaza con tu dirección de correo
    $subject = 'Nuevo mensaje de contacto';
    $body = "Nombre: $nombre\nCorreo: $email\nMensaje: $mensaje";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Correo enviado con éxito.";
    } else {
        echo "Error al enviar el correo.";
    }
} else {
    echo "Método no permitido.";
}
?>
