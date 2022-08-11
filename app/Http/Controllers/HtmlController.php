<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewLeader;

class HtmlController extends Controller
{
    //

    public function Pastpresidents(){
        $data= NewLeader::orderBy('year','asc')->get();
        return view('about_us.Past-presidents',compact('data'));
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
