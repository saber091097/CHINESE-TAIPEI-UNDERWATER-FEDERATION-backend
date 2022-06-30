<?php

namespace App\Exports;

use App\Models\SignUp;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithDrawings;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;
use Maatwebsite\Excel\Concerns\WithEvents;

class AffidavitExport implements FromView,WithDrawings,WithEvents
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

        return view('exportaffidavit', [
            'data' => SignUp::where('event_id',$this->id)->get()
        ]);
    }

    // public function getDrawings():array
    // {
    //     $drawings = [];

    //     foreach ($this->collection() as $row) {

    //         $drawing = new Drawing();
    //         $drawing->setPath($row->imagePath);
    //         $drawing->setCoordinates('A3');
    //         $drawings[] = $drawing;
    //     }

    //     return $drawings;
    // }

    public function registerEvents()
    {

        return [$this->setImage2Excel($event, 'E2' ,$data['img_path'], 0,90);];
    }
}
