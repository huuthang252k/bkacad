<?php

namespace App\Http\Controllers\fontend;

use Illuminate\Http\Request;
use App\Model_font\diem_model;
class diem_controller 
{
    public function diem(Request $rq)
    {
        $ma_sinh_vien = $rq->ma_sinh_vien;
        $ss= $rq->session()->get('ma_sinh_vien');
        // dd($ss);
        $diem = diem_model::get_one($ss);

        return view('fontend.diem.diem',compact('diem'));
    }
}