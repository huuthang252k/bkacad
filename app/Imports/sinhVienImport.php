<?php

namespace App\Imports;
use App\Student;
use App\Classes;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
class sinhVienImport implements ToModel, WithHeadingRow
{
    
    public function model(array $row)
    {
        $row = array_filter($row);
        if(!empty($row)){
            $array = [
                'ten_sinh_vien' => $row['ten_sinh_vien'],
                'email' => $row['email'],
                'ma_lop' => Classes::where('ten_lop',$row['ten_lop'])->value('ma_lop'),
                'dia_chi' => $row['dia_chi'],
                'sdt' => $row['sdt'],
                'ngay_sinh' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['ngay_sinh'])->format('Y-m-d'),
                'gioi_tinh' => ($row['gioi_tinh']=='Nam') ? 1 : 0,
                'password' =>  $row['password'],
                
            ];
            return new Student($array);
    }
}
}
