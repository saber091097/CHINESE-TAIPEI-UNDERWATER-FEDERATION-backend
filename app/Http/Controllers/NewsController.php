<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;


class NewsController extends Controller
{
    //

    public function news(){
        $news = Event::orderby('id','desc')->Paginate(10);

        return view('news',compact('news'));
    }

    public function news_to_event($id){
        $events = Event::where('id', $id)->first();

        return view('event',compact('events'));
    }


}
