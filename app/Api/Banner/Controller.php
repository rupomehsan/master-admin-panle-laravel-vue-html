<?php

namespace App\Api\Banner;

use App\Api\Banner\Actions\All;
use App\Api\Banner\Actions\Store;
use App\Api\Banner\Actions\Validation;
use App\Http\Controllers\Controller as ControllersController;

class Controller extends ControllersController
{
    public function index()
    {
        $data = All::exec();
        return $data;
    }

    public function store(Validation $request)
    {
        $data = Store::exec($request);
        return $data;
    }

    public function show($id)
    {
        //function_body
    }

    public function update($id)
    {
        //function_body
    }

    public function destroy($id)
    {
        //function_body
    }
}
