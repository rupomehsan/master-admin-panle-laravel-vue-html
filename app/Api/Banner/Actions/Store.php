<?php

namespace App\Api\Banner\Actions;

use App\Api\Banner\Actions\Validation;

class Store
{
    static $model = \App\Api\Banner\Model::class;

    public static function exec(Validation $request)
    {
        $data = self::$model::create([
            "title" => "this is title",
            "image" => rand(10000, 9999) . ".jpg"
        ]);
        return $data;
    }
}
