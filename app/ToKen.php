<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ToKen extends Model
{
    public $table = "token";
    protected $guarded = ['id'];

    public function test()
    {
        return "token返回";
    }
}
