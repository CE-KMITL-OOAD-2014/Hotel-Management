@extends('layoutCustomer')

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
<br><br>
<h1>Check IN</h1><br><br>
<div style="background-color:white">
	<div class="container">
		<div class="row">
			<div align="center">
				<div class="box" border="20" >
					<div class="container">
						<center>
							<form action="{{ url('/addMealReq') }}" method="post">
								<div align = "left">
								<h2>Chose food from list below :</h2>

								<?php 
								$meal = MealDB::all();
								for($i = 0 ; $i < count($meal) ; $i++){
			//echo "<br><input type='radio' name='mealNumber' value='".$meal[$i]->id."'>".$meal[$i]->name.+" "+$meal[$i]->desc;
									echo "<br><input type='radio' name='mealNumber' value='".$meal[$i]->id."'>";

									echo $meal[$i]->name." ".$meal[$i]->price." ";
								}
								?>	
								<br><br><br>
								<div align="center"><button type="submit" class="btn btn-primary btn-lg active">submit</button><br><br><br></div>

								
								</div>
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