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
<h1>Edit Staff</h1>
<form action="{{ url('/editStaffComplete') }}" method="post">
	<div style="background-color:white">
		<div class="container">
			<div class="row">
				<div align="center">
					<div class="box" border="20" >
						<div class="container">
							<center>
								<form action="{{ url('/addStaff') }}" method="post">
									<?php
									$staff = new Staff();
									$staff->getStaff($userid);
									?>
									<fieldset>
										<div class="form-group">
											<br><br>
											<label for="text" class="col-md-2 control-label">usename</label>
											<div class="col-md-8">
												<input type="text" class="form-control" name="username" value="{{$staff->getUsername()}}">
											</div>
										</div>
											<div class="form-group">
												<br><br>
												<label for="text" class="col-md-2 control-label">password</label>
												<div class="col-md-8">
													<input type="text" class="form-control" name="password" value="{{$staff->getpassword()}}">
												</div>
											</div>
											<div class="form-group">
												<br><br>
												<label for="text" class="col-md-2 control-label">name</label>
												<div class="col-md-8">
													<input type="text" class="form-control" name="name" value="{{$staff->getname()}}">
												</div>
											</div>
											<div class="form-group">
												<br><br>
												<label for="text" class="col-md-2 control-label">name</label>
												<div class="col-md-8">
													<input type="text" class="form-control" name="staffID" value="{{$staff->getStaffID()}}">
												</div>
											</div>
											<div class="form-group">
												<br><br>
												<label for="text" class="col-md-2 control-label">ID number</label>
												<div class="col-md-8">
													<input type="text" class="form-control" name="IDnumber" value="{{$staff->getStaffID()}}">
												</div>
											</div>
											<div class="form-group">
												<br><br>
												<label for="text" class="col-md-2 control-label">location</label>
												<div class="col-md-8">
													<input type="text" class="form-control" name="location" value="{{$staff->getLocation()}}">
												</div>
											</div>
											<div class="form-group">
												<br><br>
												<label for="text" class="col-md-2 control-label">Tel</label>
												<div class="col-md-8">
													<input type="text" class="form-control" name="tel" value="{{$staff->getTel()}}">
												</div>
											</div>
											<div class="form-group">
												<br><br>
												<label for="text" class="col-md-2 control-label">email</label>
												<div class="col-md-8">
													<input type="text" class="form-control" name="email" value="{{$staff->getEmail()}}">
												</div>
											</div>
											<br><br><input type="radio" name="userID" value="{{$userid}}" checked>
											<br><br>
											<button type="submit"class="btn btn-primary btn-lg active">submit</button>
											<br><br><br>
										</form>
									</fieldset>
							</form>
						</center>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</form>


<form id="myForm"action="{{ url('/logout') }}" method="post">
</form>
<script type="text/javascript">
	function myFunction() {
		document.getElementById("myForm").submit();
	}
</script>
@stop