<?php

namespace App\Http\Controllers;
use DB;

use Illuminate\Http\Request;

class Search_Controller extends Controller
// {
//     public function getSearch(Request $request)
//     {
//         return view('searchajax');
//     }

//     function getSearchAjax(Request $request)
//     {
//         if($request->get('query'))
//         {
//             $query = $request->get('query');
//             $data = DB::table('sinh_vien')
//             ->where('ten_sinh_vien', 'LIKE', "%{$query}%")
//             ->get();
//             $output = '<ul class="dropdown-menu" style="display:block; position:relative">';
//             foreach($data as $row)
//             {
//                $output .= '
//                <li><a href="data/'. $row->ma_sinh_vien .'">'.$row->ten_sinh_vien'</a></li>
//                ';
//            }
//            $output .= '</ul>';
//            echo $output;
//        }
//     }
// }

{public function timkiem(Request $rq){
    $timkiem = $rq->get('timkiem');
    $sinh_vien = DB::table('sinh_vien')->join('lop','sinh_vien.ma_lop','=','lop.ma_lop')
                                          ->join('nganh','lop.ma_nganh','=','nganh.ma_nganh')
                                          ->join('khoa','lop.ma_khoa','=','khoa.ma_khoa')
                                              ->where('ten_sinh_vien','like','%'.$timkiem.'%')
                                              ->paginate(5);
    return view('sinh_vien/danh_sach_sinh_vien' , ['sinh_vien' => $sinh_vien]);
  }}