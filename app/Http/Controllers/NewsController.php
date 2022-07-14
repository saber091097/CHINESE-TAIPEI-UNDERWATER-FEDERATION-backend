<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;


class NewsController extends Controller
{
    //

    public function news(){
        $news = Event::orderby('id','desc')->Paginate(2);
        // dd($news);
        $anno_one = Event::where('anno_type','1')->orderby('id','desc')->get();
        // dd($anno_one);
        $anno_two = Event::where('anno_type','2')->orderby('id','desc')->get();
        // dd($anno_two);
        return view('news',compact('news','anno_one','anno_two'));
    }

    public function news_to_event($id){

        $events = Event::where('id', $id)->get();
        // dd($events);
        return view('event',compact('events'));
    }
}
