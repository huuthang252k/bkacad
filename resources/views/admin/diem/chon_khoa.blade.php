@extends('admin/index')
@section('conten_3_1')
<form action="" method="post" class="form-nhap">
    {{ csrf_field() }}
    <div class="form-group">
		<label for="ma_khoa">TÊN KHÓA</label>
		<select  class="form-control" id="ma_khoa" name="ma_khoa">
            <option value="0" ></option>
			@foreach ($khoa_hoc as $each_khoa)  
			<option value="{{$each_khoa->ma_khoa}}" selected>{{ $each_khoa->ten_khoa }}</option>
			@endforeach
		</select>
	</div>

    <button type="submit" class="btn btn-primary">ADD</button>
</form>
@endsection