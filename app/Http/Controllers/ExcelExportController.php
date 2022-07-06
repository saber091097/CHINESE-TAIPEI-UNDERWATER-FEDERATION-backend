<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\AffidavitExport;
use Maatwebsite\Excel\Facades\Excel;


class ExcelExportController extends Controller
{
    //
    public function exportsignlist($id){
        return Excel::download(new AffidavitExport($id), '成員名單.xlsx');

    }
}
