@extends('admin/index')
@section('conten_1_2')

<form method="post" action="{{ route('quan_ly.sua_nganh_xu_ly', ['ma_nganh'=>$nganh[0]->ma_nganh]) }}" class="form-nhap">
    {{ csrf_field() }}
    @foreach ($nganh as $each)
    <div class="form-group">
        <label for="ma_nganh">MÃ NGÀNH</label>
        <input type="text" class="form-control" id="ma_nganh" name="ma_nganh" value="{{ $each->ma_nganh }}" readonly>
    </div>
    <div class="form-group">
        <label for="ten_nganh">TÊN NGÀNH</label>
        <input type="text" class="form-control" id="ten_nganh" name="ten_nganh" value="{{ $each->ten_nganh }}">
    </div>
    <button type="submit" class="btn btn-primary">EDIT</button>
    @endforeach
</form>
@endsection