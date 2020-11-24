<?php

namespace App\Model_font;

use Illuminate\Database\Eloquent\Model;
use DB;

class diem_model extends Model
{
    public $ma_sinh_vien;
    public $ma_mon;
    public $diem_lan_1;
    public $diem_lan_2;
    public $kieu_diem;
    public $ten_mon;
    static function get_one($ma_sinh_vien)
    {
        $diem = DB::select("SELECT * from diem 
        inner join mon on diem.ma_mon = mon.ma_mon 
        where ma_sinh_vien = ?",[$ma_sinh_vien]);
        // dd($sinh_vien);
        return $diem;
    }
}