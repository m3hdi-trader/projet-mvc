<?php

namespace App\Controllers;

use App\Models\Prodouct;

class PostController
{
    public function single()
    {
        global $request;

        $authorId = 7;
        $author = (new Prodouct())->find($authorId);
        var_dump($author);
        $slug = ($request->getRouteParam('slug'));
        echo "slug: $slug <br>";
    }

    public function comment()
    {
        global $request;

        $cid = ($request->getRouteParam('cid'));
        echo " commentId: $cid";
    }
}
