<?php

namespace App\Http\Controllers;
use App\nganh_model;
use Illuminate\Http\Request;
use App\Http\Requests\nganh_request;
class nganh_controller extends Controller
{
    public function index(){
        $nganh = nganh_model::nganh_get_all();
        return view('admin/nganh/danh_sach_nganh',compact('nganh'));
    }
    public function them_nganh(){
        return view('admin/nganh/them_nganh');
    }
    public function them_nganh_xu_ly(nganh_request $rq){
        $nganh = new nganh_model();
        $nganh->ten_nganh=$rq->ten_nganh;    
        $nganh->nganh_process_insert();
        return redirect() -> route('quan_ly.hienthinganh');
    }
    public function sua_nganh(Request $rq){
        $ma_nganh = $rq->ma_nganh;
        $nganh = nganh_model::nganh_get_one($ma_nganh);
        return view('admin/nganh/sua_nganh',compact('nganh'));
    }
    public function sua_nganh_xu_ly(Request $rq){
        $nganh = new nganh_model();
        $nganh->ma_nganh=$rq->ma_nganh;
        $nganh->ten_nganh=$rq->ten_nganh;  
        $nganh->nganh_process_update();
        return redirect() -> route('quan_ly.hienthinganh');
    }
    
}
