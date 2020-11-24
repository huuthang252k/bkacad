<?php

namespace App\Http\Controllers\fontend;
use App\Model_font\login_model;
use Illuminate\Http\Request;

class login_controller 
{
    public function login(){
        return view('fontend/login');
    }
    public function login_process(Request $rq){
        $email = $rq->email;
        $password = $rq->password;
        $sinhvien = login_model::login_process($email,$password);
        // dd($user);
        if(count($sinhvien) == 1){
            $rq->session()->put('ma_sinh_vien',$sinhvien[0]->ma_sinh_vien);
            $rq->session()->put('email',$sinhvien[0]->email);
            $rq->session()->put('ten_sinh_vien',$sinhvien[0]->ten_sinh_vien);
            return redirect()->route('quan_ly.sinh_vien');
            // return view('quan_ly.sinh_vien', compact('sinhvien'));
        }
        else{
            return redirect()->route('login')->with('error','tài khoản không tồn tại');
        }   
    }
    public function logout(Request $rq){
        $rq->session()->flush();
        return redirect()->route('login');
    }
}