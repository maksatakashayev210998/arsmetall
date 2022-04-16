<?php
$text = 'Есімім%20'.$_POST['username'].'!%20';
$message = $_POST['message'];
$message = str_replace(" ", "%20", $message);
$message = str_replace(PHP_EOL, '%20', $message);

$url = 'https://wa.me/77471517106?text='.$text.$message;

header('Location: '.$url);
?>