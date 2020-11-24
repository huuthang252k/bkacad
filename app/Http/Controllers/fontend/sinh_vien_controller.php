<?php

namespace  App\Http\Controllers\fontend;

use Illuminate\Http\Request;
use App\Model_font\Sinh_vien_model;
class sinh_vien_controller 
{
    public function sinh_vien(Request $rq)
    {
        $ma_sinh_vien = $rq->ma_sinh_vien;
        $ss= $rq->session()->get('ma_sinh_vien');
        // dd($ss);
        $sinhvien = sinh_vien_model::get_one($ss);

        return view('fontend/sinh_vien/sinh_vien',compact('sinhvien'));
    }
    // public function them_sinh_vien(){ 
        
    //     return view('sinh_vien/them_sinh_vien');
    // }
    // public function them_sinh_vien_xu_ly(Request $rq){
    //     $sinh_vien = new sinh_vien_model();
    //     $sinh_vien->Ten_SV = $rq->Ten_SV;
    //     $sinh_vien->gioi_tinh = $rq->gioi_tinh;
    //     $sinh_vien->ngay_sinh = $rq->ngay_sinh;
    //     $sinh_vien->dia_chi = $rq->dia_chi;
    //     $sinh_vien->dien_thoai = $rq->dien_thoai;
    //     $sinh_vien->Malop = $rq->Malop;
    //     $sinh_vien->trang_thai = $rq->trang_thai;
    //     $sinh_vien->process_insert();
    //     return redirect()->route('sinh_vien');   
    // }
    // public function sua_sinh_vien(Request $rq){
    //     $MaSV = $rq->MaSV;
    //     $sinh_vien = sinh_vien_model::get_one($MaSV);
    //     return view('sinh_vien/sua_sinh_vien',compact('sinh_vien'));
    // }
    // public function sua_sinh_vien_xu_ly(Request $rq){
    //     $sinh_vien = new sinh_vien_model();
    //     $sinh_vien->MaSV = $rq->Ma_SV;
    //     $sinh_vien->Ten_SV = $rq->Ten_SV;
    //     $sinh_vien->gioi_tinh = $rq->gioi_tinh;
    //     $sinh_vien->ngay_sinh = $rq->ngay_sinh;
    //     $sinh_vien->dia_chi = $rq->dia_chi;
    //     $sinh_vien->dien_thoai = $rq->dien_thoai;
    //     $sinh_vien->Ten_lop = $rq->Ten_lop;
    //     $sinh_vien->trang_thai = $rq->trang_thai;
    //     $sinh_vien->sinh_vien_update();
    //     return redirect()->route('sinh_vien');
    // }
    
}