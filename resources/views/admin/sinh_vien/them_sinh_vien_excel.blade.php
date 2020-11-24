@extends('admin/index')
@section('conten')

<form action="{{ route('quan_ly.importExcel') }}" method="POST" enctype="multipart/form-data">
	{{ csrf_field() }}
<table class="table" cellspacing="0" cellpadding="0" width="50%">
	<tr>
		<td>File 
		<input type="file" name="excel" class="form-control"></td>
	</tr>
</table>
<button class="btn btn-primary" name="submit">Thêm</button>
</form>
@endsection