<?php

namespace App\Http\Controllers;
use App\mon_hoc_model;
use App\nganh_model;
use Illuminate\Http\Request;
use App\Http\Requests\mon_request;
class mon_hoc_controller extends Controller
{
    public function index(){
        $mon_hoc = mon_hoc_model::mon_hoc_get_all();
        return view('admin/mon_hoc/danh_sach_mon_hoc',compact('mon_hoc'));
    }
    public function them_mon(){
        $nganh = nganh_model::nganh_get_all();
        return view('admin/mon_hoc/them_mon_hoc', compact('nganh'));
    }
    public function them_mon_xu_ly(mon_request $rq){
        $mon_hoc = new mon_hoc_model();
        $mon_hoc->ma_nganh=$rq->ma_nganh;
        $mon_hoc->ten_mon=$rq->ten_mon;    
        $mon_hoc->mon_hoc_process_insert();
        return redirect() -> route('quan_ly.hienthimonhoc');
    }
    public function sua_mon(Request $rq){
        $ma_mon = $rq->ma_mon;
        $mon_hoc = mon_hoc_model::mon_hoc_get_one($ma_mon);
        $nganh = nganh_model::nganh_get_all();
        return view('admin/mon_hoc/sua_mon_hoc',compact('mon_hoc','nganh'));
    }
    public function sua_mon_xu_ly(Request $rq){
        $mon_hoc = new mon_hoc_model();
        $mon_hoc->ma_mon=$rq->ma_mon;
        $mon_hoc->ma_nganh=$rq->ma_nganh;
        $mon_hoc->ten_mon=$rq->ten_mon;  
        $mon_hoc->mon_hoc_process_update();
        return redirect() -> route('quan_ly.hienthimonhoc');
    }
    
}
