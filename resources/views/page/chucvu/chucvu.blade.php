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
                            <strong class="card-title">DANH SÁCH CHỨC VỤ</strong>
                        </div>
                        <div class="card-body">
                  <table id="mydata" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>Mã chức vụ</th>
                        <th>Tên chức vụ</th>
                        <th>Sửa</th>
                        <th>Xóa</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($chucVu as $c)
                      <tr>
                        <td>{{$c->id}}</td>
                        <td>{{$c->tencv}}</td>
                        
                        
                        <td><a href="chucvu/suachucvu/{{$c->id}}"><i class="fa fa-edit"></i>  Sửa</a></td>
                        <td><a href="chucvu/xoachucvu/{{$c->id}}"><i class="fa fa-times-circle"></i>  Xóa</a></td>
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