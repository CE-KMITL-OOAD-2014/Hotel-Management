@extends('layoutReceptionist')

@section('title')
Add User
@stop
@section('nav')
<li>

	<a onclick="myFunction()" type="submit" style="background-color:#FF8C00; color:white;">
		<span class="glyphicon glyphicon-user">logout
		</span>
	</a>
</li>
@stop

@section('body')

<h1>Check IN</h1>
<br>
<br>
<div style="background-color:white">
	<div class="container">
		<div class="row">
			<div align="center">
				<div class="box" border="20" >
					<div class="container">
						<div class="col-md-11">
							<br><br>
							<form action="{{ url('/checkin') }}" method="post">
								
								<div class="form-group">
									<br><br>
									<label for="text" class="col-md-3 control-label">How many guest</label>
									<div class="col-md-9">
										<input type="text" class="form-control" name="person" placeholder="person" required="" autofocus="">

									</div>
								</div>

								
								<label for="text" class="col-md-3 control-label">Select Room </label><br>
								<div class="col-md-3">
									<?php 
									$room = RoomDB::where('available','=',true)->get();
									for($i = 0 ; $i < count($room) ; $i++){
										echo "<br><input type='radio' name='roomNumber' value='".$room[$i]->roomNumber."'> ".$room[$i]->roomNumber;
									}
									?>	
									

									<br><br>
									
									<div align="center"><button type="submit" class="btn btn-primary btn-lg active">submit</button><br><br>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<form id="myForm"action="{{ url('/logout') }}" method="post">
</form>
<script type="text/javascript">
	function myFunction() {
		document.getElementById("myForm").submit();
	}
	

</script>

@stop