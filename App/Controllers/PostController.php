<?php

namespace App\Controllers;

class PostController
{
    public function single()
    {
        global $request;
        $slug = ($request->getRouteParam('slug'));
        $cid = ($request->getRouteParam('cid'));
        echo "slug: $slug <br>";
    }

    public function comment()
    {
        global $request;

        $cid = ($request->getRouteParam('cid'));
        echo " commentId: $cid";
    }
}
