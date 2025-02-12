<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php'; // Ajusta la ruta si es necesario

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"] ?? '';
    $apellido = $_POST["apellido"] ?? '';
    $telefono = $_POST["telefono"] ?? '';
    $correo = $_POST["correo"] ?? '';
    $servicio = $_POST["servicio"] ?? '';

    $mail = new PHPMailer(true);

    try {
        // Configuración del servidor SMTP de Gmail
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'impulso.codeydesign@gmail.com'; // Tu correo
        $mail->Password = 'raja syhm mgrb aqkh'; 
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Configuración del remitente y destinatario
        $mail->setFrom('impulso.codeydesign@gmail.com', 'Impulso Code & Design');
        $mail->addAddress('impulso.codeydesign@gmail.com'); // Recibes el mensaje en este correo

        // Contenido del correo
        $mail->isHTML(true);
        $mail->Subject = 'Nuevo contacto desde la web';
        $mail->Body = "
            <h2>Nuevo mensaje de contacto</h2>
            <p><strong>Nombre:</strong> $nombre $apellido</p>
            <p><strong>Teléfono:</strong> $telefono</p>
            <p><strong>Correo:</strong> $correo</p>
            <p><strong>Servicio interesado:</strong> $servicio</p>
        ";

        // Enviar el correo
        if ($mail->send()) {
            echo "¡Mensaje enviado! Te contactaremos pronto.";
        } else {
            echo "Error al enviar el mensaje.";
        }
    } catch (Exception $e) {
        echo "Error: {$mail->ErrorInfo}";
    }
}
?>