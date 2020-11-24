@extends('admin/index')
@section('conten_3_2')
    <form method="post" action="{{ route('quan_ly.sua_lop_hoc_xu_ly', ['ma_lop'=>$lop_hoc[0]->ma_lop]) }}" class="form-nhap">
        {{ csrf_field() }}
        @foreach ($lop_hoc as $each)
        <div class="form-group">
            <label for="ma_lop">MÃ LỚP</label>
            <input type="text" class="form-control" id="ma_lop" name="ma_lop" value="{{ $each->ma_lop }}" readonly>
        </div>
        <div class="form-group">
            <label for="ma_khoa">TÊN KHÓA</label>
            <select multiple class="form-control" id="ma_khoa" name="ma_khoa">
                @foreach ($khoa as $each_khoa)  
                @if ($each->ma_khoa == $each_khoa->ma_khoa)
                    <option value="{{$each_khoa->ma_khoa}}" selected>{{ $each_khoa->ten_khoa }}</option>
                @else
                    <option value="{{$each_khoa->ma_khoa}}">{{ $each_khoa->ten_khoa }}</option>
                @endif
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="ma_nganh">TÊN NGÀNH</label>
            <select multiple class="form-control" id="ma_nganh" name="ma_nganh">
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
            <label for="ten_lop">TÊN LỚP</label>
            <input type="text" class="form-control" id="ten_lop" name="ten_lop" value="{{ $each->ten_lop }}">
        </div>
        <button type="submit" class="btn btn-primary">EDIT</button>
        @endforeach
    </form>


@endsection