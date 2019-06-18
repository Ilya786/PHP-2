<?php
/** @var \app\model\Review $reviews  */?>
<div>
    <?php foreach ($reviews as $key => $review):?>
        <div class="product-box">
            <h2><?=$review['username']?></h2>
            <p><?=$review['review']?></p>
            <a href="/?c=product&a=card&id=<?=$review['product_id']?>">Перейти к продукту</a>
        </div>
    <?php endforeach?>
</div>

