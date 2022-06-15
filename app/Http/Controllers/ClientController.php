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
            'power' => 2,
        ]);

        return redirect('/index');
    }
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

// 檢查暱稱名是否已存在
// public String checkName(String username) {
// System.out.println("checkName");
// System.out.println(username);
// User user = userService.findUserByName(username);
// if (user != null) {
// return "{\"msg\":\"false\"}";
// }
// return "{\"msg\":\"true\"}";
