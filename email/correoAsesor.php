<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

if ($_POST) {
    $nombre = $_POST['nombre'];
    $email = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $mensaje = $_POST['mensaje'];
    $codigo = $_POST['codigo'];
    $nom_asesor = $_POST['nom_asesor'];
    $correo_asesor = $_POST['correo_asesor'];
    
    
}


$mail = new PHPMailer(true);

try{
    $mail->isSMTP();

    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->CharSet = 'UTF-8';
    $mail->Username = 'masivoinmobiliarias@gmail.com';
    $mail->Password = 'dexcon2019@';

    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;
    // Mensaje para enviar
    
    $mail->isHTML(true);
    $mail->setFrom('SantaFeDc@arrendamientossantafe.com', 'SantaFeDc@arrendamientossantafe.com');
    $mail->addAddress($correo_asesor); 

    $mail->Subject='Mensaje desde la página web SantaFe DC sección de Inmuebles';
    $mail->Body = '<span>Hola '.$nom_asesor.' , '.$nombre.' quiere recibir información sobre un inmueble con Código: '.$codigo.'.</span>
                    <h4>Sus datos de contacto son:</h4>
                    <ul>
                        <li>Nombre: '.$nombre.'</li>
                        <li>Correo: '.$email.'</li>
                        <li>Teléfono: '.$telefono.'</li>
                        <li>Mensaje: '.$mensaje.'</li>
                    </ul>
    ';
    $mail->send();
    echo "<script language='javascript'>
    alert('Mensaje enviado, muchas gracias.');
    window.location.href='../inmuebles.php?'
         </script>";

}catch(Exception $e){

    echo 'algo salio mal' , $e->getMessage();
}
