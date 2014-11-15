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
<h1>Receptionist</h1>
<br>
<br>
<div style="background-color:white">
	<div class="container">
		<div class="row">
			<div align="center">
				<div class="box" border="20" >
					<div class="container">
						<br><br><br>
					<div class="col-md-4">
							<br><br>
							
						<img class="img-circle" src ="check.jpg" >
						<br><br><br>
						<a href="/checkin"><button  type="button" class="btn btn-primary btn-lg active">checkin</button></a>
						<br><br><br>
						</div>
						<div class="col-md-4">
							<br><br>
							
						<img class="img-circle" src ="checkout.jpg" >
						<br><br><br>
						<a href="/checkout"><button  type="button" class="btn btn-primary btn-lg active">checkout</button></a>
						<br><br><br>
						</div>
						<div class="col-md-4">
							<br><br>
							
						<img class="img-circle" src ="combill.png" >
						<br><br><br>
						<a href="/pay"><button  type="button" class="btn btn-primary btn-lg active">Complete Payment</button></a>
						<br><br><br>
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