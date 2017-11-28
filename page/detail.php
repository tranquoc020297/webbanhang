<?php
include('Model/Product.php');
if(isset($_GET['detail']))
    $item = Product::Find($_GET['detail']);
else
    header('location:index.php');
?>
<hr>
<div class="container">
<p>ID: <?= $item->id ?></p>
<p>Tên: <?= $item->name ?></p>
<p>Loại: <?= $item->idType ?></p>
<p>Mô tả: <?= $item->description ?></p>
<p>Giá: <?= $item->price ?></p>
<p>Hình ảnh: <?= $item->image ?></p>
</div>