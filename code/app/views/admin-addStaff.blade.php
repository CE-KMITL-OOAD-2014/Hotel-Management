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
					<center>
						<form action="{{ url('/addStaff') }}" method="post">
							<fieldset>
                  				<div class="form-group">
                  					<br><br>
                  					<label for="text" class="col-md-2 control-label">usename</label>
                   						<div class="col-md-9">
											<input type="text" class="form-control" name="username" placeholder="usename" required="" autofocus="">
										</div>
								</div>
								<div class="form-group">
									<br><br>
									<label for="text" class="col-md-2 control-label">password</label>
                   						<div class="col-md-9">
											<input type="password" class="form-control" name="password" placeholder="upassword" required="" autofocus="">
										</div>
								</div>
								<div class="form-group">
									<br><br>
									<label for="text" class="col-md-2 control-label">retype password</label>
                   						<div class="col-md-9">
											<input type="password" class="form-control" name="retypepassword" placeholder="retypepassword" required="" autofocus="">
										</div>
								</div>
							<!-- ตรงนี้ลีเอาใส่ไว้เป็น dropdown นะ ดูใน bootstrap -->
							
                  			<div class="form-group">
                  				<br><br>
                    			<label class="col-md-2 control-label">role</label>
                    				<div class="col-md-9">
                      					<select class="form-control" name="role" id="role">
						            		<option value="manager" check>manager</option>
						            		<option value="receptionist">receptionist</option>
						            		<option value="kitchen">kitchen</option>
						            		<option value="waiter">waiter</option>
						            		<option value="maid">maid</option>           
					          			</select>
                    				</div>
                  				</div>

							
							<!---->
							<div class="form-group">
									<br><br>
									<label for="text" class="col-md-2 control-label">staff ID</label>
                   						<div class="col-md-9">
											<input type="staffID" class="form-control" name="staffID" placeholder="staff ID" required="" autofocus="">
										</div>
								</div>
							<div class="form-group">
									<br><br>
									<label for="text" class="col-md-2 control-label">name</label>
                   						<div class="col-md-9">
											<input type="name" class="form-control" name="name" placeholder="name" required="" autofocus="">
										</div>
								</div>
							<div class="form-group">
									<br><br>
									<label for="text" class="col-md-2 control-label">ID number</label>
                   						<div class="col-md-9">
											<input type="ID number" class="form-control" name="IDnumber" placeholder="ID number" required="" autofocus="">
										</div>
								</div>

							<div class="form-group">
									<br><br>
									<label for="text" class="col-md-2 control-label">location</label>
                   						<div class="col-md-9">
											<input type="location" class="form-control" name="location" placeholder="location" required="" autofocus="">
										</div>
								</div>

							<div class="form-group">
									<br><br>
									<label for="text" class="col-md-2 control-label">email</label>
                   						<div class="col-md-9">
											<input type="email" class="form-control" name="email" placeholder="email" required="" autofocus="">
										</div>
								</div>
							<div class="form-group">
									<br><br>
									<label for="text" class="col-md-2 control-label">tel</label>
                   						<div class="col-md-9">
											<input type="tel" class="form-control" name="tel" placeholder="tel" required="" autofocus="">
										</div>
								</div>

							<br><br>
							<button type="submit"  class="btn btn-primary btn-lg active">submit</button>
							<br><br>
						</form>
						</fieldset>
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