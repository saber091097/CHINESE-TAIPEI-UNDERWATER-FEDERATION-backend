<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HtmlController extends Controller
{
    //

    public function Pastpresidents(){
        return view('about_us.Past-presidents');
    }

    public function about(){
        return view('about_us.index');
    }

    public function photo(){
        return view('eventimg.index_front');
    }

    public function organ(){
        return view('about_us.organization');
    }

    public function rescue(){
        return view('about_us.Surf-Rescue');
    }
}
