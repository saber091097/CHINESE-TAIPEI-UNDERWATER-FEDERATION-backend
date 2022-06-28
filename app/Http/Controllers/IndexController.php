<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;


class IndexController extends Controller
{
    public function index(){

        $news = Event::take(4)->orderby('id','desc')->get();

        return view('index',compact('news'));
    }


}
