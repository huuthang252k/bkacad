<?php

namespace App;

use Illuminate\Database\Eloquent;
use DB;
class Sinh_vien_model 
{   
    public $ma_sinh_vien;
    public $ten_sinh_vien;
    public $email;
    public $ma_lop;
    public $dia_chi;
    public $sdt;
    public $ngay_sinh;
    public $gioi_tinh;
    public $password;
    static function get_all(){
        $sinh_vien  = DB::select('select * from sinh_vien inner join lop on sinh_vien.ma_lop=lop.ma_lop');
        return $sinh_vien;
    }
    public function sinh_vien_process_insert(){
        DB::insert("insert into sinh_vien(ten_sinh_vien,email,ma_lop,dia_chi,sdt,ngay_sinh,gioi_tinh,password) values (?,?,?,?,?,?,?,?)", [$this->ten_sinh_vien,$this->email,$this->ma_lop,$this->dia_chi,$this->sdt,$this->ngay_sinh,$this->gioi_tinh,$this->password]);
    }
    static function sinh_vien_get_one($ma_sinh_vien){
        $sinh_vien = DB::select("select * from sinh_vien where ma_sinh_vien= ?",[$ma_sinh_vien]);
        return $sinh_vien;
    }
    public function sinh_vien_process_update(){
        DB::update("update sinh_vien set ten_sinh_vien = ?,email = ? ,ma_lop = ?,dia_chi = ?,sdt = ?,ngay_sinh = ?, gioi_tinh = ?, password = ? where ma_sinh_vien=?",  [$this->ten_sinh_vien,$this->email,$this->ma_lop,$this->dia_chi,$this->sdt,$this->ngay_sinh,$this->gioi_tinh,$this->password,$this->ma_sinh_vien]);
    }
    
    
}

