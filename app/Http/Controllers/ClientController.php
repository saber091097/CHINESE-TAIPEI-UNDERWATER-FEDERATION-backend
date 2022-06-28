<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use App\Models\User;

class ClientController extends Controller
{


    public function createAccount(){

        return view('createAccount');
    }

    public function store(Request $request){

        // $request->validate([
        //     'name' => ['required', 'string', 'max:255'],
        //     'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        //     'password' => ['required', 'confirmed', Rules\Password::defaults()],
        // ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'power' => 3,
        ]);

        return redirect('/index');
    }


    // public function login(Request $request){
    //     $email = $request->email;
    //     $password = $request->password;

    //     $user = User::where('email', $email)->first();
    //     if(!$user){
    //         return response(['message' => 'Login failed. Please check email id']);
    //     }
    //     if(!Hash::check($password, $user->password)){
    //         return response(['message' => 'Login failed. Please check password']);
    //     }
    //     return response(['message' => 'Login successfully', 'api_token' => $user->api_token]);
    // }
}



//後端 驗證
// 參考網址 https://blog.csdn.net/Gakki_wpt/article/details/90704422

// 檢查信箱是否已存在
// public String checkEmail (String email) { System.out.println("checkEmail");
// System.out.println("email=="+email); // 根據用戶名查詢是否存在該用戶名
// User user = userService.findUserByEmail (email); // 當對象不為空,說明用戶名存在
// if (user != null) {
// return "{\"msg\":\"false\"}";
// }
// return "{\"msg\":\"true\"}";
// }

