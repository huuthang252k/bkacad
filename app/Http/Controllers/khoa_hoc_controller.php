<?php

namespace App\Http\Controllers;
use App\Khoa_hoc_model;
use Illuminate\Http\Request;
use App\Http\Requests\khoa_request;
class khoa_hoc_controller extends Controller
{
    public function index(){
        $khoa_hoc = khoa_hoc_model::khoa_hoc_get_all();
        return view('admin/khoa_hoc/danh_sach_khoa_hoc',compact('khoa_hoc'));
    }
    public function them_khoa(){
        return view('admin/khoa_hoc/them_khoa');
    }
    public function them_khoa_xu_ly(khoa_request $rq){
        $khoa_hoc = new khoa_hoc_model();
        $khoa_hoc->ten_khoa=$rq->ten_khoa;    
        $khoa_hoc->khoa_process_insert();
        return redirect() -> route('quan_ly.hienthikhoahoc');
    }
    public function sua_khoa(Request $rq){
        $ma_khoa = $rq->ma_khoa;
        $khoa_hoc = khoa_hoc_model::khoa_get_one($ma_khoa);
        return view('admin/khoa_hoc/sua_khoa',compact('khoa_hoc'));
    }
    public function sua_khoa_xu_ly(Request $rq){
        $khoa_hoc = new khoa_hoc_model();
        $khoa_hoc->ma_khoa=$rq->ma_khoa;
        $khoa_hoc->ten_khoa=$rq->ten_khoa;  
        $khoa_hoc->khoa_process_update();
        return redirect() -> route('quan_ly.hienthikhoahoc');
    }
    
}
