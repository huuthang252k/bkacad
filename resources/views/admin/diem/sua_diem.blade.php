@extends('admin/index')
@section('conten_3_2')
    <form method="post" action="{{  ['ma_sinh_vien'=>$diem[0]->ma_sinh_vien], ['ma_mon'=>$diem[0]->ma_mon]) }}" class="form-nhap">
        {{ csrf_field() }}
        @foreach ($diem as $each)
        <div class="form-group">
            <label for="ma_sinh_vien">MÃ SINH VIÊN</label>
            <input type="text" class="form-control" id="ma_sinh_vien" name="ma_sinh_vien" value="{{ $each->ma_sinh_vien }}" readonly>
        </div>
        <div class="form-group">
            <label for="ma_mon">MÃ MÔN</label>
            <input type="text" class="form-control" id="ma_mon" name="ma_mon" value="{{ $each->ma_mon }}" readonly>
        </div>
        <div class="form-group">
            <label for="diem_lan_1">ĐIỂM LẦN 1</label>
            <input type="text" class="form-control" id="diem_lan_1" name="diem_lan_1" value="{{ $each->diem_lan_1 }}">
        </div>
        <div class="form-group">
            <label for="diem_lan_2">ĐIỂM LẦN 2</label>
            <input type="text" class="form-control" id="diem_lan_2" name="diem_lan_2" value="{{ $each->diem_lan_2 }}">
        </div>
        <div class="form-group">
            <label >HÌNH THỨC ĐIỂM</label><br>
            
            <input  type="radio" name="kieu_diem" id="kieu_diem" value="0"  @if ($each->kieu_diem == 0)
                checked
            @endif>
            <label for="">Thực Hành</label> 
             
            <input  type="radio" name="kieu_diem" id="kieu_diem_1" value="1" @if ($each->kieu_diem == 1)
                checked
            @endif>
            <label for="">Lý Thuyết</label>
          </div>
        
        <button type="submit" class="btn btn-primary">EDIT</button>
        @endforeach
    </form>


@endsection
{{-- route('quan_ly.sua_diem_xu_ly', --}}