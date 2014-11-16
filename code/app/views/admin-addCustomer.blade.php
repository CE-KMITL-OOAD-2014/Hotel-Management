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
       		 <div style="margin-left:20px;"><h1>ADD USER</h1></div>
       	 		<div align="center">
           		 	<div class="box" border="20" >
						<div class="container">
							<div class="col-md-11">
								<form action="{{ url('/addCustomer') }}" method="post">
									<fieldset>
									<div class="form-group">
										<br><br>
										<label for="text" class="col-md-3 control-label">usename</label>
										<div class="col-md-9">
											<input type="text" class="form-control" name="username" placeholder="usename" required="" autofocus="">
										</div>
									</div>
									<div class="form-group">
										<br><br>
										<label for="text" class="col-md-3 control-label">password</label>
										<div class="col-md-9">
											<input type="password" class="form-control" name="password" placeholder="password" required="" autofocus="">
										</div>
									</div>
									<div class="form-group">
										<br><br>
										<label for="text" class="col-md-3 control-label">retype password</label>
										<div class="col-md-9">
											<input type="password" class="form-control" name="retypepassword" placeholder="retypepassword" required="" autofocus="">
										</div>
									</div>
									<div class="form-group">
										<br><br>
										<label for="text" class="col-md-3 control-label">room</label>
										<div class="col-md-9">
											<input type="text" class="form-control" name="room" placeholder="room" required="" autofocus="">
										</div>
									</div>

									<br><br>
									<button type="submit"  class="btn btn-primary btn-lg active">submit</button>
									<br><br>
									</fieldset>
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