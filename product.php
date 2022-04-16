<?php require 'base.php';?>
<?php require 'header.php';?>
<div class="block2" id="g2">
    <div class="container">
        <div class="prodshow">
            <div class="prodlfs">
                <img src="<?=$row['img']?>" alt="" class="prdshimg">
            </div>
            <div class="prodrgs">
                <h4 class="prodnmt"><?=$row['name']?></h4>
                <h4 class="proddesc"><?=$row['description']?></h4>
            </div>
        </div>
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
