<?php
include('phpmail/class.phpmailer.php');
include('phpmail/class.smtp.php');

    $name = $_POST['name'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $subject = $_POST['subject'];
    $text = $_POST['text'];
    //correo para arconte
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from_arconte = "CORREO PAGINA ARCONTE TECHNOLOGIES";
    $to_arconte = "info@arcontetechnologies.com";
    $subject_arconte = utf8_decode($subject);
    $message_arconte = "NOMBRE DEl CLIENTE: ".utf8_decode($name)."\n";
    $message_arconte .= "CORREO: ".$email."\n";
    $message_arconte .= utf8_decode("TELÉFONO:")." ".$telephone."\n";
    $message_arconte .= "MENSAJE:\n";
    $message_arconte .= utf8_decode($text);
    $headers_arconte = "From: ARCONTE SERVICES";
    $send_arconte = mail($to_arconte,$subject_arconte,$message_arconte,$headers_arconte);
    
    //Correo para usuario
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from_client = "info@arcontetechnologies.com";
    $to_client = $_POST['email'];
    $subject_client = utf8_decode("CONTÁCTO ARCONTE TECHNOLOGIES");
    $message_client = utf8_decode("Gracias por confiar en Arconte Technologies, nos pondremos en contacto con usted lo más pronto posible.")."\n\n";
    $message_client .= "Le informamos que puede contactarnos en nuestras redes sociales:\n\n";
    $message_client .= "FACEBOOK: https://www.facebook.com/arcontetechnologies/\n";
    $message_client .= "TWITTER: https://twitter.com/ArconteT\n";
    $message_client .= "INSTAGRAM: https://www.instagram.com/arcontetechnologies/\n";
    $message_client .= "LINKEDIN: https://www.linkedin.com/in/arconte-technologies-23bb04171/\n\n";
    $message_client .= utf8_decode("ARCONTE TECHNOLOGIES EXCEDIENDO LOS LÍMITES");
    $headers_client = "From:" . $from_client;
    $send_client = mail($to_client,$subject_client,$message_client,$headers_client);

    //volver a la pagina principal
    if($send_arconte && $send_client){
    //echo "El correo fue enviado correctamente.";
    header('Location: ../contact.php');
    //header('Location: ../contact.php');
    }else{
    //echo "Hubo un inconveniente.";
    header('Location: ../contact.php'); 
    //header('Location: ../contact.php');
    }
?>