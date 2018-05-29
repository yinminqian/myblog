<?php

namespace App\Http\Middleware;

use App\Http\Controllers\ToKenController;
use Closure;


class CheckAge
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $tokenCo = new ToKenController();
        $tokens = 'token';

        $token = $request->get($tokens) ? $request->get($tokens) : $request->header($tokens);

        if (!$token || $tokenCo->findToken($token)) {
//            如果没有token或者token不合法
            $token1 = $tokenCo->cretoken();
//            创建一条储存进数据库
            $test = $token1['token'];
            if ($token1) {
//                返回token
                header("token:$test");
            }
        }


        $tokenCo->stoGlo();
//        存全局变量


//        return $request->header('Server');
        return $next($request);
    }
}
