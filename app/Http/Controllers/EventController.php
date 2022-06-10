<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Event;
use App\Models\New_img;
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
                $path = FilesController::imgUpload($value,'new_img');
                New_img::create([
                    'new_id'=>$data->id,
                    'img_path' => $path,
                ]);
            }
        }

        return redirect('/new');
    }

    public function edit($id){
        $header='活動新增頁';
        $slot='';
        $data = Event::where('id',$id)->first();

        return view('event.edit',compact('data','header','slot'));
    }

    public function update(Request $request,$id){

        $data = Event::find($id);

        if ($request->hasfile('event_img')){
            foreach ($request->event_img as $key => $value) {
                $path = FilesController::imgUpload($value,'new_img');
                New_img::create([
                    'new_id'=>$data->id,
                    'img_path' => $path,
                ]);
            }
        }

        $data=Event::where('id',$id)->update([
            'event_type'=> $request->event_type,
            'anno_type'=> $request->anno_type,
            'event'=>$request->event,
            'event_intr'=>$request->event_intr,
            'event_proc'=>$request->event_proc,
            'event_dire'=>$request->event_dire,
            'event_notice'=>$request->event_notice,
            'name'=>Auth::user()->name,
        ]);

        return redirect('new');
    }

    public function delete_img($img_id){
        $img = New_img::find($img_id);
        FilesController::deleteUpload($img->img_path);
        $new_id = $img->event_id;
        $img->delete();

        return redirect('/new/edit/'.$new_id);

    }

    public function del($id,){
        $event = Event::find($id);
        $img = New_img::where('new_id',$id)->get();
        foreach ($img as $key => $value){
            FilesController::deleteUpload($value->img_path);
            $value->delete();
        }
        $event->delete();
        return redirect('new');
    }

}
