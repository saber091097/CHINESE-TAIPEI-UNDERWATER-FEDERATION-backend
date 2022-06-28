<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WindsurfImg;
use App\Http\Controllers\FilesController;

class IndexImgController extends Controller
{
    //
    public function index(){
        $header='首頁圖片';
        $slot='';
        return view('index_img.index',compact('header','slot'));
    }

    public function windsurfupdate(Request $request){

        WindsurfImg::create([
            'windsurfimg' => $request->indexwindsurf,
        ]);

        return redirect('/indeximg');
    }
}
