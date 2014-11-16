@extends('layoutKitchen')

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
<h1>Kitchen</h1>
<br>
<br>
<div style="background-color:white">
	<div class="container">
		<div class="row">
			<div align="center">
				<div class="box" border="20" >
					<div class="container">
						<center>
							<div class="col-md-4">
								<br><br><br>
								<img class="img-circle" src ="meal.jpg" >
								<br><br><br>
								<a href="/checkOrder"><button type="button" class="btn btn-danger btn-lg active">check Order</button></a>
								<br><br><br>
							</div>
						</center>
						<center>
							<div class="col-md-4" >
								<br><br><br>
								<img class="img-circle" src ="order.jpg" >
								<br><br><br>
								<a href="/addMeal"><button type="button" class="btn btn-danger btn-lg active">Add Meal</button></a>
								<br><br><br>
							</div>
						</center>
						<center>
							<div class="col-md-4" >
								<br><br><br>
								<img class="img-circle" src ="edit.jpg" >
								<br><br><br>
								<a href="/editMeal"><button type="button" class="btn btn-danger btn-lg active">Edit Meal</button></a>
								<br><br><br>
							</div>
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
