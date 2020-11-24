<?php

namespace App\Http\Controllers;
use App\Sinh_vien_model;
use App\lop_hoc_model;
use Illuminate\Database\Eloquent;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use App\Imports\sinhVienImport;
use DB;
use App\Http\Requests\sinh_vien_request;

class sinh_vien_controller extends Controller
{
    public function index(){
        $sinh_vien = sinh_vien_model::get_all();
        $sinh_vien = DB::table('sinh_vien')->join('lop','sinh_vien.ma_lop','=','lop.ma_lop')->paginate(10);
        return view('admin/sinh_vien/danh_sach_sinh_vien',compact('sinh_vien'));
    }
    public function them_sinh_vien(){
        $lop_hoc = lop_hoc_model::lop_hoc_get_all();
        return view('admin/sinh_vien/them_sinh_vien' ,compact('lop_hoc'));
    }
    public function tim_kiem(Request $rq){
        $tim_kiem = $rq->get('tim_kiem');
        $sinh_vien = DB::table('sinh_vien')->join('lop','sinh_vien.ma_lop','=','lop.ma_lop')
                                              ->join('nganh','lop.ma_nganh','=','nganh.ma_nganh')
                                             ->join('khoa','lop.ma_khoa','=','khoa.ma_khoa')
                                                  ->where('ten_sinh_vien','like','%'.$tim_kiem.'%')
                                                  ->paginate(5);
        return view('admin/sinh_vien/danh_sach_sinh_vien' , ['sinh_vien' => $sinh_vien]);
      }
    public function them_sinh_vien_xu_ly(sinh_vien_request $rq){
        $sinh_vien = new sinh_vien_model(); 
        $sinh_vien->ten_sinh_vien=$rq->ten_sinh_vien;
        $sinh_vien->email=$rq->email;
        $sinh_vien->ma_lop=$rq->ma_lop;
        $sinh_vien->dia_chi=$rq->dia_chi;
        $sinh_vien->sdt=$rq->sdt;
        $sinh_vien->ngay_sinh=$rq->ngay_sinh;  
        $sinh_vien->gioi_tinh=$rq->gioi_tinh;
        $sinh_vien->password=$rq->password;
        $sinh_vien->sinh_vien_process_insert();
        return redirect() -> route('quan_ly.hienthisv');
    }
    public function sua_sinh_vien(Request $rq){
        $ma_sinh_vien = $rq->ma_sinh_vien;
        $lop_hoc = lop_hoc_model::lop_hoc_get_all();
        $sinh_vien = sinh_vien_model::sinh_vien_get_one($ma_sinh_vien);
        return view('admin/sinh_vien/sua_sinh_vien',compact('sinh_vien','lop_hoc'));
    }
    public function sua_sinh_vien_xu_ly(Request $rq){
        $sinh_vien = new sinh_vien_model();
        $sinh_vien->ma_sinh_vien=$rq->ma_sinh_vien;
        $sinh_vien->ten_sinh_vien=$rq->ten_sinh_vien;
        $sinh_vien->email=$rq->email;
        $sinh_vien->ma_lop=$rq->ma_lop;
        $sinh_vien->dia_chi=$rq->dia_chi;
        $sinh_vien->sdt=$rq->sdt;
        $sinh_vien->ngay_sinh=$rq->ngay_sinh; 
        $sinh_vien->gioi_tinh=$rq->gioi_tinh;
        $sinh_vien->password=$rq->password; 
        $sinh_vien->sinh_vien_process_update();
        return redirect() -> route('quan_ly.hienthisv');
    }
    function them_sinh_vien_excel(){
        return view ('admin/sinh_vien.them_sinh_vien_excel');
    }
    public function importExcel() 
      {
          Excel::import(new sinhVienImport,request()->file('excel'));
           $alert='Nhập Sinh Viên Thành Công!';  
          return redirect() -> route('quan_ly.hienthisv') -> with('alert',$alert);
      }
      
}


