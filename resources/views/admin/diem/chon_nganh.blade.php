@extends('admin/index')
@section('conten_3_1')
<form action="{{ route('quan_ly.chon_nganh') }}" method="post" class="form-nhap">
    {{ csrf_field() }}
    
	<div class="form-group">
		<label for="ma_nganh">TÊN NGÀNH</label>
		<select  class="form-control" id="ma_nganh" name="ma_nganh">
			@foreach ($nganh as $each_nganh) 
			<option value="{{$each_nganh->ma_nganh}}">{{ $each_nganh->ten_nganh }}</option>
			@endforeach
		</select>
	</div>
    <button type="submit" class="btn btn-primary">ADD</button>
</form>
@endsection