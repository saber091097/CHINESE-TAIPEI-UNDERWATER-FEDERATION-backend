<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PresidentsController extends Controller
{
    //
    public function index(){
        return view('president.index');
    }
}
