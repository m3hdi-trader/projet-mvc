<?php

namespace App\Models;

use App\Models\Contracts\JsonBaseModel;
use App\Models\Contracts\MySqlBaseModel;

class Comment extends MySqlBaseModel
{
    protected $table = 'comments';
}
