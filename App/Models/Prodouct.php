<?php

namespace App\Models;

use App\Models\Contracts\JsonBaseModel;
use App\Models\Contracts\MySqlBaseModel;

class Prodouct extends MySqlBaseModel
{
    protected $table = 'products';
}
