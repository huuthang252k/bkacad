<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class nganh_model extends Model
{
    public $ma_nganh;
    public $ten_nganh;
    static function nganh_get_all(){
        $nganh  = DB::select('select * from nganh');
        return $nganh;
    }
    public function nganh_process_insert(){
        DB::insert("insert into nganh(ten_nganh) values (?)", [$this->ten_nganh]);
    }
    static function nganh_get_one($ma_nganh){
        $nganh = DB::select("select * from nganh where ma_nganh= ?",[$ma_nganh]);
        return $nganh;
    }
    public function nganh_process_update(){
        DB::update("update nganh set ten_nganh = ? where ma_nganh=?",  [$this->ten_nganh,$this->ma_nganh]);
    }
}
