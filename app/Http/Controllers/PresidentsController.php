<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\NewLeader;

class PresidentsController extends Controller
{

    public function index(){
        $header='歷屆理事長管理頁';
        $slot='';
        $data=NewLeader::get();
        return view('president.index',compact('data','header','slot'));
    }

    public function create(){
        $header='歷屆理事長新增頁';
        $slot='';
        return view('president.create',compact('header','slot'));
    }

    public function store(Request $request){

        $data = NewLeader::create([
            'name'=> $request->name,
            'year'=>$request->date,
            'position'=>$request->president,
        ]);

        return redirect('presidents');
    }

    public function edit($id){
        $data = NewLeader::where('id',$id)->first();
        $header='歷屆理事長編輯頁';
        $slot='';

        return view('president.edit',compact('data','header','slot'));
    }

    public function update($id, Request $request){

        $data = NewLeader::where('id',$id)->update([
            'name'=> $request->name,
            'year'=>$request->date,
            'position'=>$request->president,
        ]);
        return redirect('presidents');
    }

    public function del($id){
        NewLeader::where('id',$id)->delete();
        return redirect('presidents');
    }
}
