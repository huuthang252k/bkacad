<?php

namespace App\Http\Controllers;
use App\login_model;
use Illuminate\Http\Request;

class login_controller extends Controller
{
    public function login(){
        return view('login');
    }
    public function login_process(Request $rq){
        $email = $rq->email;
        $password = $rq->password;
        $user = login_model::login_process($email,$password);
        // dd($user);
        if(count($user) == 1){
            $rq->session()->put('ma_admin',$user[0]->ma_admin);
            $rq->session()->put('email',$user[0]->email);
            return redirect()->route('quan_ly.them_diem');

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
