<?php

namespace App\Controllers;

use App\Models\Prodouct;
use App\Models\User;

class PostController
{
    public function single()
    {
        global $request;


        $user = new User(1);
        var_dump($user->email);


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
