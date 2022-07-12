<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\SignUp;
use App\Models\User;
class JoinController extends Controller
{
    //
    public function index(){
        $header='活動頁';
        $slot='';
        $data = Event::get();
        return view('join_list.index',compact('data','header','slot'));
    }

    public function joinlist($id){
        $header='參加活動頁';
        $slot='';
        $data = SignUp::where('event_id',$id)->get();
        $event = SignUp::where('event_id',$id)->first();
        return view('join_list.joinlist',compact('data','header','slot','event'));
    }

    public function addpeople($id){
        $header='新增人員頁';
        $slot='';
        $data=Event::where('id',$id)->first();
        return view('join_list.addpeople',compact('header','slot','data'));
    }

    public function addpeoplestore($id,Request $request){

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

        $event=Event::where('id',$id)->first();

        $subtotal = $event->price + $plus;

        $user=User::where('email',$request->email)->first();

        $data = SignUp::create([
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
        ]);

        return redirect('joinlist');
    }
}
