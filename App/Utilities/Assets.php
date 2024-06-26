<?php

namespace App\Utilities;

class Assets
{
    static public function get(string $rote)
    {
        return $_ENV['HOST'] . "Assets/" . $rote . PHP_EOL;
    }

    static public function css(string $rote)
    {
        return $_ENV['HOST'] . "Assets/Css/" . $rote . PHP_EOL;
    }

    static public function js(string $rote)
    {
        return $_ENV['HOST'] . "Assets/Js/" . $rote . PHP_EOL;
    }

    static public function image(string $rote)
    {
        return $_ENV['HOST'] . "Assets/Img/" . $rote . PHP_EOL;
    }

    static public function fonts(string $rote)
    {
        return $_ENV['HOST'] . "Assets/Fonts/" . $rote . PHP_EOL;
    }
}
