@extends('admin/index')
@section('conten_3_1')

<form method="post" action="{{ route('quan_ly.them_mon_xu_ly')}}" class="form-nhap">
	{{ csrf_field() }} 
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
        <label for="ten_mon">TÊN MÔN</label>
		<input type="text" class="form-control" id="ten_mon" name="ten_mon" >
		<span class="mau">{{ $errors->first('ten_mon')}}</span>
    </div>
    <button type="submit" class="btn btn-primary">ADD</button>
</form>
@endsection