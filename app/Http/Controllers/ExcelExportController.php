<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\AffidavitExport;
use Maatwebsite\Excel\Facades\Excel;


class ExcelExportController extends Controller
{
    //
    public function exportaffidavit($id){

        return Excel::download(new AffidavitExport($id), '切結書.xlsx');

    }
}
