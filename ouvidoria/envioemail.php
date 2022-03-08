<?php 


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';



define('GUSER', 'email');
define('GPWD', 'senha');              

$arquivo = $_FILES["arquivo"];

$email = new PHPMailer();

$email->IsSMTP();

$email->Charset = 'UTF-8';

$email->SMTPAuth = true;
$email->SMTPSecure = 'tls';
$email->SMTPOptions = array(
        'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);


$email->Host = 'mail.empresa.com.br';

$email->Port = 587;

$email->Username = GUSER;
$email->Password = GPWD;

$email->From = GUSER;

$email->FromName = 'Ouvidoria ';

$email->Subject = 'Formulario de ouvidoria';

$email->Body = 'Segue anexo formulario! <br><br><br><br> N&atilde;o responder este E-mail';

$email->AddAttachment('PDF/document.pdf');

$email->AddAttachment($arquivo['tmp_name'], $arquivo['name']  );

$email->AltBody = 'E-mail em texto';

$email->AddAddress('ouvidoria@empresa.com.br');

if(!$email->Send()) {
                $error = 'Mail error: '.$email->ErrorInfo;
                return false;
        } else {
                $error = 'Mensagem enviada!';
                //unlink(1);
                return true;
        }


?>
