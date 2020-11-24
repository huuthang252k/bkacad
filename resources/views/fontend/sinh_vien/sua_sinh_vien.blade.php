@extends('index')
@section('conten')

<form method="post" action="{{ route('sua_sinh_vien_xu_ly',['MaSV'=> $sinhvien[0]->MaSV]) }}">
	{{ csrf_field() }}
	@foreach ($sinhvien as $each)
		Mã sinh viên:<input type="text" name="Ma_SV" readonly value="{{ $each->MaSV }}"><br>
        Tên sinh viên:<input type="text" name="Ten_SV" value="{{ $each->Ten_SV }}"><br>
        {{-- giới tính:<input type="radio" name="gioi_tinh" value="{{ $each->gioi_tinh }}"><br> --}}
        giới tính:<input type="radio" name="gioi_tinh" value="1">nam<br>
                    <input type="radio" name="gioi_tinh" value="0">nữ<br>
        ngày sinh:<input type="date" name="ngay_sinh" value="{{ $each->ngay_sinh }}"><br>
        địa chỉ:<input type="text" name="dia_chi" value="{{ $each->dia_chi }}"><br>
        điện thoại:<input type="text" name="dien_thoai" value="{{ $each->dien_thoai }}"><br>
        lớp:<input type="text" name="Ten_lop"><br>
        trạng thái:<input type="radio" name="trang_thai" value="1">khóa<br>
                    <input type="radio" name="trang_thai" value="0">mở<br>
	@endforeach
	<button>Sửa</button>
</form>
@endsection