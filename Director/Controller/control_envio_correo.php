<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../Ressourcer/PhpMailer/Exception.php';
require '../Ressourcer/PhpMailer/PHPMailer.php';
require '../Ressourcer/PhpMailer/SMTP.php';




function enviar_correo($nombre,$correo,$pdf,$direc){
$mail = new PHPMailer(true);
//$ruta='../Ressourcer/pdf_envio/'.$pdf;
try {
    //Server settings
    $mail->SMTPDebug = 0;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = '';                     // Colocar el correo aqui
    $mail->Password   = '';                               // colocar la contraseña aqui
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('','Universidad de Guanajuato');           // Remitente  setFrom('Poner correo del remitente','Nombre del Origen')
    $mail->addAddress($correo);     // Add a recipient
  

    // Attachments
    $mail->addAttachment($pdf,'Respuesta.pdf');         // Archivos adjuntos
 

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Respuesta a la peticion solicitada a la Universidad de Guanajuato';
    $mail->Body    = 'Estimado <b style="text-transform: uppercase;">'.$nombre.'</b> se le hace llegar la respuesta a su solicitud realizada con anterioridad a la <b>Universidad de Guanajuato</b> dando as&iacute; por culminado el proceso, sin m&aacute;s que agregar queda a su disposici&oacute;n el documento con la respuesta
     a su solicitud. <br><br>
     <div style="text-align:center;">
     Atentamente.<br>
                 "LA VERDAD OS HARA LIBRES"<br>
                 DIRECTOR DE LA DIVISI&Oacute;N DE CIENCIAS DE LA VIDA<br>
                 CAMPUS IRAPUATO-SALAMANCA<br>
     
     <b>'.$direc.'</b> </div>
     <br><hr>
     
     ';
    $mail->send();
    echo 1;
} catch (Exception $e) {
    //echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    echo 0;
}
}

