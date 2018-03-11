@extends('master')
@section('content')
<div class="container-fluid">
	<div id="right-panel" class="right-panel col-md-12" >
      
		<div class="card col-md-3">
			<div class="card-header" style="width: auto;">
				<strong class="card-title">Chọn Phòng</strong>
			</div>
			<div class="card-body">
				<select data-placeholder="Choose a Country..." class="standardSelect" tabindex="1">
					<option value=""></option>
					@foreach($phg as $p)		<!-- -->
						<option value="{{$p->tenphong}}">{{$p->tenphong}}</option>
					@endforeach					
				</select>
			</div>
		</div>
		<div class="content">
			<div class="animated fadeIn">
			    <div class="row">
				    <div class="col-md-12">
				        <div class="card">
				            <div class="card-header">
				                <strong class="card-title">Data Table</strong>
				            </div>
							
							@foreach($ca as $c)
								@if((date('H:i') > $c->tgbd ) && (date('H:i') < $c->tgkt))
									<div class="card-body">
									<form action="" method="post"> 
										<table id="mydata" class="table table-striped table-bordered">
											<thead>
											  <tr>
												<th>Name</th>										
												<th>Điểm danh</th>	
												<th></th>											
											  </tr>
											</thead>
											<tbody>
												@foreach($ns as $nv)
												<tr>											
													<td>
														{{$nv->hoten}}
													</td>												
													<td>
													@foreach($ca as $c)
														@if((date('H:i') > $c->tgbd ) && (date('H:i') < $c->tgkt))
															<input type="checkbox" name="{{$c->tenca}}"> Ca {{$c->tenca}}
														@endif
													@endforeach
													</td>
													<td></td>
												</tr>
												@endforeach
											</tbody>
										</table>
										<button type="submit" class="btn btn-primary btn-sm" style="margin-left:45%; margin-top:5%; width: 150px">
											<i class="fa fa-dot-circle-o"></i> Lưu
										</button>
									</form>
									</div>
								@endif
							@endforeach
				        </div>
				    </div>
			    </div>
			</div><!-- .animated -->
		</div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->


    
</div>
@endsection