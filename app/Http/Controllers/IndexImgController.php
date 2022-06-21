<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexImgController extends Controller
{
    //
    public function index(){
        $header='首頁圖片';
        $slot='';
        return view('index_img.index',compact('header','slot'));
    }
}
