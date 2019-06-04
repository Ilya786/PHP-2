<?php
require "../engine/Autoload.php";

spl_autoload_register([new Autoload(), 'loadClass']);

$product = new app\model\Products(new app\engine\Db());

echo $product->getTableName();
/*
 * Не работает так как надо. Вообще не понимаю почему. Как работать с пространством имен. Для чего это все вообще нужно?
 * Зачем все так усложняется с интерфейсами и абстрактными класами? Где это все находит применение?
 *
 *
 * */

