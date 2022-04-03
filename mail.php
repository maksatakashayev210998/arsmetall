<?php
$to      = 'maksatakashayev@gmail.com';
$subject = 'the subject';
$message = 'hello';
$headers = array(
    'From' => 'asarstroykz@mail.com',
    'Reply-To' => 'maksatakashayev@gmail.com',
    'X-Mailer' => 'PHP/' . phpversion()
);

mail($to, $subject, $message, $headers);
?>