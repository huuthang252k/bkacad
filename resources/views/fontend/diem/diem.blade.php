@extends('fontend/index')
@section('conten')
    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Điểm</title>
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<body>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">TÊN MÔN</th>
            <th scope="col">ĐIỂM LẦN 1</th>
            <th scope="col">ĐIỂM LẦN 2</th>
            <th scope="col">KIỂU ĐIỂM</th>
            

           
          </tr>
        </thead>
        <tbody>
            @foreach ($diem as $each)
          <tr>
            
            <td> {{ $each->ten_mon }} </td>
            <td> {{ $each->diem_lan_1 }} </td>
            <td> {{ $each->diem_lan_2 }} </td>
            <td>
              @if ($each->kieu_diem==0)
              <p>lý thuyết</p>
          @elseif($each->kieu_diem==1)
              <p>thực hành</p>
          @endif
            </td>
          </tr>
          
          
            @endforeach
        </tbody>
      </table>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</html>
@endsection
