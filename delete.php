<?php
require 'base.php';
$id = $_GET['id'];

$sql = "SELECT * FROM `products` WHERE `id`=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$img = substr($row['img'], 1, strlen($row['img']));

if(file_exists($img)){
    unlink($img);
}
$sql = "DELETE FROM `products` WHERE `id`=$id";
$result = $conn->query($sql);

header('Location: addproducts');
?>