<?php
require "../engine/Autoload.php";

spl_autoload_register([new Autoload(), 'loadClass']);

$product = new app\model\Products(new app\engine\Db());

echo $product->getTableName();

