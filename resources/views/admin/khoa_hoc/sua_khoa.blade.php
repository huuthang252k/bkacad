@extends('admin/index')
@section('conten_3_2')
<form method="post" action="{{ route('quan_ly.sua_khoa_xu_ly', ['ma_khoa'=>$khoa_hoc[0]->ma_khoa]) }}" class="form-nhap">
    
    @foreach ($khoa_hoc as $each) 
    <div class="form-group">
        <label for="ma_khoa">MÃ KHÓA</label>
        <input type="text" class="form-control" id="ma_khoa" name="ma_khoa" value="{{ $each->ma_khoa }}" readonly>
    </div>
    <div class="form-group">
        <label for="ten_khoa">TÊN KHÓA</label>
        <input type="text" class="form-control" id="ten_khoa" name="ten_khoa" value="{{ $each->ten_khoa }}">
    </div>
    <button type="submit" class="btn btn-primary">EDIT</button>
    @endforeach
</form>
@endsection