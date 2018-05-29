<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VueTestController extends ApiController
{
    public function add()
    {
//        $su = \request()->toArray();
        $data = $this->model->create(\request()->toArray());
        return $data;
    }

    public function read()
    {
        $data = $this->model->all()->last();
        return $data;
    }


}
