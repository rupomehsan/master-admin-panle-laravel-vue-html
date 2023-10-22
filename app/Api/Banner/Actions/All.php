<?php

namespace App\Api\Banner\Actions;


class All
{
    static $model = \App\Api\Banner\Model::class;

    public static function exec()
    {
        $data = self::$model::get();
        return $data;
    }
}
