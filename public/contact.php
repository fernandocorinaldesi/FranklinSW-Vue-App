<?php
header('Access-Control-Allow-Origin: your origin');
header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Credentials: true');
header('Access-Control-Max-Age:86400');
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token,  Accept, Authorization, X-Requested-With');
$post = file_get_contents('php://input') ?? $_POST;

// decode the JSON data
$post = json_decode($post, true);

$sendTo = "ferchucorinaldesi@gmail.com";//don't forget to change it

    $name = $post['name'];
    $email = $post['email'];
    $subject = 'Consulta FranklinSW desde formulario web';
    $message = $post['mensaje'];

  
    $header = 'From: ' . $name . '<' . $email . ">\r\n" .
    'Reply-To: ' . $email . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
    mail($sendTo, $subject, $message, $header);
    $sent = mail($sendTo, $subject, $message, $header);
?>