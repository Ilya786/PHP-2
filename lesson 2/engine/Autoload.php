<?php

//namespace app\engine;

class Autoload
{
    private $path = [
      'model',
      'engine',
        'interfaces'
];

    public function loadClass($className) {

        foreach ($this->path as $path) {
            $temp = explode('\\', $className); //  разделяем строку по символу "\"
            $class = end($temp); // выбираем последний элемент массива
            var_dump($class);
            $fileName = "../{$path}/{$class}.php";
            var_dump($fileName);
            if (file_exists($fileName)) {
                echo 'Подключен ' . $fileName . '<br/>';
                require $fileName;
                break;
            }
        }

    }
}