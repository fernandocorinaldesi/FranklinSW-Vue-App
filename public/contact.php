<?php
header("Access-Control-Allow-Origin: *");
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