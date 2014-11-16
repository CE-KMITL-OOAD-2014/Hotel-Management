@extends('layoutManager')

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
	<h1>Manager Panel</h1>
	<br>
	<br>
	<div style="background-color:white">
		<div class="container">
        <div class="row">
       	 	<div align="center">
           		 <div class="box" border="20" >
					<div class="container">
						<div class="col-md-6">
							<br><br>
							<img class="img-circle" src ="room.jpg" >
							<br><br><br>
							<a href="/addRoom"><button  type="button" class="btn btn-primary btn-lg active">Add Room</button></a>
							<br><br><br>
						</div>
						<div class="col-md-6">
							<br><br>
							<img class="img-circle" src ="edit.jpg" >
							<br><br><br>
							<a href="/editRoom"><button  type="button" class="btn btn-primary btn-lg active">Edit Room</button></a>
							<br><br><br>
						</div>
						<div class="col-md-6">
							<br><br>
							<img class="img-circle" src ="checkOr.jpg" >
							<br><br><br>
							<a href="/checkReq"><button  type="button" class="btn btn-primary btn-lg active">Check Req</button></a>
							<br><br><br>
						</div>
						<div class="col-md-6">
							<br><br>
							<img class="img-circle" src ="bill.png" >
							<br><br><br>
							<a href="/checkBill"><button  type="button" class="btn btn-primary btn-lg active">Load All Bill</button></a>
							<br><br><br>
						</div>
						<div class="col-md-6">
							<br><br>
							<img class="img-circle" src ="bill.png" >
							<br><br><br>
							<a href="/checkCus"><button  type="button" class="btn btn-primary btn-lg active">Load All Customer</button></a>
							<br><br><br>
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