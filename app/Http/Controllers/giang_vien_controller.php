<?php

namespace App\Http\Controllers;
use App\Giang_vien_model;
use Illuminate\Database\Eloquent;

use Illuminate\Http\Request;

class giang_vien_controller extends Controller
{
    // public function index(){
    //     $giang_vien = giang_vien_model::giang_vien_get_all();
    //     return view('giang_vien/danh_sach_giang_vien',compact('giang_vien'));
    // }
    // public function them_giang_vien(){
    //     return view('giang_vien/them_giang_vien');
    // }
    // public function them_giang_vien_xu_ly(Request $rq){
    //     $giang_vien = new giang_vien_model();
    //     $giang_vien->email=$rq->email; 
    //     $giang_vien->ten_giang_vien=$rq->ten_giang_vien;
    //     $giang_vien->password=$rq->password;   
    //     $giang_vien->giang_vien_process_insert();
    //     return redirect() -> route('quan_ly.hienthigiangvien');
    // }
    // public function sua_giang_vien(Request $rq){
    //     $ma_giang_vien = $rq->ma_giang_vien;
    //     $giang_vien = giang_vien_model::giang_vien_get_one($ma_giang_vien);
    //     return view('giang_vien/sua_giang_vien',compact('giang_vien'));
    // }
    // public function sua_giang_vien_xu_ly(Request $rq){
    //     $giang_vien = new giang_vien_model();
    //     $giang_vien->ma_giang_vien=$rq->ma_giang_vien;
    //     $giang_vien->email=$rq->email; 
    //     $giang_vien->ten_giang_vien=$rq->ten_giang_vien;
    //     $giang_vien->password=$rq->password;  
    //     $giang_vien->giang_vien_process_update();
    //     return redirect() -> route('quan_ly.hienthigiangvien');
    // }
    
}
