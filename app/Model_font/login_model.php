<?php

namespace App\Model_font;
use DB;
use Illuminate\Database\Eloquent\Model;

class login_model extends Model
{
    static function login_process($email,$password){
        $sinhvien = DB::select("select * from sinh_vien where email = ? and password = ?",[
            $email,
            $password
        ]);
        return $sinhvien;
    }
}