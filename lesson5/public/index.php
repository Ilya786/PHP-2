<?php
require "../engine/Autoload.php";
require "../config/config.php";

use app\model\Products;
use app\engine\Autoload;
use app\engine\TwigRender;

require_once '../vendor/autoload.php';
spl_autoload_register([new Autoload(), 'loadClass']);


$controllerName = $_GET['c'] ?: 'product';
$actionName = $_GET['a'];

$controllerClass = CONTROLLER_NAMESPACE . ucfirst($controllerName) . "Controller";

if (class_exists($controllerClass)) {
    $controller = new $controllerClass(new TwigRender());
    $controller->runAction($actionName);
} else {
    echo "404";
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




