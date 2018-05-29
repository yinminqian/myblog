<?php

namespace App;

use http\Env\Request;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    public $table = 'users';
    protected $fillable = [
        'name', 'email', 'password', 'phone'
    ];

    protected $hidden = [
        'password',
    ];


    public function signIn()
    {
        $this->name = request('name');
        $this->password = request('password');
        $this->email = request('email');
        if (count($this->attributes) == 4) {
            return $this->save() ? suc() : 0;
        } else {
            return err('缺少字段');
        }
    }

    public function test()
    {
        return 1;
    }
}
