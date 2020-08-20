<?php

namespace App\Models;

use Laravel5Helpers\Uuid\UuidModel;

class User extends UuidModel
{
    protected $table = 'users';
}
