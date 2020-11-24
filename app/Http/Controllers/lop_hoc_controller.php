<?php

namespace App\Http\Controllers;
use App\lop_hoc_model;
use App\nganh_model;
use App\Khoa_hoc_model;
use DB;
use Illuminate\Http\Request;
use App\Http\Requests\lop_request;
class lop_hoc_controller extends Controller
{
    public function index(){
        $lop_hoc = lop_hoc_model::lop_hoc_get_all();
        $lop_hoc = DB::table('lop')->join('khoa','lop.ma_khoa','=','khoa.ma_khoa')->join('nganh','lop.ma_nganh','=','nganh.ma_nganh')->paginate(10);
        return view('admin/lop_hoc/danh_sach_lop_hoc',compact('lop_hoc'));
    }
    public function them_lop_hoc(){
        $nganh = nganh_model::nganh_get_all();
        $khoa = khoa_hoc_model::khoa_hoc_get_all();
        return view('admin/lop_hoc/them_lop_hoc', compact('nganh','khoa'));
    }
    public function them_lop_hoc_xu_ly(lop_request $rq){
        $lop_hoc = new lop_hoc_model();
        $lop_hoc->ma_khoa=$rq->ma_khoa;
        $lop_hoc->ma_nganh=$rq->ma_nganh;
        $lop_hoc->ten_lop=$rq->ten_lop;    
        $lop_hoc->lop_hoc_process_insert();
        return redirect() -> route('quan_ly.hienthilophoc');
    }
    public function sua_lop_hoc(Request $rq){
        $ma_lop = $rq->ma_lop;
        $nganh = nganh_model::nganh_get_all();
        $khoa = khoa_hoc_model::khoa_hoc_get_all();
        $lop_hoc = lop_hoc_model::lop_hoc_get_one($ma_lop);
        return view('admin/lop_hoc/sua_lop_hoc',compact('lop_hoc','nganh','khoa'));
    }
    public function sua_lop_hoc_xu_ly(Request $rq){
        $lop_hoc = new lop_hoc_model();
        $lop_hoc->ma_lop=$rq->ma_lop;
        $lop_hoc->ma_khoa=$rq->ma_khoa;
        $lop_hoc->ma_nganh=$rq->ma_nganh;
        $lop_hoc->ten_lop=$rq->ten_lop;  
        $lop_hoc->lop_hoc_process_update();
        return redirect() -> route('quan_ly.hienthilophoc');
    }
}
