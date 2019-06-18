<?php
require "../engine/Autoload.php";
require "../config/config.php";

use app\model\Products;
use app\engine\Autoload;


spl_autoload_register([new Autoload(), 'loadClass']);


$controllerName = $_GET['c'] ?: 'product';
$actionName = $_GET['a'];
require "../controllers/ProductController.php";
require "../controllers/ReviewsController.php";

$controllerClass = CONTROLLER_NAMESPACE . ucfirst($controllerName) . "Controller";
if (class_exists($controllerClass)) {
    $controller = new $controllerClass();
    $controller->runAction($actionName);
} else {
    var_dump(class_exists($controllerClass));
    var_dump($controllerClass);
    echo "404 index";
}



/** @var Products $product */
//$product = Products::getOne(1);
//$product->setPrice(255);

//$product->save();



//var_dump(($product));
//$product->price = 12;

//$product->update();

//
//var_dump($product);
//$product->insert();

//$product->delete();




