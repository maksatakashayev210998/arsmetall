<?php require 'base.php';?>
<?php
$sql = "SELECT * FROM `products` ORDER BY `id` ASC";
$result = $conn->query($sql);
?>
<?php require 'header.php';?>
<div class="block2" id="g2">
    <div class="container">
        <h4 class="blc2txt">Каталог</h4>
        <div class="allprod">
            <?php
            $i = 0;
            while($product = $result->fetch_assoc()){
                $i++;
                if($product['img']) $img = $product['img']; else $img = '/cat/1.jpg';
                if(strlen($product['description']) > 380) $descr = substr( $product['description'], 0, 380).'...'; else $descr = $product['description'];
            ?>
            <a href="/product?id=<?=$product['id']?>" target="_blank">
            <div class="mats" id="mat<?=$i?>">
                <img src="<?=$img?>" alt="" class="imgmat">
                <div class="line"></div>
                <div class="textts">
                    <h4 class="matname"><?=$product['name']?></h4>
                    <h4 class="mattxt"><?=$descr?></h4>
                </div>
            </div> 
            </a>
            <?php
            }
            ?>
            
        </div>
        <div class="clear"></div>
        <!-- <button class="showall" onclick="showall()">Смотреть все предложения</button> -->
    </div>
</div>
<style>
    .block2{
        background: #3916871f;
        min-height: 80%;
        padding: 90px 0px 140px;
    }
    .allprod{
        display: block;
    }
</style>
<?php require 'footer.php';?>
