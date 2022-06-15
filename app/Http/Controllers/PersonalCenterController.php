<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class PersonalCenterController extends Controller
{
    //
    public function index(){


        return view('personalcenter');
    }

    public function update($id,Request $request){
        $user = User::find($id);

        $user->name = $request->name;

        $user->save();

        return redirect('/personal-center');
    }
}
