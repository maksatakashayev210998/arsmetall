<?php
$postusername = $_POST['username'];
$postpassword = $_POST['password'];

$password = 'asar_2022';

if($postpassword == $password && $postusername == 'admin'){
    session_start();
    $_SESSION['authed'] = 1;
    
    header('Location: addproducts');
    exit();
}else{
    session_start();
    $_SESSION['error'] = 1;
    header('Location: addproducts');
    exit();
}
?>