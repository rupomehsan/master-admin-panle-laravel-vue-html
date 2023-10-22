<?php

namespace App\Api\Banner;

use Illuminate\Database\Eloquent\Model as EloquentModel;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Model extends EloquentModel
{
    protected $table = "banners";
    protected $guarded = [];
}
