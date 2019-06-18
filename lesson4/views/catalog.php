<?php
/** @var \app\model\Products $products  */?>
<div>
    <?php foreach ($products as $key => $product):?>
    <div class="product-box">
        <h2><?=$product['name']?></h2>
        <h2><?=$product['price']?></h2>
        <h2><?=$product['description']?></h2>
        <a href="/?c=product&a=card&id=<?=$product['id']?>">Подробнее....</a>
    </div>
    <?php endforeach?>
</div>
