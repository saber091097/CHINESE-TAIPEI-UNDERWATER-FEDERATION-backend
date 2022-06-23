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

    public function windsurfupdate(){
        if ($request->hasfile('indexwindsurf')) {
            foreach ($request->event_img as $key => $value) {
                $path = FilesController::imgUpload($value, 'indexwindsurf');
                WindsurfImg::create([
                    'windsurfimg' => $path,
                ]);
            }
        }
        return redirect('/indeximg');
    }
}
