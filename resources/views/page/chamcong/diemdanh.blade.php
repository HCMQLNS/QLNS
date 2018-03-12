@extends('master')
@section('content')
<div class="container-fluid">
	<h1>Điểm Danh</h1>
	<div>
	  <table width="560" border="0">
	    <tr>	               
	      <td width="40"><i><?php echo date("l"); ?>,</i></td>
	      <td width="176"><i><?php echo date("d/m/yy"); ?></i></td>
          
          <td width="126"><b>Tên Nhân Viên:</b></td>
	      <td width="200">{{$user->nhanvien->hoten}}</td>
        </tr>
      </table>
	
	</div>
	<div class="row">
		<div class="col-sm-9 col-md-12" style="background-color:pink; text-align:center;">
			<form action="" method="post">
				<input type="hidden" name="_token" value="{{csrf_token()}}">
			<h3>Vui lòng nhấn đề điểm danh
				@foreach($ca as $c)
					@if((date('H:i') > $c->tgbd ) && (date('H:i') < $c->tgkt))
						<input type="radio" name="radioDiemDanh" value="{{$c->id}}" >
					@endif
				@endforeach
            </h3>			
		</div>
	</div>
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
	<div class="" style="width: 100%;height: 100%; margin-left:30%; margin-top:5%;">
	
		<div id="div1">			
				<button type="submit">Ca Sáng</button>			
		</div>
		<div id="div2">			
				<button type="submit">Ca Chiều</button>
			</form>
		</div>
		<div id="div3">			
				<button type="submit">Ca Tối</button>
			</form>
		</div>
		<div id="div4">			
				<button type="submit">Ca Khuy</button>
			</form>
		</div>
	</div>
     
</div>

@include('diemdanh')	<!--Css and js-->
@endsection
