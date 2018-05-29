<?php

use Illuminate\Http\Request;
use App\User;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::any('/test', function (Request $request) {
    return ['success' => true, 'data' =>
    [
        ['id'=>1,'date'=>time(),'title'=>'王者荣耀新英雄','sm_img'=>'http://game.gtimg.cn/images/yxzj/img201606/heroimg/199/199-smallskin-1.jpg','image'=>'http://shp.qpic.cn/ishow/2735012617/1516959940_84828260_28051_sProdImgNo_2.jpg/0','content'=>'杨玉环，号太真，被誉为中国古代四大美女之一。《旧唐书·杨贵妃传》中记载她生于宦门世家，先为寿王李瑁王妃，受令出家后，被唐玄宗册封为贵妃，受到百般宠爱。安史之乱中，随唐玄宗李隆基流亡，在马嵬坡唐玄宗为解除禁军哗变将她赐死。历史上的杨玉环天生丽质，体态丰腴，能歌善舞，精通音律，擅弹琵琶，音乐才华造诣颇高。'],
        ['id'=>2,'date'=>time(),'title'=>'王者荣耀新英雄','sm_img'=>'http://game.gtimg.cn/images/yxzj/img201606/heroimg/199/199-smallskin-1.jpg','image'=>'http://shp.qpic.cn/ishow/2735102314/1508740289_1644740874_28533_sProdImgNo_2.jpg/0','content'=>'杨玉环，号太真，被誉为中国古代四大美女之一。《旧唐书·杨贵妃传》中记载她生于宦门世家，先为寿王李瑁王妃，受令出家后，被唐玄宗册封为贵妃，受到百般宠爱。安史之乱中，随唐玄宗李隆基流亡，在马嵬坡唐玄宗为解除禁军哗变将她赐死。历史上的杨玉环天生丽质，体态丰腴，能歌善舞，精通音律，擅弹琵琶，音乐才华造诣颇高。'],
        ['id'=>3,'date'=>time(),'title'=>'王者荣耀新英雄','sm_img'=>'http://game.gtimg.cn/images/yxzj/img201606/heroimg/199/199-smallskin-1.jpg','image'=>'http://shp.qpic.cn/ishow/2735012617/1516959940_84828260_28051_sProdImgNo_2.jpg/0','content'=>'杨玉环，号太真，被誉为中国古代四大美女之一。《旧唐书·杨贵妃传》中记载她生于宦门世家，先为寿王李瑁王妃，受令出家后，被唐玄宗册封为贵妃，受到百般宠爱。安史之乱中，随唐玄宗李隆基流亡，在马嵬坡唐玄宗为解除禁军哗变将她赐死。历史上的杨玉环天生丽质，体态丰腴，能歌善舞，精通音律，擅弹琵琶，音乐才华造诣颇高。'],
        ['id'=>4,'date'=>time(),'title'=>'王者荣耀新英雄','sm_img'=>'http://game.gtimg.cn/images/yxzj/img201606/heroimg/199/199-smallskin-1.jpg','image'=>'http://shp.qpic.cn/ishow/2735102314/1508740289_1644740874_28533_sProdImgNo_2.jpg/0','content'=>'杨玉环，号太真，被誉为中国古代四大美女之一。《旧唐书·杨贵妃传》中记载她生于宦门世家，先为寿王李瑁王妃，受令出家后，被唐玄宗册封为贵妃，受到百般宠爱。安史之乱中，随唐玄宗李隆基流亡，在马嵬坡唐玄宗为解除禁军哗变将她赐死。历史上的杨玉环天生丽质，体态丰腴，能歌善舞，精通音律，擅弹琵琶，音乐才华造诣颇高。'],
        ['id'=>5,'date'=>time(),'title'=>'王者荣耀新英雄','sm_img'=>'http://game.gtimg.cn/images/yxzj/img201606/heroimg/199/199-smallskin-1.jpg','image'=>'http://shp.qpic.cn/ishow/2735021116/1518338712_84828260_12324_sProdImgNo_2.jpg/0','content'=>'杨玉环，号太真，被誉为中国古代四大美女之一。《旧唐书·杨贵妃传》中记载她生于宦门世家，先为寿王李瑁王妃，受令出家后，被唐玄宗册封为贵妃，受到百般宠爱。安史之乱中，随唐玄宗李隆基流亡，在马嵬坡唐玄宗为解除禁军哗变将她赐死。历史上的杨玉环天生丽质，体态丰腴，能歌善舞，精通音律，擅弹琵琶，音乐才华造诣颇高。'],
        ['id'=>6,'date'=>time(),'title'=>'王者荣耀新英雄','sm_img'=>'http://game.gtimg.cn/images/yxzj/img201606/heroimg/199/199-smallskin-1.jpg','image'=>'http://shp.qpic.cn/ishow/2735031311/1489375280_1644740874_20669_sProdImgNo_2.jpg/0','content'=>'杨玉环，号太真，被誉为中国古代四大美女之一。《旧唐书·杨贵妃传》中记载她生于宦门世家，先为寿王李瑁王妃，受令出家后，被唐玄宗册封为贵妃，受到百般宠爱。安史之乱中，随唐玄宗李隆基流亡，在马嵬坡唐玄宗为解除禁军哗变将她赐死。历史上的杨玉环天生丽质，体态丰腴，能歌善舞，精通音律，擅弹琵琶，音乐才华造诣颇高。'],
        ['id'=>7,'date'=>time(),'title'=>'王者荣耀新英雄','sm_img'=>'http://game.gtimg.cn/images/yxzj/img201606/heroimg/199/199-smallskin-1.jpg','image'=>'http://shp.qpic.cn/ishow/2735020922/1518184952_84828260_2531_sProdImgNo_2.jpg/0','content'=>'杨玉环，号太真，被誉为中国古代四大美女之一。《旧唐书·杨贵妃传》中记载她生于宦门世家，先为寿王李瑁王妃，受令出家后，被唐玄宗册封为贵妃，受到百般宠爱。安史之乱中，随唐玄宗李隆基流亡，在马嵬坡唐玄宗为解除禁军哗变将她赐死。历史上的杨玉环天生丽质，体态丰腴，能歌善舞，精通音律，擅弹琵琶，音乐才华造诣颇高。'],
    ]


    ];
});

Route::any('/signin', function () {
    $user = new User;
    return $user->signIn();
});


Route::any('/wx', 'WxxcxController@getWxUserInfo');

Route::any('/{model}/{action}', function ($model, $action) {
    $conterller = '\App\Http\Controllers\\' . ucfirst($model) . 'Controller';
    //找到这个类的文件
    return (new $conterller($model))->$action();
//    运行这个类下面的方法
});



