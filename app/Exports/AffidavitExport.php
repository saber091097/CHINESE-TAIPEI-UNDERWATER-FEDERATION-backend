<?php

namespace App\Exports;

use App\Models\SignUp;
use App\Models\HeadShot;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithDrawings;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;
use Maatwebsite\Excel\Concerns\WithEvents;

class AffidavitExport implements FromView,WithDrawings
{
    //定義傳過來的id
    public $id;
    public $data;
    // 轉換成export 要讀取的id
    public function __construct($id)
    {
        $this->id = $id;
    }

    public function view(): View
    {
        return view('exportsignlist', [
            'data' => SignUp::where('event_id',$this->id)->get()
        ]);
    }

}
