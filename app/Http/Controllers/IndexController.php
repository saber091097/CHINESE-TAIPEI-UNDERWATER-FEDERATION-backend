<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\WindsurfImg;
use App\Models\SupImg;
use App\Models\DivingImg;

class IndexController extends Controller
{
    public function index(){

        $news = Event::take(4)->orderby('id','desc')->get();
        $index_sup_img = SupImg::orderby('id','desc')->get();
        $index_diving_img = DivingImg::orderby('id','desc')->get();
        $index_windsurf_img = WindsurfImg::orderby('id','desc')->get();
        return view('index',compact('index_windsurf_img', 'index_diving_img', 'index_sup_img','news'));
    }


}
