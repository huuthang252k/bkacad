<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class diem_model extends Model
{
    public $ma_sinh_vien;
    public $ma_mon;
    public $diem_lan_1;
    public $diem_lan_2;
    public $kieu_diem;
    public $ma_lop;
    public $ma_khoa;
    public $ma_nganh;
    public $khoa_hoc;
    public $nganh;
    public $mon_hoc;
    public $lop_hoc;
    public $ten_mon;

    static function nganh_get_all(){
        $nganh  = DB::select('select * from nganh');
        return $nganh;
    }
    static function get_all(){
        $sinh_vien  = DB::select('select * from sinh_vien');
        return $sinh_vien;
    }
    static function khoa_hoc_get_all(){
        $khoa_hoc  = DB::select('select * from khoa');
        return $khoa_hoc;
    }
    static function lop_hoc_get_all(){
        $lop_hoc  = DB::select('select * from lop 
            inner join nganh on lop.ma_nganh=nganh.ma_nganh 
            inner join khoa on lop.ma_khoa=khoa.ma_khoa
        ');
        return $lop_hoc;
    }
    static function mon_hoc_get_all(){
        $mon_hoc  = DB::select('select * from mon inner join nganh on mon.ma_nganh=nganh.ma_nganh');
        return $mon_hoc;
    }

    static function lay_diem_ra($ma_lop,$ma_mon,$ma_sinh_vien){
        $diem = DB::select("SELECT 
                                  sinh_vien.ten_sinh_vien as ten_sinh_vien,
                                  sinh_vien.gioi_tinh as gioi_tinh,
                                  diem.diem_lan_1 as diem_lan_mot,
                                  diem.diem_lan_2 as diem_lan_hai,
                                  diem.kieu_diem as diem.kieu_diem
                          FROM (sinh_vien LEFT JOIN lop ON sinh_vien.ma_lop = lop.ma_lop)
                          LEFT JOIN diem ON sinh_vien.ma_sinh_vien = diem.ma_sinh_vien
                          LEFT JOIN mon_hoc ON diem.ma_mon = mon_hoc.ma_mon
                          WHERE lop.ma_lop=? and mon_hoc.ma_mon=? and sinh_vien.ma_sinh_vien=?",[
          $ma_lop,
          $ma_mon,
          $ma_sinh_vien
        ]);
        return $diem;
      }
    static function chon_nganh($id_nganh, $id_khoa)
    {
        $ten_lop = DB::select("SELECT * from lop where ma_nganh = ? AND ma_khoa= ?", [$id_nganh, $id_khoa]);
        return $ten_lop;
    }
    static function chon_mon($id_nganh, $id_khoa)
    {
        $ten_mon = DB::select("SELECT DISTINCT(mon.ma_mon), ten_mon FROM mon INNER JOIN lop ON mon.ma_nganh = lop.ma_nganh
         WHERE lop.ma_nganh = ? AND lop.ma_khoa = ?", [$id_nganh, $id_khoa]);
        return $ten_mon;
    }
    // static function lay_sinh_vien($ma_lop, $kieu_diem){
    //     $sinh_vien = DB::select("SELECT sinh_vien.ma_sinh_vien, sinh_vien.ten_sinh_vien, sinh_vien.gioi_tinh, D.diem_lan_1, D.diem_lan_2 
    //     FROM sinh_vien INNER JOIN lop ON sinh_vien.ma_lop = lop.ma_lop
    //     LEFT JOIN (SELECT * FROM diem WHERE diem.kieu_diem = ?) as D ON sinh_vien.ma_sinh_vien = D.ma_sinh_vien WHERE lop.ma_lop = ?", [
    //         $kieu_diem,
    //         $ma_lop
    //     ]);
    //     return $sinh_vien;
    //   }
    static function lay_sinh_vien($ma_lop,$ma_mon, $kieu_diem){
      $sinh_vien = DB::select("SELECT sinh_vien.ma_sinh_vien, sinh_vien.ten_sinh_vien, sinh_vien.gioi_tinh, D.diem_lan_1, D.diem_lan_2
        FROM sinh_vien INNER JOIN lop ON sinh_vien.ma_lop = lop.ma_lop
        LEFT JOIN (SELECT * FROM diem WHERE diem.kieu_diem = ? AND diem.ma_mon = ?) as D ON sinh_vien.ma_sinh_vien = D.ma_sinh_vien
        WHERE lop.ma_lop = ?", [
            $kieu_diem,
            $ma_mon,
            $ma_lop
        ]);
            return $sinh_vien;
      }
   
    public function diem_process_insert(){
            $check = DB::table('diem')
                ->where('ma_sinh_vien', $this->ma_sinh_vien)
                ->where('ma_mon', $this->ma_mon)
                ->where('kieu_diem', $this->kieu_diem)
                ->count();
        // if ($this->diem_lan_2 != null){
            if ($check == 0) {
                DB::insert("insert into diem(ma_sinh_vien,ma_mon,diem_lan_1,kieu_diem) values (?,?,?,?)", [
                    $this->ma_sinh_vien,
                    $this->ma_mon,
                    $this->diem_lan_1,
                    $this->kieu_diem
                ]);
            } else {
                DB::table('diem')
                ->where('ma_sinh_vien', $this->ma_sinh_vien)
                ->where('ma_mon', $this->ma_mon)
                ->where('kieu_diem', $this->kieu_diem)
                ->update(['diem_lan_1' => $this->diem_lan_1, 'diem_lan_2' => $this->diem_lan_2]);
            }
            
        // } else {
        //     DB::insert("insert into diem(ma_sinh_vien,ma_mon,diem_lan_1,kieu_diem) values (?,?,?,?)", [$this->ma_sinh_vien,$this->ma_mon,$this->diem_lan_1,$this->kieu_diem]);
        // }
    }
    static function diem_get_one($ma_sinh_vien,$ma_lop){
        $diem = DB::select("select * from diem where ma_sinh_vien = ? and ma_lop = ?",[$ma_sinh_vien,$ma_lop]);
        return $diem;
    }
    
}
