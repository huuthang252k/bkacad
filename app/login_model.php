<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class login_model extends Model
{
    static function login_process($email,$password){
        $user = DB::select("select * from admin where email = ? and password = ?",[
            $email,
            $password
        ]);
        return $user;
    }
    
}
