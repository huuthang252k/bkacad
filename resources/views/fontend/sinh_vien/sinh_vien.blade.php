@extends('fontend/index')
@section('conten')
    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sinh Viên</title>
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<body>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">Mã sinh viên</th>
            <th scope="col">Tên sinh viên</th>
            <th scope="col">Giới tính</th>
            <th scope="col">Ngày sinh</th>
            <th scope="col">Địa chỉ</th>
            <th scope="col">Số điện thoại</th>
            <th scope="col">Lớp</th>

           
          </tr>
        </thead>
        <tbody>
            @foreach ($sinhvien as $each)
          <tr>
            <th scope="row"> {{ $each->ma_sinh_vien }} </th>
            <td> {{ $each->ten_sinh_vien }} </td>
            <td>
              @if ($each->gioi_tinh==1)
                  <p>nam</p>
              @elseif($each->gioi_tinh==0)
                  <p>nữ</p>
              @endif
            </td>
            <td> {{ $each->ngay_sinh }} </td>
            <td> {{ $each->dia_chi }} </td>
            <td> {{ $each->sdt }} </td>
            <td> {{ $each->ten_lop }} </td>
          </tr>
          
          
            @endforeach
        </tbody>
      </table>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</html>
@endsection
