<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\ToKen as Token;

class ToKenController extends Controller
{
    //


    public function __construct()
    {

    }


    static $meta;

    public function cretoken()
    {
//        生成一条token,并且在meta中存值
        $time = date('Y-m-d H:i:s', Time());
        $token = $this->gentoken();
        $data = [
            "token" => $token,
            "past_time" => $time,
        ];
        $ll = ToKen::create($data);
//        在meta中存值
        self::$meta = $ll;
        return $ll;
    }

    public function findToken($data)
    {
//        在数据库中找到第一条token,返回布尔值
        $token = Token::where('token', $data)->first();
        self::$meta = $token;
        return $token ? false : true;
    }


    public function gentoken()
    {
//        生成token
        return md5(time() + rand(1, 9999999));
    }

    public function test()
    {
        return "有token,并且合法";
    }

    public function stoGlo()
    {
        $data = self::$meta;
        $arr = $data->toArray();
        $acah = [
            "meta" => $arr,
            "user" => $data->openid ? User::find($data->openid)->toArray() : null,
//            meta数据中是否有用户id,如果有用户信息储存进去,没有为null,如果有代表已经登录,,没有代表没有登录
            "data" => null
        ];
        $GLOBALS['_BSESSIONS_'] = $acah;
    }
}
