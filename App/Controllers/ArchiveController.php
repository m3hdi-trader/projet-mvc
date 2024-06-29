<?php

namespace App\Controllers;

class ArchiveController
{
    public function index()
    {
        views('archive.index');
    }

    public function articales()
    {
        views('archive.articales');
    }

    public function products()
    {
        views('archive.products');
    }
}
