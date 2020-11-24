@extends('admin/index')
@section('conten_1_1')

<form method="post" action="{{ route('quan_ly.them_nganh_xu_ly')}}" class="form-nhap">
    {{ csrf_field() }} 
    <div class="form-group">
        <label for="ten_nganh">TÊN NGÀNH</label>
        <input type="text" class="form-control" id="ten_nganh" name="ten_nganh" >
          <span class="mau">{{ $errors->first('ten_nganh')}}</span>
    </div>
    <button type="submit" class="btn btn-primary">ADD</button>
</form>
@endsection