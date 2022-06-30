<?php

namespace App\Exports;

use App\Models\SignUp;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithDrawings;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;

class AffidavitExport implements FromView,WithDrawings
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

    public function drawings()
    {

        $drawing = new Drawing();
        $drawing->setName('Logo');
        $drawing->setDescription('This is my logo');
        $drawing->setPath(public_path('/img/CMAS.png'));
        $drawing->setHeight(50);
        $drawing->setCoordinates('A3');
        $drawing->setWorksheet('切結書.xlsx');
        return view('exportaffidavit',[$drawing]);
    }
}
