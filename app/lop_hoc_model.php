<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class lop_hoc_model extends Model
{
    public $ma_lop;
    public $ma_khoa;
    public $ma_nganh;
    public $ten_lop;
    static function lop_hoc_get_all(){
        $lop_hoc  = DB::select('select * from lop 
            inner join nganh on lop.ma_nganh=nganh.ma_nganh 
            inner join khoa on lop.ma_khoa=khoa.ma_khoa
        ');
        return $lop_hoc;
    }
    public function lop_hoc_process_insert(){
        DB::insert("INSERT INTO `lop` ( `ma_khoa`,`ma_nganh`, `ten_lop`) values (?,?,?)", [$this->ma_khoa,$this->ma_nganh,$this->ten_lop]);
    }
    static function lop_hoc_get_one($ma_lop){
        $lop_hoc = DB::select("select * from lop where ma_lop= ?",[$ma_lop]);
        return $lop_hoc;
    }
    public function lop_hoc_process_update(){
        DB::update("update lop set ma_khoa =? ,ma_nganh =? ,ten_lop = ? where ma_lop=?",  [$this->ma_khoa,$this->ma_nganh,$this->ten_lop,$this->ma_lop]);
    }
}
