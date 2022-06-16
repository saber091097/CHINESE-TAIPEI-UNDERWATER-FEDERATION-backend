<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\SignUp;
class JoinController extends Controller
{
    //
    public function index(){
        $header='活動頁';
        $slot='';
        $data = Event::get();
        return view('join_list.index',compact('data','header','slot'));
    }

    public function joinlist($id){
        $header='參加活動頁';
        $slot='';
        $data = SignUp::where('event_id',$id)->get();
        return view('join_list.joinlist',compact('data','header','slot'));
    }
}
