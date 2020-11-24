<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('admin','login_controller@login')->name('login');
Route::post('admin','login_controller@login_process')->name('login_process');
Route::get('logout','login_controller@logout')->name('logout');
Route::group(['prefix'=>'quan_ly','as'=>'quan_ly.','middleware'=>['abc']],function(){

        
        Route::get('/quan_li_sv','sinh_vien_controller@index' )->name('hienthisv');
        Route::get('/quan_li_nganh','nganh_controller@index' )->name('hienthinganh');
        // Route::get('/quan_li_diem','diem_controller@index')->name('themdiem');
        Route::get('/quan_li_khoa_hoc','khoa_hoc_controller@index' )->name('hienthikhoahoc');
        Route::get('/quan_li_lop_hoc','lop_hoc_controller@index' )->name('hienthilophoc');
        Route::get('/quan_li_mon_hoc','mon_hoc_controller@index' )->name('hienthimonhoc');

        // Route::get('/quan_li_diem','diem_controller@chon_lop' )->name('chonlop');
        // Route::get('/quan_li_diem','diem_controller@chon_mon' )->name('chonmon');

        Route::get('them_nganh','nganh_controller@them_nganh')->name('them_nganh');
        Route::post('them_nganh','nganh_controller@them_nganh_xu_ly')->name('them_nganh_xu_ly');

        Route::get('them_sinh_vien_excel','sinh_vien_controller@them_sinh_vien_excel')->name('them_sinh_vien_excel');
	    Route::post('importExcel','sinh_vien_controller@importExcel')->name('importExcel');


        Route::get('hien_thi_diem','diem_controller@hien_thi_diem')->name('hien_thi_diem');
        Route::get('them_diem','diem_controller@them_diem')->name('them_diem');
        Route::post('chon_nganh', 'diem_controller@chon_nganh')->name('chon_nganh');
        Route::post('chon_mon', 'diem_controller@chon_mon')->name('chon_mon');
        Route::post('view_sinh_vien', 'diem_controller@lay_sinh_vien')->name('view_sinh_vien');
        Route::get('them_diem_xu_ly','diem_controller@them_diem_xu_ly')->name('them_diem_xu_ly');

        Route::get('them_khoa','khoa_hoc_controller@them_khoa')->name('them_khoa');
        Route::post('them_khoa','khoa_hoc_controller@them_khoa_xu_ly')->name('them_khoa_xu_ly');
        Route::get('them_mon','mon_hoc_controller@them_mon')->name('them_mon');
        Route::post('them_mon','mon_hoc_controller@them_mon_xu_ly')->name('them_mon_xu_ly');
        Route::get('them_lop','lop_hoc_controller@them_lop_hoc')->name('them_lop_hoc');
        Route::post('them_lop','lop_hoc_controller@them_lop_hoc_xu_ly')->name('them_lop_hoc_xu_ly');
        Route::get('them_sinh_vien','sinh_vien_controller@them_sinh_vien')->name('them_sinh_vien');
        Route::post('them_sinh_vien','sinh_vien_controller@them_sinh_vien_xu_ly')->name('them_sinh_vien_xu_ly');

        Route::get('sua_khoa','khoa_hoc_controller@sua_khoa')->name('sua_khoa');
        Route::post('sua_khoa','khoa_hoc_controller@sua_khoa_xu_ly')->name('sua_khoa_xu_ly');
        Route::get('sua_nganh','nganh_controller@sua_nganh')->name('sua_nganh');
        Route::post('sua_nganh','nganh_controller@sua_nganh_xu_ly')->name('sua_nganh_xu_ly');
        Route::get('sua_diem','diem_controller@sua_diem')->name('sua_diem');
        // Route::post('sua_diem','diem_controller@sua_diem_xu_ly')->name('sua_diem_xu_ly');
        Route::get('sua_mon','mon_hoc_controller@sua_mon')->name('sua_mon');
        Route::post('sua_mon','mon_hoc_controller@sua_mon_xu_ly')->name('sua_mon_xu_ly');
        Route::get('sua_lop','lop_hoc_controller@sua_lop_hoc')->name('sua_lop_hoc');
        Route::post('sua_lop','lop_hoc_controller@sua_lop_hoc_xu_ly')->name('sua_lop_hoc_xu_ly');
        Route::get('sua_sinh_vien','sinh_vien_controller@sua_sinh_vien')->name('sua_sinh_vien');
        Route::post('sua_sinh_vien','sinh_vien_controller@sua_sinh_vien_xu_ly')->name('sua_sinh_vien_xu_ly');

        Route::post('tim_kiem','sinh_vien_controller@tim_kiem')->name('tim_kiem');

});

// Route::get('/','fontend/login_controller@login')->name('login');
// Route::post('/','fontend/login_controller@login_process')->name('login_process');
// Route::get('logout','fontend/login_controller@logout')->name('logout');
// Route::group(['prefix'=>'quan_ly','as'=>'quan_ly.','middleware'=>[]],function(){
//     Route::get('sinh_vien','fontend/sinh_vien_controller@sinh_vien')->name('sinh_vien');

//     Route::get('diem','fontend/diem_controller@diem')->name('diem');
// });
$controller = "fontend\login_controller";
$controller1 = "fontend\sinh_vien_controller";
$controller2 = "fontend\diem_controller";

Route::get("/","$controller@login")->name("login");
Route::post("/","$controller@login_process")->name("login_process");
Route::get("logout","$controller@logout")->name("logout");
Route::group(["prefix"=>"quan_ly","as"=>"quan_ly.","middleware"=>[]],function()use($controller1,$controller2){

    Route::get("sinh_vien","$controller1@sinh_vien")->name("sinh_vien");

    Route::get("diem","$controller2@diem")->name('diem');
});


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



// Route::get('/','demo_controller@login')->name('login');
// Route::post('/','demo_controller@login_process')->name('login_process');
// Route::get('logout','demo_controller@logout')->name('logout');
// Route::group(['prefix'=>'quan_ly_sach','as'=>'quan_ly_sach.','middleware'=>['abc']],function(){
    // Route::get('danh_sach_sinh_vien','demo_controller@danh_sach_sinh_vien')->name('danh_sach_sinh_vien_name');
//     Route::get('them_sach','demo_controller@them_sach')->name('them_sach');
//     Route::post('them_sach','demo_controller@them_sach_xu_ly')->name('them_sach_xu_ly');
//     Route::get('sua_sach/{ma_sach}','demo_controller@sua_sach')->name('sua_sach');
//     Route::post('sua_sach/{ma_sach}','demo_controller@sua_sach_xu_ly')->name('sua_sach_xu_ly');
//     Route::get('xoa_sach/{ma_sach}','demo_controller@xoa_sach')->name('xoa_sach');
    
// });

