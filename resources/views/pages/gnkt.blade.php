@extends('layout')
@section('title','Ghi Nhận Thành Tich | Quản Lý Cây Gia Phả')
@section('content')
<div class="panel-body">
                
                @if(count($errors)>0)
                <div class="alert alert-danger">
                  @foreach($errors->all() as $err)
                  <strong>Cảnh Báo !</strong>{{$err}}</br>
                  @endforeach
                    </div>
                @endif
                    @if(Session::has('success'))
                    <div class="alert alert-success">
                    {{Session::get('success')}}
                    </div>
                @endif
                @if(Session::has('error'))
                    <div class="alert alert-danger">
                    {{Session::get('error')}}
                    </div>
                @endif
<form action="{{route('ghi-nhan-ket-thuc')}}" method="POST" role="form" enctype="multipart/form-data">
  {{@csrf_field()}}
  <h1>Người Vừa Mất</h1>
  <div class="box-body">
    <div class="row">
      <div class="col-md-6">
        <input type="hidden" value="logo.png" name="old_logo">
<label>Thành Viên Cũ </label>
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-user"></i></span>
          {{-- <input type="text" class="form-control" placeholder="Họ Và Tên" name="id_hoso" value="" > --}}
          <select name="id_hoso" id="" style="height:40px;" class="form-control">
              <option value="1">Lạc Long Quân</option>
              <option value="2">Phan Minh Ngọc</option>
              <option value="3">Phan Minh Huy</option>
              <option value="6">Phan Hà My</option>
              <option value="9">Trần Thanh Tú</option>            
           </select>
        </div>

        <label>Họ Và Tên </label>
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-user"></i></span>
          <input type="text" class="form-control" placeholder="Họ Và Tên" name="hoten" value="" >
        </div>

        <label>Nguyên Nhân</label>
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-globe"></i></span>
          <input type="text" class="form-control" placeholder="Nguyên nhân mất" name="nguyenhan" value="" >
        </div>
        <label>Thời gian mất</label>
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-birthday-cake"></i></span>
          <input type="date" class="form-control" placeholder="Ngày Mất" name="thoigianmat" value="" >
        </div>
        <label>Địa Điểm</label>
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-globe"></i></span>
          <input type="text" class="form-control" placeholder="Địa Điểm Mai Táng" name="diadiem" value="" >
        </div>

        <div class="col-md-12">
          <div class="pull-right box-tools">
            <button type="submit" class="btn btn-primary"><i class="fa fa-spinner fa-pulse"></i>Lưu</button>
          </div>
        </div>
      </div>
      <!-- /.row -->
    </div>
    <!-- /.box-body -->
</form>
@endsection