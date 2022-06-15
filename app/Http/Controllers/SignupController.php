<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;
use App\Http\Controllers\FilesController;
use App\Models\SignUp;
use App\Models\User;
use App\Models\Event;
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

    public function signup2(Request $request){
        session([
            'name'=>$request->name,
            'id_card'=>$request->id,
            'gender'=>$request->sex,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'addr'=>$request->county.$request->district.$request->address,
        ]);

        return view('signup.signUpStep2');
    }

    public function signup3(Request $request){
        $email=session::get('email');
        $DB_email=User::where('email',$email)->value('email');

        if ($email != $DB_email) {
            $user=User::create([
                'name'=>session::get('name'),
                'email'=>session::get('email'),
                'power'=>2,
                'password'=>Hash::make(session::get('id_card')),
            ]);
        }
        else{
            $DB_id=User::where('email',$email)->value('id');
            SignUp::create([
                'user_id'=>$DB_id,
            ]);
        }


        if ($request->hasfile('headshot')){
            foreach ($request->headshot as $key => $value) {
                $headshot_path = FilesController::imgUpload($value,'headshot');
                SignUp::create([
                    'headshot'=>$headshot_path,
                ]);
            }
        }

        if ($request->hasfile('idCard1')){
            foreach ($request->idCard2 as $key => $value) {
                $idcard1_path = FilesController::imgUpload($value,'idcard1');
                SignUp::create([
                    'id_card_img_front'=>$idcard1_path,
                ]);
            }
        }

        if ($request->hasfile('idCard2')){
            foreach ($request->idCard2 as $key => $value) {
                $idcard2_path = FilesController::imgUpload($value,'idcard2');
                SignUp::create([
                    'id_card_img_reverse'=>$idcard2_path,
                ]);
            }
        }

        SignUp::create([
            'event_id'=>session::get('event_id'),
            'name'=> session::get('name'),
            'id_card'=> session::get('id_card'),
            'gender'=> session::get('gender'),
            'phone'=> session::get('phone'),
            'email'=> session::get('email'),
            'addr'-> session::get('addr'),
            'line_id'=>$request->lineId,
            'contact'=>$request->contact,  //緊急聯絡人
            'contactPhone'=>$request->contactPhone, //緊急連絡人電話
            'class'=>$request->class,//額外加課程
        ]);

        return view('signup.signUpStep3',compact('data'));
    }

}
