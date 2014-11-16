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
<h1>Order Queue</h1>
<div style="background-color:white">
	<div class="container">
		<div class="row">
			<div align="center">
				<div class="box">
					<div class="container">
						<div class="col-md-11">
							<center></center>
							<form action="{{ url('/acceptOrder') }}" method="post">

								<?php 
								$req = RequestDB::where('type','=',2)->where('state','=',0)->get();
								for($i = 0 ; $i < count($req) ; $i++){
									$meal = new Meal();
									$meal->getMeal($req[$i]->mealID);
									echo "<br><input type='radio' name='reqID' value='".$req[$i]->id."'> ".$req[$i]->room." : ".$meal->getName();
								}
								?>
								<br><br>
								<button type="submit" class="btn btn-danger btn-lg active">submit</button>
								<br><br>
							</form>
						</center>
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