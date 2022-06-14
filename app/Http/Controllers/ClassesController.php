<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class ClassesController extends Controller
{
    //

    public function classes(){

        $windsurf=Event::where('event_type',1)->get();
        $sup=Event::where('event_type',2)->get();
        
        return view('classes',compact('windsurf','sup'));
    }
}
