@extends('admin/index')
@section('conten_3_1')

 <div class="card">
    <div class="card-header">
        THÊM ĐIỂM
    </div>
    <div class="card-body card-block">
        <form action="{{ route('quan_ly.them_diem_xu_ly')}}" method="post" class="form-horizontal">
            {{ csrf_field() }}
            
            <div class="row form-group">
                <div class="col col-sm-5">
                    <label for="input-normal" class=" form-control-label">Tên Sinh Viên</label>
                </div>
                <div class="col col-sm-6">
                    <select name="ma_sinh_vien" id=""> <br>
                        @foreach ($sinh_vien as $each_sinh_vien)
                            <option value="{{$each_sinh_vien->ma_sinh_vien}}" selected>{{ $each_sinh_vien->ten_sinh_vien }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-sm-5">
                    <label for="input-normal" class=" form-control-label">Tên Môn</label>
                </div>
                <div class="col col-sm-6">
                    <select name="ma_mon" id=""> <br>
                        @foreach ($mon_hoc as $each_mon)
                            <option value="{{$each_mon->ma_mon}}" selected>{{ $each_mon->ten_mon }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-sm-5">
                    <label for="input-normal" class=" form-control-label">Điểm Lần 1</label>
                </div>
                <div class="col col-sm-6">
                    <input type="text" id="input-normal" name="diem_lan_1" placeholder="ĐIỂM LẦN 1" class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-sm-5">
                    <label for="input-normal" class=" form-control-label">Điểm Lần 2</label>
                </div>
                <div class="col col-sm-6">
                    <input type="text" id="input-normal" name="diem_lan_2" placeholder="Điểm Lần 2" class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-sm-5">
                    <label for="input-normal" class=" form-control-label">Hình Thức Điểm</label>
                </div>
                <div class="col col-sm-6">
                    <select name="kieu_diem" id=""> <br>
                        <option value="1">Lý Thuyết</option>
                        <option value="0">Thực Hành</option>
                    </select>       
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary btn-sm">
                    <i class="fa fa-dot-circle-o"></i> ADD
                </button>
                <button type="reset" class="btn btn-danger btn-sm">
                    <i class="fa fa-ban"></i> Reset
                </button>
            </div>
        </form>
    </div>
    
</div>
@endsection

