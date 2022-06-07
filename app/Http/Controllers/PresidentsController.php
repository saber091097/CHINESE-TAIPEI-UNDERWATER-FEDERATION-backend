<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PresidentsController extends Controller
{
    //
    public function index(){
        $header='歷屆理事長管理頁';
        $slot='';
        return view('president.index',compact('header','slot'));
    }
}
