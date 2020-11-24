{{-- @extends('index')
@section('conten')
    

<!DOCTYPE html>
<html>
<head>
	<title></title>
	
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
            <th>TÊN SINH VIÊN</th>
            <th>TÊN LỚP</th>
            <th>TÊN MÔN</th>
            <th>ĐIỂM LẦN 1</th>
            <th>ĐIỂM LẦN 2</th>
            <th>HÌNH THỨC ĐIỂM</th> --}}
            {{-- <td><a class="btn btn-danger btn-xs" href="{{ route('quan_ly.them_diem')}}">THÊM ĐIỂM</a><br></td> --}}
			
		{{-- </tr>
        </thead>
		@foreach ($diem as $each) 
		<tbody>
		<tr>
            <td>{{ $each->ten_sinh_vien }}</td>
            <td>{{ $each->ten_lop }}</td>
            <td>{{ $each->ten_mon }}</td>
            <td>{{ $each->diem_lan_1 }}</td>
            <td>{{ $each->diem_lan_2 }}</td>
            <td> 
                @if (!is_null($each->kieu_diem))
                @if ($each->kieu_diem==1)
                    <p>Lý Thuyết</p>
                @else
                   <p>Thực Hành</p>
                @endif
                @endif
            </td>
            <td><a><span class="glyphicon glyphicon-edit">EDIT</span></a></td> --}}

{{--             
            <td><a href="{{ route('quan_ly.sua_sinh_vien', ['ma_sinh_vien'=>$each->ma_sinh_vien]) }}">EDIT</a></td>
        </tr>
        </tbody>
		@endforeach
        
        
	</table>
</body>
</html>
@endsection --}}
{{-- href="{{ route('quan_ly.sua_diem', ['ma_sinh_vien'=>$each->ma_sinh_vien],['ma_mon'=>$each->ma_mon   ]) }}" --}}

 