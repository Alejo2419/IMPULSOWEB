



<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
    exit; // Detiene la ejecución para solo mostrar los datos enviados
}

/*
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST["nombre"]);
    $apellido = htmlspecialchars($_POST["apellido"]);
    $telefono = htmlspecialchars($_POST["telefono"]);
    $correo = htmlspecialchars($_POST["correo"]);
    $servicio = htmlspecialchars($_POST["servicio"]);

    $para = "correo@ejemplo.com";
    $asunto = "Nuevo contacto de formulario";
    $mensaje = "Nombre: $nombre\nApellido: $apellido\nTeléfono: $telefono\nCorreo: $correo\nServicio: $servicio";
    $cabeceras = "From: $correo";

    if (mail($para, $asunto, $mensaje, $cabeceras)) {
        echo "Te contactaremos en el menor tiempo posible.";
    } else {
        echo "Error, inténtelo después.";
    }
} else {
    echo "Acceso no autorizado.";
}
    */
?>

