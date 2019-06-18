<?php

namespace app\engine;


use app\interfaces\IRenderer;

class TwigRender implements IRenderer
{
    public function renderTemplate($template, $params = []) {
        require_once '../vendor/autoload.php';

        $loader = new \Twig\Loader\FilesystemLoader('../twigtemplates');
        $twig = new \Twig\Environment($loader);
        return $twig->render($template . '.twig', $params);
    }
}