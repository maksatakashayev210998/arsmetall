<?php
session_start();
require 'base.php';
require 'header.php';
if (empty($_SESSION['token'])) {
    if (function_exists('mcrypt_create_iv')) {
        $_SESSION['token'] = bin2hex(mcrypt_create_iv(32, MCRYPT_DEV_URANDOM));
    } else {
        $_SESSION['token'] = bin2hex(openssl_random_pseudo_bytes(32));
    }
}

$sql = "SELECT * FROM `products` ORDER BY `id` DESC";
$result = $conn->query($sql);
?>
<div class="block2">
    <div class="container">
        <div class="row">
        <?php
        if($_SESSION['authed'] == 1){
        ?>
        <h4 class="blo5tt2">Добавить в каталог</h4>
        <div class="addprod">
            <?php
            if($_SESSION['success'] == 1){
                ?>
            <div class="successblock">
                <h4 class="successtxt">Продукт успешно добавлен</h4>
            </div>
            <?php
                $_SESSION['success'] = 0;
            }
            ?>
            <form action="saveprod.php" method="POST" enctype='multipart/form-data'>
                <input type="hidden" name="csrf" value="<?=$token?>">
                <label for="image">Изображение продукта</label>
                <input type="file" name="userfile" class="addprodinpfile" id="image" required="true">
                <input type="text" name="name" class="addprodinp" placeholder="Название продукта" required="true">
                <input type="text" name="keywords" class="addprodinp" placeholder="Ключевые слова (для СЕО)" required="true">
                <textarea name="description" id="description" rows="10" class="addprodarea" placeholder="Описание" required="true"></textarea>
                <button class="savebtnpro">Сохранить</button>
            </form>
        </div>
        <br>
        <br>
        <br>
        <h4 class="blo5tt2">Каталог</h4>
        <div class="tbtbt">
            <table class="table" style="background: #fff;">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Название</th>
                        <th scope="col">Действие</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $i = 0;
                    while($row = $result->fetch_assoc()){
                        $i++;
                    ?>
                    <tr>
                        <th scope="row"><?=$i?></th>
                        <td><?=$row['name']?></td>
                        <td>
                            <a href="/update?id=<?=$row['id']?>" class="btn btn-primary">Изменить</a>
                            <a href="/delete?id=<?=$row['id']?>" class="btn btn-danger">Удалить</a>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
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
    @media(max-width: 991px){
        .blo5tt2 {
            font-size: 30px;
            margin-bottom: 20px;
        }
    }
    @media(max-width: 767px){
        .block2{
            padding: 20px!important;
        }
    }
</style>
<?php require 'footer.php';?>
       