<?php

namespace App\Model_font;

use Illuminate\Database\Eloquent\Model;
use DB;

class sinh_vien_model extends Model
{
    public $ma_sinh_vien;
    public $ten_sinh_vien;
    public $gioi_tinh;
    public $ngay_sinh;
    public $dia_chi;
    public $sdt;
    public $ma_lop;
    public $_SESSION;
    static function get_one($ma_sinh_vien)
    {
        $sinh_vien = DB::select("SELECT * from sinh_vien 
        inner join lop on sinh_vien.ma_lop = lop.ma_lop 
        where ma_sinh_vien = ?",[$ma_sinh_vien]);
        // dd($sinh_vien);
        return $sinh_vien;
    }
    // public function process_insert(){
    //     DB::insert("INSERT into sinh_vien (ten_sinh_vien,gioi_tinh,ngay_sinh,dia_chi,sdt,ma_lop)
    //     value ('$this->ten_sinh_vien','$this->gioi_tinh','$this->ngay_sinh','$this->dia_chi',
    //     '$this->sdt','$this->ma_lop')");
    // }
    // static function get_one($ma_sinh_vien){
    //     $sinh_vien = DB::select("SELECT * from sinh_vien 
    //     inner join lop on sinh_vien.ma_lop=lop.ma_lop
    //     where ma_sinh_vien = ?",[
    //         $ma_sinh_vien
    //     ]);
    //     return $sinh_vien;
    // }
    // public function sinh_vien_update(){
    //     DB::update("UPDATE sinh_vien set ten_sinh_vien = ?, gioi_tinh = ?, ngay_sinh = ?, dia_chi= ?, sdt=?,ma_lop=?
    //      where ma_sinh_vien = ?",[
    //         $this->ten_sinh_vien,
    //         $this->gioi_tinh,
    //         $this->ngay_sinh,
    //         $this->dia_chi,
    //         $this->sdt,
    //         $this->Ten_lop,
    //         $this->ma_sinh_vien, 
                      
    //     ]);
    // }
}
