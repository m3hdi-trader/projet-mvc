<?php

namespace App\Models;

use App\Models\Contracts\JsonBaseModel;
use App\Models\Contracts\MySqlBaseModel;

class User extends MySqlBaseModel
{
    protected $table = 'users';
}
