<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'sinh_vien';
    protected $primaryKey = 'ma_sinh_vien';
    protected $fillable = [
    	'ten_sinh_vien',
        'email',
        'ma_lop',
        'dia_chi',
    	'sdt',
    	'ngay_sinh',
    	'gioi_tinh',
    	'password',
    	
    ];

    public $timestamps = false;
}
