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
        $windsurf_rwd=Event::where('event_type',1)->get();

        $sup=Event::where('event_type',2)->get();
        $sup_rwd=Event::where('event_type',2)->get();

        $swim=Event::where('event_type',3)->get();
        $swim_rwd=Event::where('event_type',3)->get();

        $saving=Event::where('event_type',4)->get();
        $saving_rwd=Event::where('event_type',4)->get();

        $diving=Event::where('event_type',5)->get();
        $diving_rwd=Event::where('event_type',5)->get();

        $data=Event::where('event_type',2)->take(1)->get();
        $windsurf_data=Event::where('event_type',1)->take(1)->get();
        // dd($sup_data->all());
        return view('classes-1',compact('windsurf','windsurf_rwd','sup','sup_rwd','data','windsurf_data'));
    }

    public function changeclass($id){
        $data = Event::where('id',$id)->first();

        return $data;
    }
}
