<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsersDataBase extends Model
{
    protected $casts = [
        'shifts' => 'array'
    ];
}
