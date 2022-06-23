<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;
use App\Http\Controllers\FilesController;
use App\Models\SignUp;
use App\Models\User;
use App\Models\Event;
use App\Models\HeadShot;
use App\Models\Id_Card_Img_front;
use App\Models\Id_Card_Img_Reverse;
use Illuminate\Support\Facades\Hash;

class SignupController extends Controller
{
    //

    public function signup1($id){
        $event = Event::where('id',$id)->first();
        // dd($event->all());
        session([
            'event_id'=>$event->id,
        ]);
        return view('signup.signUpStep1',compact('event'));
    }

    public function signup2($id,Request $request){
        $event= Event::where('id',$id)->first();
        session([
            'event'=>$event->event,
            'name'=>$request->name,
            'id_card'=>$request->id,
            'gender'=>$request->sex,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'addr'=>$request->county.$request->district.$request->address,
        ]);

        $event= session::get('event');

        return view('signup.signUpStep2',compact('event'));
    }

    public function signup3(Request $request){

        $email=session::get('email');
        $DB_email=User::where('email',$email)->value('email');
        $DB_id=User::where('email',$email)->value('id');

        if ($email != $DB_email) {
            $user=User::create([
                'name'=>session::get('name'),
                'email'=>session::get('email'),
                'power'=>2,
                'password'=>Hash::make(session::get('id_card')),
            ]);
        }

        $DB_id=User::where('email',$email)->first();

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

        $plus= 1500 *($request->class1 +$request->class2 +$request->class3);
        $event_id=session::get('event_id');
        $event=Event::where('id',$event_id)->first();
        $subtotal = $event->price + $plus;

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

        $data = SignUp::create([
            'event_id'=>session::get('event_id'),
            'name'=> session::get('name'),
            'id_card'=> session::get('id_card'),
            'gender'=> session::get('gender'),
            'phone'=> session::get('phone'),
            'email'=> session::get('email'),
            'addr'=> session::get('addr'),
            'line_id'=>$request->lineId,
            'emer_name'=>$request->contact,  //緊急聯絡人
            'emer_phone'=>$request->contactPhone, //緊急連絡人電話
            'plus'=>$plus_class,
            'user_id'=>$DB_id->id,
            'subtotal'=>$subtotal,
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
        session([
            'subtotal'=>$subtotal,
        ]);

        return view('signup.signUpStep3',compact('data','subtotal'));
    }


    public function signup4($id){
        $data = SignUp::where('id',$id)->first();
        $subtotal = session::get('subtotal');
        $event=session::get('event');
        return view('signup.signUpStep4',compact('data','subtotal','event'));
    }
}
