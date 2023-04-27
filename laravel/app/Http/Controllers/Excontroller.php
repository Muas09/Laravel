<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Excontroller extends Controller
{
//    public function hello(){
//         $title =" Đây là tiêu đề";
//         $decripsion =" Đây là trang mô tả";
//         $coppyright =" bản tin thời sự hôm nay";
//         return view('test')->with(['title' =>$title, 'decripsion'=>$decripsion, 'coppyright' =>$coppyright ]);


//    }

public function hello(){
        $name =" Y Múa";
        $class =" PNV24A";
        $age =" 19 tuổi";
        $arr=['name' =>$name, 'class'=>$class, 'age' =>$age ];
        return view('home-page')->with('student', $arr);


   }
   
}
