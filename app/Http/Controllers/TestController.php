<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test()
    {
        return 1;
    }

    public function goods()
    {


        $data =
            [
                ['id' =>1, 'title' => '进口火龙果', 'price' => '20', 'unit' => '斤', 'monsy' => '元', 'img' => 'https://dummyimage.com/600x400/84D5F8/00bfff.png'],
        ['id' => 2, 'title' => '进口火龙果', 'price' => '20', 'unit' => '斤', 'monsy' => '元', 'img' => 'https://dummyimage.com/600x400/84D5F8/00bfff.png'],
        ['id' => 3, 'title' => '进口火龙果', 'price' => '20', 'unit' => '斤', 'monsy' => '元', 'img' => 'https://dummyimage.com/600x400/84D5F8/00bfff.png'],
        ['id' => 4, 'title' => '进口火龙果', 'price' => '20', 'unit' => '斤', 'monsy' => '元', 'img' => 'https://dummyimage.com/600x400/84D5F8/00bfff.png'],
        ['id' => 5, 'title' => '进口火龙果', 'price' => '20', 'unit' => '斤', 'monsy' => '元', 'img' => 'https://dummyimage.com/600x400/84D5F8/00bfff.png'],
        ['id' =>6, 'title' => '进口火龙果', 'price' => '20', 'unit' => '斤', 'monsy' => '元', 'img' => 'https://dummyimage.com/600x400/84D5F8/00bfff.png'],

    ];
        return ['succsee' => true, 'data' => $data];
    }


}
