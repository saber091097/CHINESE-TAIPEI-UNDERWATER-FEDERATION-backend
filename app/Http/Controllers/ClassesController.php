<?php

namespace App\Http\Controllers;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Database\Eloquent\Scope;

class ClassesController extends Controller
{
    //

    public function classes(){

        $windsurf=Event::where('event_type',1)->get();
        $sup=Event::where('event_type',2)->get();
        $data=Event::where('event_type',2)->take(1)->get();
        // dd($data);
        return view('classes',compact('windsurf','sup','data'));
    }

    public function changeclass($id){
        $data = Event::where('id',$id)->first();
        return redirect('classes',compact('data'));
    }
}
