@extends('admin/index')
@section('conten_3_2')

<form method="post" action="{{ route('quan_ly.sua_mon_xu_ly', ['ma_mon'=>$mon_hoc[0]->ma_mon]) }}" class="form-nhap">
    {{ csrf_field() }}
    @foreach ($mon_hoc as $each) 
    <div class="form-group">
        <label for="ma_mon">MÃ MÔN</label>
        <input type="text" class="form-control" id="ma_mon" name="ma_mon" value="{{ $each->ma_mon }}" readonly>
    </div>
    <div class="form-group">
        <label for="ma_nganh">TÊN NGÀNH</label>
        <select  class="form-control" id="ma_nganh" name="ma_nganh">
        @foreach ($nganh as $each_nganh)
            @if ($each->ma_nganh == $each_nganh->ma_nganh)
                <option value="{{$each_nganh->ma_nganh}}" selected>{{ $each_nganh->ten_nganh }}</option>
            @else
                <option value="{{$each_nganh->ma_nganh}}">{{ $each_nganh->ten_nganh }}</option>
            @endif
        @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="ten_mon">TÊN MÔN</label>
        <input type="text" class="form-control" id="ten_mon" name="ten_mon" value="{{ $each->ten_mon }}">
    </div>
    <button type="submit" class="btn btn-primary">EDIT</button>
    @endforeach
</form>
@endsection