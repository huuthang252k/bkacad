@extends('admin/index')
@section('conten_3_1')
@if (session('alert'))
    <section class="alert alert-cuccess">{{session('alert')}}</section>
    
@endif
<form action="{{ route('quan_ly.them_diem_xu_ly')}}" method="post" class="form-nhap">
    {{ csrf_field() }}
    <table class="table table-borderless table-data2">
        <thead>
            <tr>
                <th>TÊN KHÓA</th>
                <th>TÊN NGÀNH</th>
                <th>TÊN LỚP</th>
                <th>TÊN MÔN</th>
                <th>Kiểu điểm</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <div class="form-group">
                        <select class="form-control" id="ma_khoa" name="ma_khoa">
                            <option value="0" selected>-- Chọn khóa --</option>
                            @foreach ($khoa_hoc as $each_khoa)
                            <option value="{{$each_khoa->ma_khoa}}">{{ $each_khoa->ten_khoa }}</option>
                            @endforeach
                        </select>
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        <select class="form-control" id="ma_nganh" name="ma_nganh" disabled>
                            <option value="0" selected>-- Chọn ngành --</option>
                            @foreach ($nganh as $each_nganh)
                            <option value="{{$each_nganh->ma_nganh}}">{{ $each_nganh->ten_nganh }}</option>
                            @endforeach
                        </select>
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        <select class="form-control" id="ma_lop" name="ma_lop" disabled>
                            <option value="0" selected>-- Chọn lớp --</option>
                        </select>
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        <select class="form-control" id="ma_mon" name="ma_mon" disabled>
                            <option value="0" selected>-- Chọn môn --</option>
                        </select>
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        <select class="form-control" id="kieu_diem" name="kieu_diem" disabled>
                            <option>-- Chọn kiểu điểm --</option>
                            <option value="1">Lý Thuyết</option>
                            <option value="0">Thực Hành</option>
                        </select>
                    </div>
                </td>
            </tr>
        </tbody>

    </table>



    <table class="table table-borderless table-data3" id="diem_sv">
        <thead>
            <tr>
                <th>MÃ SV</th>
                <th>TÊN SV</th>
                <th>GIỚI TÍNH</th>
                <th>ĐIỂM LẦN 1</th>
                <th>ĐIỂM LẦN 2</th>
            </tr>
        </thead>
        {{-- @foreach ($diem as $each)  --}}
        <tbody>
        </tbody>
        {{-- @endforeach --}}
    </table>
    {{-- <button>add</button> --}}
   
</form>
@endsection
{{-- {{ route('quan_ly.them_diem_xu_ly')}} --}}