<?php
include('Model/Product.php');
?>
<div class="marquee" style="text-align:center">
<p style="font-size:20pt">Sản Phẩm Nổi Bật</p>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-3">
        <a href=""><img src="source/images/lamborghini/6.jpg" width="200px"height="140px" >Lamborghini AVENTADOR S 2017</a>
        </div>
        <div class="col-sm-3">
            <a href=""><img src="source/images/lexus/3.jpg"width="200px" height="140px">lexus ES350</a>
        </div>
        <div class="col-sm-3">
        <a href=""><img src="source/images/ferrari/1.jpg"width="200px"height="140px" >Ferrari LAFERRARI</a>
        </div>
        <div class="col-sm-3">
        <a href=""><img src="source/images/audi/10.jpg" width="200px"height="140px">Audi A8</a>
        </div>
    </div>
    
    <div class="news" style="text-align:center">
    <h3>Tin Tức Sản Phẩm</h3>
    </div>
    <div style="height:10%">&nbsp;</div>
    
    <?php 
        $products = Product::new();
        $mangsp = array_chunk($products,2);
        foreach($mangsp as $sp){
    ?>
            <div class="row">
        <?php
            foreach($sp as $item){
        ?>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-6">
                    <a href=""><img src="source/images/lamborghini/1.jpg" width="200px" height="150" alt=""></a>
                </div>
                <div class="col-md-6">
                <a href="index.php?detail=<?= $item->id ?>"><?= $item->name ?></a>
                <?= substr($item->description,0,120). '...' ?>
                <a href="index.php?detail=<?= $item->id ?>">xem thêm</a> 
                </div>
            </div>
        </div>
            <?php } ?>  
        </div>
        <div style="height:10%">&nbsp;</div>
    <?php } ?>
</div>