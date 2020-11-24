@extends('admin/index')
@section('conten')
@if (session('alert'))
<section class="alert alert-success">{{session('alert')}}</section>

@endif 

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
    
    <div class="123"><a class="btn btn-danger btn-xs" href="{{ route('quan_ly.them_sinh_vien_excel')}}">THÊM BẰNG EXCEL</a><br></div>
	<table class="table table-borderless table-data3">
    <thead>
        <tr>
			<th>CODE</th>
            <th>TÊN SINH VIÊN</th>
            <th>EMAIL</th>
            <th>TÊN LỚP</th>
            <th>ĐỊA CHỈ</th>
            <th>PHONE</th>
            <th>NGÀY SINH</th>
            <th>GIỚI TÍNH </th>
            <th>PASSWORD</th>
            <td><a class="btn btn-danger btn-xs" href="{{ route('quan_ly.them_sinh_vien')}}">THÊM SINH VIÊN</a><br></td>
			
		</tr>
    </thead>
		@foreach ($sinh_vien as $each) 
	<tbody>	
		<tr>
			<td>{{ $each->ma_sinh_vien }}</td>
            <td>{{ $each->ten_sinh_vien }}</td>
            <td>{{ $each->email }}</td>
            <td>{{ $each->ten_lop }}</td>
            <td>{{ $each->dia_chi }}</td>
            <td>{{ $each->sdt }}</td>
            <td>{{ $each->ngay_sinh }}</td>
            <td> 
                @if ($each->gioi_tinh==1)
                    <p>NAM</p>
                @else
                   <p>NỮ</p>
                @endif
            </td>
            <td>{{ $each->password }}</td>
            <td><a class="btn btn-info btn-xs" href="{{ route('quan_ly.sua_sinh_vien', ['ma_sinh_vien'=>$each->ma_sinh_vien]) }}"><span class="glyphicon glyphicon-edit">EDIT</span></a></td>
        </tr>
    </tbody>    
		@endforeach
        
        
    </table>
    {{ $sinh_vien->links() }}
</body>
</html>
@endsection