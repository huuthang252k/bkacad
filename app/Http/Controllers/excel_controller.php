<?php

namespace App\Http\Controllers;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use App\excel_model;
class excel_controller extends Controller
{
    public function get_import(){
        return view('excel/import');
    }
    public function port_import(){
        Excel::load(Input::file('file'),function($reader){
            $reader->each(function($sheet){
                foreach ($sheet->toArray() as $row){
                    User::firstOrCreate($sheet->toArray());
                }
            });
        });
        return redirect() -> route('quan_ly.hienthisv');
    }
}
