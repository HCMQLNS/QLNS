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
					<option value="United States">United States</option>
					<option value="United Kingdom">United Kingdom</option>
					<option value="Afghanistan">Afghanistan</option>
					<option value="Aland Islands">Aland Islands</option>
					<option value="Albania">Albania</option>
					<option value="Algeria">Algeria</option>
					<option value="American Samoa">American Samoa</option>
					<option value="Andorra">Andorra</option>
					<option value="Angola">Angola</option>
					<option value="Anguilla">Anguilla</option>
					<option value="Antarctica">Antarctica</option>
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
				            <div class="card-body">
						      <table id="mydata" class="table table-striped table-bordered">
						        <thead>
						          <tr>
						            <th>Name</th>
						            <th>Ca Sáng</th>
						            <th>Ca Chiều</th>
						            <th>Trễ</th>
						          </tr>
						        </thead>
						        <tbody>
						          <tr>
						            <td>
						            	<?php echo "Nguyễn Văn A"; ?>
						            </td>
						            <td>
						            	<input type="checkbox" name="A">
						            </td>
						            <td>
						            	<input type="checkbox" name="B">
						            </td>
						            <td>
						            	<input type="checkbox" name="M">
						            </td>
						          </tr>
						          <tr>
						            <td>
						            	<?php echo "Nguyễn Văn B"; ?>
						            </td>
						            <td>
						            	<input type="checkbox" name="A">
						            </td>
						            <td>
						            	<input type="checkbox" name="B">
						            </td>
						            <td>
						            	<input type="checkbox" name="M">
						            </td>
						          </tr>
						          <tr>
						            <td>
						            	<?php echo "Nguyễn Văn C"; ?>
						            </td>
						            <td>
						            	<input type="checkbox" name="A">
						            </td>
						            <td>
						            	<input type="checkbox" name="B">
						            </td>
						            <td>
						            	<input type="checkbox" name="M">
						            </td>
						          </tr>
						        </tbody>
						      </table>
				            </div>
				        </div>
				    </div>
			    </div>
			</div><!-- .animated -->
		</div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->


    
</div>
@endsection