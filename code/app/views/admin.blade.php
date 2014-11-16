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
	
	<br>
	<div style="background-color:white">
		<div class="container">
        <div class="row">
        	<div style="margin-left:20px;"><h1>Admin Panel</h1></div>
       	 	<div align="center">
           		 <div class="box" border="20" >
					<div class="container">

						<div class="col-md-6">
							<br><br>
							<img class="img-circle" src ="customer.png" >
							<br><br><br>
							<a href="/addCustomer"><button type="button" class="btn btn-primary btn-lg active">Add Customer</button></a>
							<br><br><br>
						</div>
						<div class="col-md-6">
							<br><br>
							<img class="img-circle" border="50" src ="staff.png" >
							<br><br><br>
							<a href="/addStaff"><button type="button" class="btn btn-primary btn-lg active">Add Staff</button></a>
							<br><br><br>
						</div>
						<div class="col-md-6">
							<br><br>
							<img class="img-circle" src ="edit.jpg" >
							<br><br><br>
							<a href="/editCustomer"><button type="button" class="btn btn-primary btn-lg active">Edit Customer</button></a>
							<br><br><br>
						</div>
						<div class="col-md-6">
							<br><br>
							<img class="img-circle" border="50" src ="edit.jpg" >
							<br><br><br>
							<a href="/editStaff"><button type="button" class="btn btn-primary btn-lg active">Edit Staff</button></a>
							<br><br><br>
						</div>
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