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
<h1>Give Customer Account</h1>
<div style="background-color:white">
	<div class="container">
		<div class="row">
			<div align="center">
				<div class="box" border="20" >
					<div class="container">
						<center>
							<?php
							$id = CustomerServiceRepository::getIDbyBill($billId);
							$customer = new CustomerService();
							$customer->getCustomerService($id);
							echo "<br><h2> Customer Room : ".$customer->getRoom()."</h2>";
							echo "<br><h3> Username : ".$customer->getUsername()."</h3>";
							echo "<br><h3> Password : ".$customer->getPassword()."</h3>";
							?>
							<br><br>
							<a href="{{url('/')}}"><button type="button"class="btn btn-primary btn-lg active">Exit</button></a><br><br>
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