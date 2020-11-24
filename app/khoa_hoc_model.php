<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class Khoa_hoc_model extends Model
{
    public $ma_khoa;
    public $ten_khoa;
    static function khoa_hoc_get_all(){
        $khoa_hoc  = DB::select('select * from khoa');
        return $khoa_hoc;
    }
    public function khoa_process_insert(){
        DB::insert("insert into khoa(ten_khoa) values (?)", [$this->ten_khoa]);
    }
    static function khoa_get_one($ma_khoa){
        $khoa_hoc = DB::select("select * from khoa where ma_khoa= ?",[$ma_khoa]);
        return $khoa_hoc;
    }
    public function khoa_process_update(){
        DB::update("update khoa set ten_khoa = ? where ma_khoa=?",  [$this->ten_khoa,$this->ma_khoa]);
    }
    
}
