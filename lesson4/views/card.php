<?php
/** @var \app\model\Products $product  */
use app\model\Review;
$product_reviews = Review::getWere('product_id',$product->id);
?>

<h2><?=$product->name?></h2>
<p><?=$product->description?></p>
<?//foreach ($product_reviews as $review)?>
<p><?=$product_reviews?></p>
<p>Стоимость: <?=$product->price?></p>