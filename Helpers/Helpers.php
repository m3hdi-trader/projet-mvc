<?php

function site_url($rote)
{
    return $_ENV['HOST'] . $rote;
}

function assets_url($rote)
{
    return site_url("Assets/" . $rote);
}

function views($path)
{
    $path = str_replace('.', '/', $path);
    $viewFullPath = BASEPATH . "Views/$path.php";
    include_once $viewFullPath;
}
