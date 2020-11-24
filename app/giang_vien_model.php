<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class Giang_vien_model extends Model
{
    // public $ma_giang_vien;
    // public $email;
    // public $ten_giang_vien;
    // public $password;
    // static function giang_vien_get_all(){
    //     $giang_vien  = DB::select('select * from giang_vien');
    //     return $giang_vien;
    // }
    // public function giang_vien_process_insert(){
    //     DB::insert("insert into giang_vien(email,ten_giang_vien,password) values (?,?,?)", [$this->email,$this->ten_giang_vien,$this->password]);
    // }
    // static function giang_vien_get_one($ma_giang_vien){
    //     $giang_vien = DB::select("select * from giang_vien where ma_giang_vien= ?",[$ma_giang_vien]);
    //     return $giang_vien;
    // }
    // public function giang_vien_process_update(){
    //     DB::update("update giang_vien set email = ?, ten_giang_vien = ?, password = ? where ma_giang_vien=?",  [$this->email,$this->ten_giang_vien,$this->password,$this->ma_giang_vien]);
    // }
}
