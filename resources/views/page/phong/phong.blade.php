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
                            <strong class="card-title">DANH SÁCH PHÒNG</strong>
                        </div>
                        <div class="card-body">
                  <table id="mydata" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>Mã phòng</th>
                        <th>Tên phòng</th>
                        <th>Sửa</th>
                        <th>Xóa</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($phong as $p)
                      <tr>
                        <td>{{$p->id}}</td>
                        <td>{{$p->tenphong}}</td>
                        
                        <td><a href="phong/suaphong/{{$p->id}}"><i class="fa fa-edit"></i>  Sửa</a></td>
                        <td><a href="phong/xoaphong/{{$p->id}}"><i class="fa fa-times-circle"></i>  Xóa</a></td>
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