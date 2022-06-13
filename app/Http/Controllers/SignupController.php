<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;
use App\Http\Controllers\FilesController;
use App\Models\SignUp;

class SignupController extends Controller
{
    //

    public function signup1(){


        return view('signup.signUpStep1');
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

        if ($request->hasfile('headshot')){
            foreach ($request->headshot as $key => $value) {
                $headshot_path = FilesController::imgUpload($value,'headshot');
                SignUp::create([
                    'headshot'=>$headshot_path,
                ]);

            }
        }

        if ($request->hasfile('idcard1')){
            foreach ($request->idcard1 as $key => $value) {
                $idcard1_path = FilesController::imgUpload($value,'idcard1');
                SignUp::create([
                    'id_card_img_front'=>$idcard1_path,
                ]);
            }
        }

        if ($request->hasfile('idcard2')){
            foreach ($request->idcard2 as $key => $value) {
                $idcard2_path = FilesController::imgUpload($value,'idcard2');
                SignUp::create([
                    'id_card_img_reverse'=>$idcard2_path,
                ]);
            }
        }

        session([
            'line_id'=>$request->lineid,
            'contact'=>$request->contact,  //緊急聯絡人
            'contactPhone'=>$request->contactPhone, //緊急連絡人電話
            'class'=>$request->class,//額外加課程
        ]);

        $data = session::all();



        return view('signup.signUpStep3',compact('data'));
    }

}
