<?php

namespace App\Http\Controllers;
use App\Http\Controllers\FilesController;
use Illuminate\Http\Request;
use App\Models\EventImg_List;
use App\Models\EventImg;


class EventimgController extends Controller
{
    //
    public function index(){
        $header='活動照片管理頁';
        $slot='';
        return view('eventimg.index',compact('header','slot'));
    }

    public function create(){
        $header='活動照片新增頁';
        $slot='';
        return view('eventimg.create',compact('header','slot'));
    }

    public function store(Request $request){

        $data=EventImg_List::create([
            'eventimg_type'=> $request->event_type,
            'eventimg_name'=> $request->event,
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
        return redirect('/eventimg');
    }

    public function windsurf(){
        $data = EventImg_List::where('eventimg_type',1)->latest()->get();
        $header = '風浪板活動照片';
        $slot='';
        return view('eventimg.windsurf',compact('data','header','slot'));
    }

    public function windsurfevent($id){
        $header = '風浪板活動照片';
        $slot='';
        $data = EventImg_List::where('id',$id)->first();
        return view('eventimg.windsurfimg',compact('data','header','slot'));
    }

    public function windsurfedit($id){
        $header = '風浪板活動照片編輯';
        $slot='';
        $data = EventImg_List::where('id',$id)->first();
        return view('eventimg.windsurfedit',compact('data','header','slot'));
    }

    public function windsurfupdate($id,Request $request){
        $data= EventImg_List::find($id);

        if ($request->hasfile('event_img')){
            foreach ($request->event_img as $key => $value) {
                $path = FilesController::imgUpload($value,'event_img');
                EventImg::create([
                    'event_id'=>$data->id,
                    'img_path' => $path,
                ]);
            }
        }

        $data = EventImg_List::where('id',$id)->update([
            'eventimg_name' => $request->event,
        ]);

        return redirect('eventimg/windsurf');
    }

    public function windsurfdel($id){

        $event_img = EventImg_List::find($id);
        $img = EventImg::where('event_id',$id)->get();
        foreach ($img as $key => $value){
            FilesController::deleteUpload($value->img_path);
            $value->delete();
        }
        $event_img->delete();
        return redirect('eventimg/windsurf');
    }

    public function diving(){
        $data = EventImg_List::where('eventimg_type',3)->latest()->get();
        $header = '潛水活動照片';
        $slot='';
        return view('eventimg.diving',compact('data','header','slot'));
    }

    public function divingevent($id){
        $header = '潛水活動照片';
        $slot='';
        $data = EventImg_List::where('id',$id)->first();
        return view('eventimg.divingimg',compact('data','header','slot'));
    }

    public function divingedit($id){
        $header = '潛水活動照片編輯';
        $slot='';
        $data = EventImg_List::where('id',$id)->first();
        return view('eventimg.divingedit',compact('data','header','slot'));
    }

    public function divingupdate($id,Request $request){
        $data= EventImg_List::find($id);

        if ($request->hasfile('event_img')){
            foreach ($request->event_img as $key => $value) {
                $path = FilesController::imgUpload($value,'event_img');
                EventImg::create([
                    'event_id'=>$data->id,
                    'img_path' => $path,
                ]);
            }
        }

        $data = EventImg_List::where('id',$id)->update([
            'eventimg_name' => $request->event,
        ]);

        return redirect('eventimg/diving');
    }

    public function sup(){
        $data = EventImg_List::where('eventimg_type',2)->latest()->get();
        $header = 'SUP活動照片';
        $slot='';
        return view('eventimg.sup',compact('data','header','slot'));
    }

    public function supevent($id){
        $header = 'SUP活動照片';
        $slot='';
        $data = EventImg_List::where('id',$id)->first();
        return view('eventimg.supimg',compact('data','header','slot'));
    }

    public function supedit($id){
        $header = 'SUP活動照片編輯';
        $slot='';
        $data = EventImg_List::where('id',$id)->first();
        return view('eventimg.supedit',compact('data','header','slot'));
    }

    public function supupdate($id,Request $request){
        $data= EventImg_List::find($id);

        if ($request->hasfile('event_img')){
            foreach ($request->event_img as $key => $value) {
                $path = FilesController::imgUpload($value,'event_img');
                EventImg::create([
                    'event_id'=>$data->id,
                    'img_path' => $path,
                ]);
            }
        }

        $data = EventImg_List::where('id',$id)->update([
            'eventimg_name' => $request->event,
        ]);

        return redirect('eventimg/sup');
    }

    public function supdel($id){

        $event_img = EventImg_List::find($id);
        $img = EventImg::where('event_id',$id)->get();
        foreach ($img as $key => $value){
            FilesController::deleteUpload($value->img_path);
            $value->delete();
        }
        $event_img->delete();
        return redirect('eventimg/sup');
    }

    public function swimming(){
        $data = EventImg_List::where('eventimg_type',4)->latest()->get();
        $header = '游泳活動照片';
        $slot='';
        return view('eventimg.swimming',compact('data','header','slot'));
    }

    public function swimmingevent($id){
        $header = '游泳活動照片';
        $slot='';
        $data = EventImg_List::where('id',$id)->first();
        return view('eventimg.swimmingimg',compact('data','header','slot'));
    }

    public function swimmingedit($id){
        $header = '游泳活動照片編輯';
        $slot='';
        $data = EventImg_List::where('id',$id)->first();
        return view('eventimg.swimmingedit',compact('data','header','slot'));
    }

    public function swimmingupdate($id,Request $request){
        $data= EventImg_List::find($id);

        if ($request->hasfile('event_img')){
            foreach ($request->event_img as $key => $value) {
                $path = FilesController::imgUpload($value,'event_img');
                EventImg::create([
                    'event_id'=>$data->id,
                    'img_path' => $path,
                ]);
            }
        }

        $data = EventImg_List::where('id',$id)->update([
            'eventimg_name' => $request->event,
        ]);

        return redirect('eventimg/swimming');
    }

    public function swimmingdel($id){

        $event_img = EventImg_List::find($id);
        $img = EventImg::where('event_id',$id)->get();
        foreach ($img as $key => $value){
            FilesController::deleteUpload($value->img_path);
            $value->delete();
        }
        $event_img->delete();
        return redirect('eventimg/swimming');
    }

    public function lifesaving(){
        $data = EventImg_List::where('eventimg_type',5)->latest()->get();
        $header = '救生活動照片';
        $slot='';
        return view('eventimg.lifesaving',compact('data','header','slot'));
    }

    public function lifesavingevent($id){
        $header = '救生活動照片';
        $slot='';
        $data = EventImg_List::where('id',$id)->first();
        return view('eventimg.lifesavingimg',compact('data','header','slot'));
    }

    public function lifesavingedit($id){
        $header = '救生活動照片編輯';
        $slot='';
        $data = EventImg_List::where('id',$id)->first();
        return view('eventimg.lifesavingedit',compact('data','header','slot'));
    }

    public function lifesavingupdate($id,Request $request){
        $data= EventImg_List::find($id);

        if ($request->hasfile('event_img')){
            foreach ($request->event_img as $key => $value) {
                $path = FilesController::imgUpload($value,'event_img');
                EventImg::create([
                    'event_id'=>$data->id,
                    'img_path' => $path,
                ]);
            }
        }

        $data = EventImg_List::where('id',$id)->update([
            'eventimg_name' => $request->event,
        ]);

        return redirect('eventimg/lifesaving');
    }

    public function lifesavingdel($id){

        $event_img = EventImg_List::find($id);
        $img = EventImg::where('event_id',$id)->get();
        foreach ($img as $key => $value){
            FilesController::deleteUpload($value->img_path);
            $value->delete();
        }
        $event_img->delete();
        return redirect('eventimg/lifesaving');
    }

    public function other(){
        $data = EventImg_List::where('eventimg_type',6)->latest()->get();
        $header = '其他活動照片';
        $slot='';
        return view('eventimg.other',compact('data','header','slot'));
    }

    public function otherevent($id){
        $header = '其他活動照片';
        $slot='';
        $data = EventImg_List::where('id',$id)->first();
        return view('eventimg.otherimg',compact('data','header','slot'));
    }

    public function otheredit($id){
        $header = '其他活動照片編輯';
        $slot='';
        $data = EventImg_List::where('id',$id)->first();
        return view('eventimg.otheredit',compact('data','header','slot'));
    }

    public function otherupdate($id,Request $request){
        $data= EventImg_List::find($id);

        if ($request->hasfile('event_img')){
            foreach ($request->event_img as $key => $value) {
                $path = FilesController::imgUpload($value,'event_img');
                EventImg::create([
                    'event_id'=>$data->id,
                    'img_path' => $path,
                ]);
            }
        }

        $data = EventImg_List::where('id',$id)->update([
            'eventimg_name' => $request->event,
        ]);

        return redirect('eventimg/other');
    }

    public function otherdel($id){

        $event_img = EventImg_List::find($id);
        $img = EventImg::where('event_id',$id)->get();
        foreach ($img as $key => $value){
            FilesController::deleteUpload($value->img_path);
            $value->delete();
        }
        $event_img->delete();
        return redirect('eventimg/other');
    }

    public function delete_img($img_id){
        $img =EventImg::find($img_id);
        FilesController::deleteUpload($img->img_path);
        $event_id = $img->event_id;
        $img->delete();

        return redirect('eventimg'.$event_id);
    }
}
