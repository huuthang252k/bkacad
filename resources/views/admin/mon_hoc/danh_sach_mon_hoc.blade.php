@extends('admin/index')
@section('conten_5')
    

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
			<th>MÃ MÔN</th>
            <th>TÊN NGÀNH</th>
            <th>TÊN MÔN</th>
            <th><a class="btn btn-danger btn-xs"href="{{ route('quan_ly.them_mon')}}">THÊM MÔN HỌC </a><br></th>
			
		</tr>
    </thead>
		@foreach ($mon_hoc as $each) 
	<tbody>	
		<tr>
			<td>{{ $each->ma_mon }}</td>
            <td>{{ $each->ten_nganh }}</td>
            <td>{{ $each->ten_mon }}</td>
            <td><a class="btn btn-info btn-xs" href="{{ route('quan_ly.sua_mon', ['ma_mon'=>$each->ma_mon]) }}"><span class="glyphicon glyphicon-edit">EDIT</span></a></td>
            
        </tr>
    </tbody>   
		@endforeach
        
     
	</table>
</body>
</html>
@endsection