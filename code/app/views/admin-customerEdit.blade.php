@extends('layoutAdmin')

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

<div style="background-color:white">
	<div class="container">
		<div class="row">
		<div style="margin-left:20px;"><h1>Edit Customer</h1></div>
			<div align="center">
				<div class="box" border="20" >
					<div class="container">
						<center>
							<form action="{{ url('/editCustomerComplete') }}" method="post">

								<?php
								$customer = new CustomerService();
								$customer->getCustomerService($userid);
								?>
								<fieldset>
                  				<div class="form-group">
                  					<br><br>
                  					<label for="text" class="col-md-2 control-label">Usename</label>
                   						<div class="col-md-9">
											<input type="text" class="form-control" name="username"  value="{{$customer->getUsername()}}">
										</div>
								</div>
								<div class="form-group">
                  					<br><br>
                  					<label for="text" class="col-md-2 control-label">Password</label>
                   						<div class="col-md-9">
											<input type="text" class="form-control" name="password"  value="{{$customer->getpassword()}}">
										</div>
								</div>
								<div class="form-group">
                  					<br><br>
                  					<label for="text" class="col-md-2 control-label">Room</label>
                   						<div class="col-md-9">
											<input type="text" class="form-control" name="room"  value="{{$customer->getRoom()}}">
										</div>
								</div>

								<br><br><input type="radio" name="userID" value="{{$userid}}" checked>
								<br><br>
								<button type="submit" class="btn btn-primary btn-lg active">submit</button><br><br>
								</fieldset>
							</form>
						</center>
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