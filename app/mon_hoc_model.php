<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class mon_hoc_model extends Model
{
    public $ma_mon;
    public $ma_nganh;
    public $ten_mon;
    static function mon_hoc_get_all(){
        $mon_hoc  = DB::select('select * from mon inner join nganh on mon.ma_nganh=nganh.ma_nganh');
        return $mon_hoc;
    }
    public function mon_hoc_process_insert(){
        DB::insert("INSERT INTO `mon` ( `ma_nganh`, `ten_mon`) values (?,?)", [$this->ma_nganh,$this->ten_mon]);
    }
    static function mon_hoc_get_one($ma_mon){
        $mon_hoc = DB::select("select * from mon where ma_mon= ?",[$ma_mon]);
        return $mon_hoc;
    }
    public function mon_hoc_process_update(){
        DB::update("update mon set ma_nganh =? ,ten_mon = ? where ma_mon=?",  [$this->ma_nganh,$this->ten_mon,$this->ma_mon]);
    }
}
