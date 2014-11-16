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
<h1>Order Queue</h1>
<br>
<br>
<div style="background-color:white">
	<div class="container">
		<div class="row">
			<div align="center">
				<div class="box" border="20" >
					<div class="container">
						<form action="{{ url('/cancelReq') }}" method="post">

							<?php 
							$req = RequestDB::where('type','<',3)->where('state','=',0)->get();
							for($i = 0 ; $i < count($req) ; $i++){
								if($req[$i]->type == 2){
									$meal = new Meal();
									$meal->getMeal($req[$i]->mealID);
									echo "<br><input type='radio' name='reqID' value='".$req[$i]->id."'> Meal Request ".$req[$i]->room." : ".$meal->getName()." AT : ".$req[$i]->updated_at;;
								}
								else{
									echo "<br><input type='radio' name='reqID' value='".$req[$i]->id."'> Clean Request ".$req[$i]->room." AT : ".$req[$i]->updated_at;
								}
							}
							?>
							<br><br>
							<button type="submit" class="btn btn-primary btn-lg active">submit</button>
							<br><br>
						</form>
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