<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WindsurfImg;
use App\Models\SupImg;
use App\Models\DivingImg;
use App\Http\Controllers\FilesController;
use Illuminate\Support\Facades\Storage;


class IndexImgController extends Controller
{
    //
    public function index(){
        $header='首頁圖片';
        $slot='';
        // $index_sup_img = SupImg::orderby('id','desc')->get();
        // $index_sup_img = DivingImg::orderby('id','desc')->get();
        // dd($index_sup_img);
        $index_sup_img = SupImg::orderby('id','desc')->get();
        $index_diving_img = DivingImg::orderby('id','desc')->get();
        $index_windsurf_img = WindsurfImg::orderby('id','desc')->get();



        return view('index_img.index',compact('index_windsurf_img', 'index_diving_img', 'index_sup_img', 'header','slot'));
    }

    public function sup_update(Request $request){


        // Storage::disk('local')->put('index_popular3_img', $request->indexsup);
        $path = FilesController::imgUpload($request->indexsup, 'IndexPopular3Img');
        // dd($path);
        SupImg::create([
            'supimg' => $path,
        ]);

        return redirect('/indeximg');
    }
    public function diving_update(Request $request){

        $path = FilesController::imgUpload($request->indexdiving, 'IndexPopular3Img');

        DivingImg::create([
            'divingimg' => $path,
        ]);

        return redirect('/indeximg');
    }
    public function windsurf_update(Request $request){

        $path = FilesController::imgUpload($request->indexwindsurf, 'IndexPopular3Img');

        WindsurfImg::create([
            'windsurfimg' => $path,
        ]);

        return redirect('/indeximg');
    }
}
