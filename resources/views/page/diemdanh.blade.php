@extends('master')
@extends('diemdanh')
@section('content')
<div class="container-fluid">
	<h1>Điểm Danh</h1>
	<div>
	  <table width="460" border="0">
	    <tr>	               
	      <td width="40"><i><?php echo date("l"); ?>,</i></td>
	      <td width="176"><i><?php echo date("d/m/yy"); ?></i></td>
          
          <td width="126"><b>Mã Nhân Viên:</b></td>
	      <td width="100">&nbsp;</td>
        </tr>
      </table>
	
	</div>
	<div class="row">

		<div class="col-sm-9 col-md-12" style="background-color:pink; text-align:center;">
			<h3>Vui lòng nhấn đề điểm danh
			<input type="radio" name="submit" value="<?php
				if((date("H:i") > "05:30")&&(date("H:i") < "11:30"))
					echo "A";
				else if((date("H:i") > "12:30")&&(date("H:i") < "23:30"))
					echo "B";?>">
            </h3>			
		</div>
	</div>
		<div class="" style="width: 100%;height: 100%;">
        
			<div id="div1">
				<form action="" method="get" style="margin-left:30%; margin-top:5%;">
					<button type="submit">Ca Sáng</button>
				</form>
			</div>
			<div id="div2">
				<form action="" method="get" style="margin-left:30%; margin-top:5%;">
					<button type="submit">Ca Chiều</button>
				</form>
			</div>
		</div>
     
</div>

@endsection