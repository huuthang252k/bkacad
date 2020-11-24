<?php

namespace App\Http\Controllers;
use App\diem_model;
use App\Sinh_vien_model;
use App\mon_hoc_model;
use App\Khoa_hoc_model;
use App\lop_hoc_model;
use App\nganh_model;
use Illuminate\Http\Request;

class diem_controller extends Controller
{
    // public function index(){
    //     $mon_hoc = diem_model::mon_hoc_get_all();
    //     $nganh = diem_model::nganh_get_all();
    //     $khoa_hoc = diem_model::khoa_hoc_get_all();
    //     $lop_hoc = diem_model::lop_hoc_get_all();
    //     $diem = diem_model::diem_get_all();
    //     return view('diem/danh_sach_diem',compact('diem', 'mon_hoc','khoa_hoc','lop_hoc','nganh'));
    // }
    public function them_diem(){
        $sinh_vien = diem_model::get_all();
        $mon_hoc = diem_model::mon_hoc_get_all();
        $lop_hoc = diem_model::lop_hoc_get_all();
        $nganh = diem_model::nganh_get_all();
        $khoa_hoc = diem_model::khoa_hoc_get_all();
        return view('admin/diem/them_diem' ,compact('sinh_vien','mon_hoc','lop_hoc','nganh','khoa_hoc'));
    }
    public function chon_nganh(Request $rq)
    {
        $nganh = $rq->nganh;
        $khoa = $rq->khoa;
        $ten_lop = diem_model::chon_nganh($nganh, $khoa);
        $rs = '';
        $rs .= "<option value='0' selected>-- Chọn lớp --</option>";
        foreach ($ten_lop as $each) {
            $rs .= "<option value='$each->ma_lop' >$each->ten_lop</option>";
        }
        return $rs; 
    }
    public function chon_mon(Request $rq)
    {
        $nganh = $rq->nganh;
        $khoa = $rq->khoa;
        $ten_mon = diem_model::chon_mon($nganh, $khoa);
        $result = '';
        $result .= "<option value='0' selected>-- Chọn môn --</option>";
        foreach ($ten_mon as $each) {
            $result .= "<option value='$each->ma_mon' >$each->ten_mon</option>";
        }
        return $result;
    }
    // public function hien_thi_diem(Request $request){
	
	// 	$ma_lop = $request->ma_lop;
    //     $ma_mon = $request->ma_mon;
    //     $ma_sinh_vien = $request->ma_sinh_vien;

	// 	$diem = diem_model::lay_diem_ra($ma_lop,$ma_mon, $ma_sinh_vien);
    //     $RE="";
	// 	foreach ($diem as $each){
    //         if ($each->gioi_tinh == 0) {
    //             $sex = "Nữ";
    //         } else {
    //             $sex = "Nam";
    //         }
    //         $RE .="<tr>
    //             <input type='hidden' name='ma_sinh_vien' value='$each->ma_sinh_vien'>
    //             <td><input type='hidden' name='ten_sinh_vien' value='$each->ten_sinh_vien'></td>
    //             <td><input type='hidden' name='sex' value='$each->sex'></td>
    //             <td><input type='hidden' name='diem_lan_1' value='$each->diem_lan_mot'></td>
    //             <td><input type='hidden' name='diem_lan_2' value='$each->diem_lan_hai'></td>
	// 	  		</tr>
	//   		";
    //     }
    //     // <input type='hidden' name='kieu_diem' value='$each->kieu_diem'>
	// 	//   		<td> $each->kieu_diem </td>
	//   return $RE;        
	// }
    public function lay_sinh_vien(Request $Request){
		$ma_lop = $Request->lop;
		$ma_mon = $Request->mon;
        $kieu_diem = $Request->kieu_diem;
        $sinh_vien = diem_model::lay_sinh_vien($ma_lop,$ma_mon, $kieu_diem);
        // $sinh_vien = DB::table('sinh_vien')->join('lop','sinh_vien.ma_lop','=','lop.ma_lop')
        //                             ->join('diem','sinh_vien.ma_sinh_vien','=','diem.ma_sinh_vien')
        //                             ->paginate(10);
        $Result="";
		foreach ($sinh_vien as $each){
            if ($each->gioi_tinh == 0) {
                $sex = "Nữ";
            } else {
                $sex = "Nam";
            }
			$Result .="<tr id='sv_$each->ma_sinh_vien'>
                <input type='hidden' name='ma_sinh_vien' value='$each->ma_sinh_vien'>
                <td>$each->ma_sinh_vien</td>
                <td>$each->ten_sinh_vien</td>
                <td>$sex</td>
                <td><input type='number' name='diem_lan_1' value='$each->diem_lan_1' data-ma_sv='sv_$each->ma_sinh_vien' class='form-control diem'><i></i></td>
                <td><input type='number' name='diem_lan_2' value='$each->diem_lan_2' data-ma_sv='sv_$each->ma_sinh_vien' class='form-control diem'></td>
                </tr>
                
	  		";
	    }
          return $Result;        
	}
    public function them_diem_xu_ly(Request $rq){
        $diem = new diem_model(); 
        $diem->ma_sinh_vien=$rq->ma_sinh_vien;
        $diem->ma_mon=$rq->mon;
        $diem->diem_lan_1=$rq->diem_1;
        $diem->diem_lan_2=$rq->diem_2;
        $diem->kieu_diem=$rq->kieu_diem;  
        $diem->diem_process_insert();
        return 0;
    }
    public function sua_diem(Request $rQ){
        $ma_sinh_vien = $rQ->ma_sinh_vien;
        $ma_lop = $rQ->ma_lop;
        $diem = diem_model::diem_get_one($ma_sinh_vien,$ma_lop);
        return view('admin/diem/sua_diem',compact('diem'));
    }
    // public function diem(Request $rq)
    // {
    //     $ma_sinh_vien = $rq->ma_sinh_vien;
    //     $ss= $rq->session()->get('ma_sinh_vien');
    //     // dd($ss);
    //     $diem = diem_model::get_one($ss);

    //     return view('diem.diem',compact('diem'));
    // }
}
 