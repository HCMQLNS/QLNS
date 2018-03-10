@extends('master')
@section('content')
<div class="col-lg-6">
	<div class="card">
		<div class="card-body"><iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
			<h4 class="mb-3">Bar chart </h4>
			<canvas id="barChart" width="678" height="338" style="display: block; height: 271px; width: 543px;"></canvas>
		</div>
	</div>
</div>

@endsection