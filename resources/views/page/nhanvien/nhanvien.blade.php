@extends('master')
@section('content')
<div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                <div class="col-md-12">
                    <div class="card">
                      @if(count($errors) > 0)
                        <div class="alert alert-danger">
                          @foreach($errors->all() as $err)
                            {{$err}}<br>
                          @endforeach
                        </div>
                      @endif
                      @if(session('thongbao'))
                        <div class="alert alert-success">
                          {{session('thongbao')}}
                        </div>
                      @endif
                        <div class="card-header">
                            <strong class="card-title">DANH SÁCH NHÂN VIÊN</strong>
                        </div>
                        <div class="card-body">
                  <table id="mydata" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>Mã NV</th>
                        <th>Họ tên</th>
                        <th>Giới tính</th>
                        <th>email</th>
                        <th>Chức vụ</th>
                        <th>Phòng ban</th>
                        <th>Sửa</th>
                        <th>Xóa</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($nhanVien as $nv)
                      <tr>
                        <td><a href="nhanvien/profile/{{$nv->id}}">{{$nv->id}}</a></td>
                        <td>{{$nv->hoten}}</td>
                        <td>
                          @if($nv->gioitinh == 0) Nữ @else Nam @endif 
                        </td>
                        <td>{{$nv->email}}</td>
                        <td>{{$nv->chucvu->tencv}}</td>
                        <td></td>
                        <td><a href="nhanvien/suanhanvien/{{$nv->id}}"><i class="fa fa-edit"></i>  Sửa</a></td>
                        <td><a href="nhanvien/xoanhanvien/{{$nv->id}}"><i class="fa fa-times-circle"></i>  Xóa</a></td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                        </div>
                    </div>
                </div>
                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
@endsection