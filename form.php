<?php
if (isset($_POST["enviar"])) {
    $nombre = $_POST["name"];
    $email = $_POST["email"]; 
    $mensaje = $_POST["message"];

    $destinatario = "arayafelipe0909@gmail.com";
    $asunto = "nuevo mensaje de $email desde Yevenez Consultores";

    $contenido = "Nombre: $nombre \n";
    $contenido .= "Email: $email \n";
    $contenido .= "Mensaje: $mensaje";

    $header = "From: contaco@yevenesconsultores.cl";
    $mail = mail($destinatario, $asunto, $contenido, $header);

    if ($mail) {
        echo "<script>alert('El correo se envio correctamente :)')</script>";
    } else {
        echo "<script>alert('El correo no se pudo enviar, intente nuevamente :(')</script>";
    }
}
?>