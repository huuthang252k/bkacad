@extends('admin/index')
@section('conten_3_1')
<form method="post" action="{{ route('quan_ly.them_khoa_xu_ly')}}" class="form-nhap">
    {{ csrf_field() }} 
    <div class="form-group">
        <label for="ten_khoa">TÊN KHÓA</label>
        <input type="text" class="form-control" id="ten_khoa" name="ten_khoa" >
        <span class="mau">{{ $errors->first('ten_khoa')}}</span>
    </div>
    <button type="submit" class="btn btn-primary">ADD</button>
</form>

@endsection