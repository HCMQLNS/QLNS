@extends('master')
@section('content')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Thêm Phòng</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li class="active"><button type="button" class="btn btn-danger btn-xl">
            <i class="fa fa-ban"></i> Trở về
        </button></li>
                </ol>
            </div>
        </div>
    </div>
</div>


 <div class="col-lg-12">
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
		<form action="" method="post" enctype="multipart/form-data" accept-charset="utf-8">
			<input type="hidden" name="_token" value="{{csrf_token()}}">
	  		<div class="card-body card-block">
		

		  	
		    
		    <div class="form-group"><label for="company" class=" form-control-label">Tên Phòng</label>
		    	<input type="text" id="txtTenPhong" name="txtTenPhong" placeholder="Nhập tên phòng" class="form-control">
		    </div>
		   
		    
	</div>

	</div>
</div>


	<div class="col-lg-6">
		<button type="submit" class="btn btn-primary btn-xl">
			<i class="fa fa-dot-circle-o"></i> Xác Nhận
		</button>
		<button type="button" class="btn btn-danger btn-xl">
            <i class="fa fa-ban"></i> Trở về
        </button>
	</div>
</form>
@endsection