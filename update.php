<?php
require 'base.php';
session_start();
if (empty($_SESSION['token'])) {
    if (function_exists('mcrypt_create_iv')) {
        $_SESSION['token'] = bin2hex(mcrypt_create_iv(32, MCRYPT_DEV_URANDOM));
    } else {
        $_SESSION['token'] = bin2hex(openssl_random_pseudo_bytes(32));
    }
}
$token = $_SESSION['token'];

if($_SESSION['authed'] == 1){
    $id = $_GET['id'];

    $sql = "SELECT * FROM `products` WHERE `id`=$id";
    $result = $conn->query($sql);
    $model = $result->fetch_assoc();
?>
<?php require 'header.php';?>
<div class="block2">
    <div class="container">
        <div class="row">
        <?php
        if($_SESSION['authed'] == 1){
        ?>
        <a href="addproducts" class="btn btn-success">Назад</a>
        <br>
        <br>
        <h4 class="blo5tt2">Изменить: <?=$model['name']?></h4>
        <div class="addprod">
            <?php
            if($_SESSION['success'] == 1){
                ?>
            <div class="successblock">
                <h4 class="successtxt">Продукт успешно изменен!</h4>
            </div>
            <?php
                $_SESSION['success'] = 0;
            }
            ?>
            <form action="updatesave.php" method="POST" enctype='multipart/form-data'>
                <input type="hidden" name="csrf" value="<?=$token?>">
                <label for="image">Изображение продукта</label>
                <img src="<?=$model['img']?>" alt="" height="250" style="display:block; margin:0px 0px 20px;">
                <input type="file" name="userfile" class="addprodinpfile" id="image">
                <input type="text" name="name" class="addprodinp" placeholder="Название продукта" value="<?=$model['name']?>">
                <input type="hidden" name="id" value="<?=$id?>">
                <input type="text" name="keywords" class="addprodinp" placeholder="Ключевые слова (для СЕО)"  value="<?=$model['keywords']?>">
                <textarea name="description" id="description" rows="10" class="addprodarea" placeholder="Описание"><?=$model['description']?></textarea>
                <button class="savebtnpro">Изменить</button>
            </form>
        </div>
        <?php
        }else{
        ?>

            <div class="authblock">
                <h4 class="authtt">Войти в админ. панель</h4>
                <form action="login.php" method="POST">
                    <input type="hidden" name="csrf" value="<?=$token?>">
                    <input type="text" class="authinput" placeholder="Логин" name="username" oninput="$('.error').slideUp(300)" required="true">
                    <input type="password" class="authinput" placeholder="Пароль" name="password" oninput="$('.error').slideUp(300)" required="true">
                    <?php
                    if($_SESSION['error'] == 1){
                    ?>
                    <h4 class="error">Неправильный логин или пароль</h4>
                    <?php
                        $_SESSION['error'] = 0;
                    }
                    ?>
                    <button class="authbtn">Войти</button>
                </form>
            </div>
        
        <?php
        }
        ?>
        </div>
    </div>
</div>
<style>
    .block2{
        min-height: 80%;
        padding: 90px 0px 140px;
    }
</style>
<?php require 'footer.php';?>
<?php
}else{
    header('Location: addproducts');
}
?>