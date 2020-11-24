@extends('admin/index')
@section('conten_4')
    

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<style>
		.table tbody tr td:hover{
			background-color:gainsboro;
			
		}
	</style>
</head>
<body>
	<table class="table table-borderless table-data3">
	<thead>
		<tr>
			<th>MÃ LỚP</th>
            <th>MÃ KHÓA</th>
            <th>MÃ NGÀNH</th>
            <th>TÊN LỚP</th>
            <th><a class="btn btn-danger btn-xs" href="{{ route('quan_ly.them_lop_hoc')}}">THÊM LỚP HỌC </a><br></th>
			
		</tr>
	</thead>
		@foreach ($lop_hoc as $each) 
	<tbody>
		<tr>
			<td>{{ $each->ma_lop }}</td>
            <td>{{ $each->ten_khoa }}</td>
            <td>{{ $each->ten_nganh }}</td>
            <td>{{ $each->ten_lop }}</td>
            <td><a class="btn btn-info btn-xs" href="{{ route('quan_ly.sua_lop_hoc', ['ma_lop'=>$each->ma_lop]) }}"><span class="glyphicon glyphicon-edit">EDIT</span></a></td>
            
        </tr>
	</tbody>
		@endforeach
        
        
	</table>
	{{ $lop_hoc->links() }}
</body>
</html>
@endsection