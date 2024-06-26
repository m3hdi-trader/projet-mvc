<?php

function site_url($rote)
{
    return $_ENV['HOST'] . $rote;
}

function assets_url($rote)
{
    return site_url("Assets/" . $rote);
}

function randomElement($arr)
{
    shuffle($arr);
    return array_pop($arr);
}
