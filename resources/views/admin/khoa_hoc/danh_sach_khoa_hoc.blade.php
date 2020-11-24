@extends('admin/index')
@section('conten_3')
    

<!DOCTYPE html>
<html>
<head>
	<title>Quản Lý Khóa</title>
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
		{{-- <h1>Quản lý Khóa</h1><br> --}}
	<thead>
		<tr>
			<th>MÃ KHÓA</th>
            <th>TÊN KHÓA</th>
            <th><a class="btn btn-danger btn-xs" href="{{ route('quan_ly.them_khoa')}}">THÊM KHÓA</a><br></th>
			
		</tr>
    </thead>
		@foreach ($khoa_hoc as $each) 
	<tbody>
		<tr>
			<td>{{ $each->ma_khoa }}</td>
            <td>{{ $each->ten_khoa }}</td>
            <td><a class="btn btn-info btn-xs" href="{{ route('quan_ly.sua_khoa', ['ma_khoa'=>$each->ma_khoa]) }}"> <span class="glyphicon glyphicon-edit">EDIT</span>	</a>
            </td>
        </tr>
    </tbody>	    
		@endforeach
      
	</table>
</body>
</html>
@endsection