<?php
    if (isset($_POST["enviar"])) {
        $nombre = htmlspecialchars($_POST["name"]);
        $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
        $mensaje = htmlspecialchars($_POST["message"]);
    
        $destinatario = "arayafelipe0909@gmail.com";
        $asunto = "Nuevo mensaje de $email desde Yevenez Consultores";
    
        $contenido = "Nombre: $nombre \n";
        $contenido .= "Email: $email \n";
        $contenido .= "Mensaje: $mensaje";
    
        $headers = "From: contacto@yevenesconsultores.cl\r\n";
        $headers .= "Reply-To: $email\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
    
        $mail = mail($destinatario, $asunto, $contenido, $headers);
    
        if ($mail) {
            echo "<script>alert('El correo se envió correctamente :)');</script>";
        } else {
            echo "<script>alert('El correo no se pudo enviar, intente nuevamente :(');</script>";
        }
} 
?>