<?php

namespace App\Exports;

use App\Models\SignUp;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class JoinList implements FromView
{
    //定義傳過來的id
    public $id;

    // 轉換成export 要讀取的id
    public function __construct($id)
    {
        $this->id = $id;
    }

    public function view(): View
    {
        return view('exportclasslist', [
            'data' => SignUp::where('event_id',$this->id)->get()
        ]);
    }
}
