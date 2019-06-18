<?php

namespace app\engine;

class Autoload
{
    public function loadClass($className) {
        $path  = ltrim($className, 'app\\');
        $updatePath = str_replace('\\','/',$path);
        $fileName = "../{$updatePath}.php";
        if (file_exists($fileName)) {
            require $fileName;
        }

    }
}