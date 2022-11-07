<?php

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $emailConfirmacion = $_POST['emailConfirmacion'];
    $telefono = $_POST['telefono'];
    $empresa = $_POST['empresa'];
    $mensaje = $_POST['mensaje'];

    $header = "From: " . $email . " \r\n";
    $header = "X-Mailer: PHP/" . phpversion() . " \r\n";
    $header = "Mime-Version: 1:0 \r\n";
    $header = "Content-Type: text/plain";
    
    $mensajeC = "Este mensaje fue enviado por: " . $nombre . " " . $apellido ." \r\n";
    $mensajeC = $mensajeC . "Su e-mail es: " . $emailConfirmacion . " \r\n";
    $mensajeC = $mensajeC . "Teléfono de contacto: " . $telefono . " \r\n";
    $mensajeC = $mensajeC . "Empresa proveniente: " . $empresa . " \r\n";
    $mensajeC = $mensajeC . "Mensaje: " . $_POST['mensaje'] . " \r\n";
    $mensajeC = $mensajeC . "Enviado el: " . date('d/m/Y', time());

    $para = '1830040@upv.edu.mx';
    $asunto = 'Consultoría';

    //mail($para, $asunto, utf8_decode($mensajeC), $header);
    //header('Location: http://www.asesoresnarvaez.com/');
?>