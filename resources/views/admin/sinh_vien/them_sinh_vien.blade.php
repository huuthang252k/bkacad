@extends('admin/index')
@section('conten_2_1')
<form method="post" action="{{ route('quan_ly.them_sinh_vien_xu_ly')}}" class="form-nhap">
	{{ csrf_field() }} 
	<div class="form-group">
		<div class="form-group">
			<label for="ten_sinh_vien">TÊN SINH VIÊN</label>
		<input type="text" class="form-control" id="ten_sinh_vien" value="{{ old('ten_sinh_vien')}}" name="ten_sinh_vien" >
			<span class="mau">{{ $errors->first('ten_sinh_vien')}}</span>
		</div>

		<div class="form-group">
			<label for="email">EMAIL</label>
			<input type="text" class="form-control" id="email" value="{{ old('email')}}" name="email" >
			<span class="mau">{{ $errors->first('email')}}</span>
		</div>

		<div class="form-group">
		<label for="ma_lop">TÊN LỚP</label>
		<select  class="form-control" id="ma_lop" name="ma_lop">
			@foreach ($lop_hoc as $each_lop)
				<option value="{{$each_lop->ma_lop}}" selected>{{ $each_lop->ten_lop }}</option>
			@endforeach
		</select>
		<span class="mau">{{ $errors->first('ma_lop')}}</span>
		</div>

		<div class="form-group">
			<label for="dia_chi">ĐỊA CHỈ</label>
			<span class="mau"><input type="text" class="form-control" value="{{ old('dia_chi')}}" id="dia_chi" name="dia_chi" >
			{{ $errors->first('dia_chi')}}</span>
		</div>

		<div class="form-group">
			<label for="sdt">PHONE</label>
			<input type="text" class="form-control" value="{{ old('sdt')}}" id="sdt" name="sdt" >
			<span class="mau">{{ $errors->first('sdt')}}</span>
		</div>

		<div class="form-group">
			<label for="ngay_sinh">NGÀY SINH</label>
			<input type="date" class="form-control" value="{{ old('ngay_sinh')}}" id="ngay_sinh" name="ngay_sinh" >
			<span class="mau">{{ $errors->first('ngay_sinh')}}</span>
		</div>

		<div class="form-group">
		<label for="gioi_tinh">GIỚI TÍNH</label>
		<select  class="form-control" id="gioi_tinh" name="gioi_tinh">
			<option value="1">Nam</option>
			<option value="0">Nữ</option>
		</select>
		<span class="mau">{{ $errors->first('gioi_tinh')}}</span>
		</div>

		<div class="form-group">
			<label for="password">MẬT KHẨU</label>
			<input type="text" class="form-control" value="{{ old('password')}}" id="password" name="password" >
			<span class="mau">	{{ $errors->first('password')}}</span>
		</div>
		
	</div>
	
    <button type="submit" class="btn btn-primary">ADD</button>
</form>
@endsection