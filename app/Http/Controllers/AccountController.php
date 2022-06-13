<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rules;

class AccountController extends Controller
{
    //
    public function index(){
        $header='帳號管理頁';
        $slot='';
        $users = User::get();
        return view('account.index',compact('users','header','slot'));
    }

    public function create(){
        $header='帳號新增頁';
        $slot='';
        return view('account.create',compact('header','slot'));
    }

    public function edit($id){
        $account = User::find($id);
        $header = '會員管理-編輯頁';
        $slot = '';
        return view('account.edit', compact('account','header','slot'));
    }

    public function store(Request $request){
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'power' => 1,
        ]);

        return redirect('/account');
    }

    public function update($id,Request $request){
        $user = User::find($id);

        $user->name = $request->name;
        $user->power = $request->power;

        if (Hash::needsRehash($request->password)) {
            $user->password = Hash::make($request->password);
        }

        $user->save();

        return redirect('account');
    }

    public function del($id)
    {
        $account = User::find($id);

        $account->delete();

        return redirect('/account');

    }
}
