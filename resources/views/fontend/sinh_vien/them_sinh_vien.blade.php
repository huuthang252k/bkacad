@extends('index')
@section('conten')

<form method="POST" action=" {{ route('them_sinh_vien_xu_ly') }} ">
    {{ csrf_field() }}
    <label for="Ten_SV">Ten sinh vien:</label>
    <input type="text" name="Ten_SV"> <br>
    <label for="Ten_SV">Email:</label>
    <input type="text" name="email"> <br>
    <label for="gioi_tinh">gioi tinh:</label>
    <input type="radio" name="gioi_tinh" value="1">nam<br>
    <input type="radio" name="gioi_tinh" value="0">nữ<br>
    <label for="ngay_sinh">ngay sinh:</label>
    <input type="date" name="ngay_sinh"> <br>
    <label for="dia_chi">dia chi:</label>
    <input type="text" name="dia_chi">  <br>
    <label for="dien_thoai">dien thoai:</label>
    <input type="text" name="dien_thoai"> <br>
    <label for="Malop">ten lop:</label>
    <input type="text" name="Malop"> <br>
    <label for="trang_thai">trạng thái:</label>
    <input type="radio" name="trang_thai" value="1">khóa<br>
    <input type="radio" name="trang_thai" value="0">mở<br>
    <button>Them</button>
</form>
@endsection