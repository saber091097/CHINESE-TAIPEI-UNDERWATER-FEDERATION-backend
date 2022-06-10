<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        session([

        ]);

        return view('signup.signUpStep3');
    }

}
