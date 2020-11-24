@extends('admin/index')
@section('conten_1')
    

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
			<th>MÃ NGÀNH</th>
            <th>TÊN NGÀNH</th>
            <th><a class="btn btn-danger btn-xs"href="{{ route('quan_ly.them_nganh')}}">THÊM NGÀNH </a><br></th>
			
		</tr>
    </thead> 
		@foreach ($nganh as $each) 
	<tbody>	
		<tr>
			<td>{{ $each->ma_nganh }}</td>
            <td>{{ $each->ten_nganh }}</td>
            <td><a class="btn btn-info btn-xs" href="{{ route('quan_ly.sua_nganh', ['ma_nganh'=>$each->ma_nganh]) }}"><span class="glyphicon glyphicon-edit">EDIT</span></a>
            </td>
	</tbody>        
        </tr>
        
		@endforeach
        
    
	</table>
</body>
</html>
@endsection