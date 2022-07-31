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

        $diving=Event::where('event_type',3)->get();

        $swimming=Event::where('event_type',4)->get();

        $saving=Event::where('event_type',5)->get();

        // dd($sup_data->all());
        return view('classes-1',compact('windsurf','sup','swimming','saving','diving'));
    }

    public function changeclass($id){
        $data = Event::where('id',$id)->first();

        return $data;
    }
}
