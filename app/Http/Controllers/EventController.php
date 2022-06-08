<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Event;
use App\Models\EventImg;
use App\Http\Controllers\FilesController;

class EventController extends Controller
{
    //

    public function index(){
        $header='活動管理頁';
        $slot='';
        $data= Event::get();
        return view('event.index',compact('data','header','slot'));
    }

    public function create(){
        $header='活動新增頁';
        $slot='';

        return view('event.create',compact('header','slot'));
    }

    public function store(Request $request){

        $data=Event::create([
            'event_type'=> $request->event_type,
            'anno_type'=> $request->anno_type,
            'event'=>$request->event,
            'event_intr'=>$request->event_intr,
            'event_proc'=>$request->event_proc,
            'event_dire'=>$request->event_dire,
            'event_notice'=>$request->event_notice,
            'name'=>Auth::user()->name,
        ]);

        if ($request->hasfile('event_img')){
            foreach ($request->event_img as $key => $value) {
                $path = FilesController::imgUpload($value,'event_img');
                EventImg::create([
                    'event_id'=>$data->id,
                    'img_path' => $path,
                ]);
            }
        }

        return redirect('/event');
    }

    public function edit($id){
        $header='活動新增頁';
        $slot='';
        $data = Event::where('id',$id)->first();

        return view('event.edit',compact('data','header','slot'));
    }

    public function update(Request $request,$id){
        $date = Event::where('id',$id)->first();

        return redirect('event');
    }

    public function delete_img($img_id){
        $img = EventImg::find($img_id);
        FilesController::deleteUpload($img->img_path);
        $event_id = $img->event_id;
        $img->delete();

        return redirect('/event/edit/'.$event_id);

    }
}
