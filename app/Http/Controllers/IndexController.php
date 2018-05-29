<?php

namespace App\Http\Controllers;

class IndexController extends ApiController
{

    public function add_index()
    {
        $img = \request('ingdeImg');
        $img = $this->uploadOne($img);
        $data = $this->model->create([
            'ingdeImg' => json_encode($img),
            'title' => \request('title'),
            'subtitle' => \request('subtitle'),
        ]);
        return $data;
    }
    
    public function get_data()
    {
        $su = $this->model->all();
        return $su;
    }

    public function uploadOne($file)
    {
        header('Content-type:text/html;charset=utf-8');
        $base64_image_content = trim($file);

        //正则匹配出图片的格式
        if (preg_match('/^(data:\s*image\/(\w+);base64,)/', $base64_image_content, $result)) {
            $type = $result[2];//图片后缀
            $dateFile = date('Y-m-d', time()) . "/";  //创建目录
//            $su = dirname(__FILE__);
            $su = app_path();
            $new_file = $su . '/' . $dateFile;
            if (!file_exists($new_file)) {
                //检查是否有该文件夹，如果没有就创建，并给予最高权限
                mkdir($new_file, 0700);
            }
            $filename = time() . '_' . uniqid() . ".{$type}"; //文件名
            $new_file = $new_file . $filename;
            //写入操作
            if (file_put_contents($new_file, base64_decode(str_replace($result[1], '', $base64_image_content)))) {
                return $dateFile . $filename;  //返回文件名及路径
            } else {
                return false;
            }
        }
    }
}
