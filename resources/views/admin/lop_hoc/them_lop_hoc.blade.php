@extends('admin/index')
@section('conten_3_1')


<form method="post" action="{{ route('quan_ly.them_lop_hoc_xu_ly')}}" class="form-nhap">
	{{ csrf_field() }} 
	<div class="form-group">
		<label for="ma_khoa">TÊN KHÓA</label>
		<select  class="form-control" id="ma_khoa" name="ma_khoa">
			@foreach ($khoa as $each_khoa)  
			<option value="{{$each_khoa->ma_khoa}}" selected>{{ $each_khoa->ten_khoa }}</option>
			@endforeach
		</select>
		<span class="mau">{{ $errors->first('ma_khoa')}}</span>
	</div>
	<div class="form-group">
		<label for="ma_nganh">TÊN NGÀNH</label>
		<select  class="form-control" id="ma_nganh" name="ma_nganh">
			@foreach ($nganh as $each_nganh) 
			<option value="{{$each_nganh->ma_nganh}}" selected>{{ $each_nganh->ten_nganh }}</option>
			@endforeach
		</select>
		<span class="mau">{{ $errors->first('ma_nganh')}}</span>
	  </div>
    <div class="form-group">
        <label for="ten_lop">TÊN LỚP</label>
		<input type="text" class="form-control" id="ten_lop" name="ten_lop" >
		<span class="mau">{{ $errors->first('ten_lop')}}</span>
    </div>
    <button type="submit" class="btn btn-primary">ADD</button>
</form>
@endsection