<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\JoinList;
use Maatwebsite\Excel\Facades\Excel;

class ExcelExportController extends Controller
{
    //
    public function export($id){

        return Excel::download(new JoinList($id), '成員名單.xlsx');

    }
}
