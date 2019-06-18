<?php
require "../engine/Autoload.php";
require "../config/config.php";

use app\model\Products;
use app\engine\Autoload;
use app\model\Users;

spl_autoload_register([new Autoload(), 'loadClass']);

$product = new Products('Яблоко', 'Фрукт','10');
$product->delete();



