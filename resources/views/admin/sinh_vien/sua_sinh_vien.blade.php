@extends('admin/index')
@section('conten_2_2')

<form method="post" action="{{ route('quan_ly.sua_sinh_vien_xu_ly', ['ma_sinh_vien'=>$sinh_vien[0]->ma_sinh_vien]) }}" class="form-nhap">
    {{ csrf_field() }}
    @foreach ($sinh_vien as $each) 
    <div class="form-group">
        <label for="ma_sinh_vien">MÃ SINH VIÊN</label>
        <input type="text" class="form-control" id="ma_sinh_vien" name="ma_sinh_vien" value="{{ $each->ma_sinh_vien }}" readonly>
    </div>
    <div class="form-group">
        <label for="ten_sinh_vien">TÊN SINH VIÊN</label>
        <input type="text" class="form-control" id="ten_sinh_vien" name="ten_sinh_vien" value="{{ $each->ten_sinh_vien }}">
    </div>
    <div class="form-group">
        <label for="email">EMAIL</label>
        <input type="text" class="form-control" id="email" name="email" value="{{ $each->email }}">
    </div>
    <div class="form-group">
        <label for="ma_lop">TÊN LỚP</label>
        <select  class="form-control" id="ma_lop" name="ma_lop">
            @foreach ($lop_hoc as $each_lop)
            @if ($each->ma_lop == $each_lop->ma_lop)
                <option value="{{$each_lop->ma_lop}}" selected>{{ $each_lop->ten_lop }}</option>
            @else
                <option value="{{$each_lop->ma_lop}}">{{ $each_lop->ten_lop }}</option>
            @endif
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="dia_chi">ĐỊA CHỈ</label>
        <input type="text" class="form-control" id="dia_chi" name="dia_chi" value="{{ $each->dia_chi }}">
    </div>
    <div class="form-group">
        <label for="sdt">PHONE</label>
        <input type="text" class="form-control" id="sdt" name="sdt" value="{{ $each->sdt }}">
    </div>
    <div class="form-group">
        <label for="ngay_sinh">NGÀY SINH</label>
        <input type="date" class="form-control" id="ngay_sinh" name="ngay_sinh" value="{{ $each->ngay_sinh }}">
    </div>
    
    <div class="form-group">
        <label >GIỚI TÍNH</label><br>
        
        <input placeholder="Nam"  type="radio" name="gioi_tinh" id="gioitinh" value="0"  @if ($each->gioi_tinh == 0)
            checked
        @endif>
        <label for="">NỮ</label> 
         
        <input  type="radio" name="gioi_tinh" id="gioitinhnu" value="1" @if ($each->gioi_tinh == 1)
            checked
        @endif>
        <label for="">NAM</label>
      </div>
    <div class="form-group">
        <label for="password">MẬT KHẨU</label>
        <input type="text" class="form-control" id="password" name="password" value="{{ $each->password }}">
    </div>
    <button type="submit" class="btn btn-primary">EDIT</button>
    @endforeach
</form>

@endsection