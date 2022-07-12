<?php

namespace App\Http\Controllers;
use App\Models\SignUp;
use App\Models\Event;
use App\Models\User;
use Illuminate\Http\Request;

class PeopleController extends Controller
{
    //
    public function index($id){
        $user = SignUp::where('id',$id)->first();
        $header = '編輯報名學員資料';
        $slot='';
        return view('join_list.editpeople',compact('user','header','slot'));
    }

    public function update(Request $request,$id){

        if ($request->class1 == 1) {
            $request->class1 = 1;
        }else{
            $request->class1 = 0;
        }

        if ($request->class2 == 2) {
            $request->class2 = 1;
        }else{
            $request->class2 = 0;
        }

        if ($request->class3 == 3) {
            $request->class3 = 1;
        }else{
            $request->class3 = 0;
        }

        if ($request->class4 == 4) {
            $request->class4 = 1;
        }else{
            $request->class4 = 0;
        }

        if ($request->class1 == 1 and $request->class2 == 1 and $request->class3 == 1){
            $plus_class ='獨木舟,風浪板,SUP救生';
        }elseif($request->class1 == 0 and $request->class2 == 1 and $request->class3 == 1){
            $plus_class ='風浪板,SUP救生';
        }elseif($request->class1 == 0 and $request->class2 == 0 and $request->class3 == 1){
            $plus_class ='SUP救生';
        }elseif($request->class1 == 0 and $request->class2 == 0 and $request->class3 == 0){
            $plus_class ='無';
        }elseif($request->class1 == 1 and $request->class2 == 0 and $request->class3 == 1){
            $plus_class ='獨木舟,SUP救生';
        }elseif($request->class1 == 1 and $request->class2 == 0 and $request->class3 == 0){
            $plus_class ='獨木舟';
        }elseif($request->class1 == 0 and $request->class2 == 1 and $request->class3 == 0){
            $plus_class ='風浪板';
        }elseif($request->class1 == 1 and $request->class2 == 1 and $request->class3 == 0){
            $plus_class ='獨木舟,風浪板';
        }elseif($request->class1 == 1 and $request->class2 == 0 and $request->class3 == 1){
            $plus_class ='獨木舟,SUP救生';
        }

        if ($request->remitstate_type == 1) {
            $remitstate = '未匯款';
        }else{
            $remitstate = '已匯款';
        }

        $plus= 1500 *($request->class1 +$request->class2 +$request->class3);

        $data = SignUp::where('id',$id)->first();

        $event=Event::where('id',$data->event_id)->first();

        $subtotal = $event->price + $plus;

        $user=User::where('email',$request->email)->first();

        $user = SignUp::where('id',$id)->update([
            'name'=> $request->name,
            'id_card' => $request->id,
            'gender' => $request->sex,
            'phone' => $request->phone,
            'email' => $request->email,
            'addr' => $request->address,
            'line_id' => $request->lineId,
            'emer_name' => $request->contact,
            'emer_phone' => $request->contactPhone,
            'plus'=>$plus_class,
            'subtotal'=>$subtotal,
            'user_id'=>$user->id,
            'event_id'=>$event->id,
            'fivenumber'=>$request->fivenumber,
            'remitstate'=>$remitstate,
            'remark'=>$request->remark,
        ]);


        if ($request->hasfile('headshot')){
            $path = FilesController::imgUpload($request->headshot,'headshot');
            HeadShot::create([
                'headshot'=>$path,
                'user_id'=>$DB_id->id,
            ]);
        }

        if ($request->hasfile('idCard1')){
            $idcard1_path = FilesController::imgUpload($request->idCard1,'idcard1');
            Id_Card_Img_front::create([
                'id_card_img_front'=>$idcard1_path,
                'user_id'=>$DB_id->id,
            ]);
        }

        if ($request->hasfile('idCard2')){
            $idcard2_path = FilesController::imgUpload($request->idCard2,'idcard2');
            Id_Card_Img_Reverse::create([
                'id_card_img_reverse'=>$idcard2_path,
                'user_id'=>$DB_id->id,
            ]);
        }

        return redirect('joinlist');
    }
}
