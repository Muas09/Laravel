<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tongcontroller extends Controller 
 {
    public function tinhtong(){
        $a = request('a');
        $b = request('b');
        $tong = $a + $b;
        return view('tinhtong', ['tong' => $tong]);
       
    }
 }
