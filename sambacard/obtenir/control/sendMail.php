<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'path/to/PHPMailer/src/Exception.php';
require 'path/to/PHPMailer/src/PHPMailer.php';
require 'path/to/PHPMailer/src/SMTP.php';

$mail = jboumys@gmail.com;
$sujet = "Test mail";
$message = "je fais mon test";
//=====Envoi de l'e-mail.
mail($mail,$sujet,$message);
//==========


