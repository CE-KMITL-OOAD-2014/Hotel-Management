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
<h1>Customer Service</h1>
<br>
<br>
<br>
<div style="background-color:white">
	<div class="container">
		<div class="row">
			<div align="center">
				<div class="box" border="20" >
					<div class="container">
						<center>

							<div class="col-md-6">
								<br><br>
								<img class="img-circle" src ="clean.jpg" >
								<br><br><br>
								<?php 
								$user = unserialize(Session::get('user'));

								if($user->getCleanReqID()==0) echo "<a href=\"/addCleanReq\"><button>Cleaning Request</button></a>";
								$cleanId = $user->getCleanReqID();
								if($cleanId!=0){
									$tmp = RequestDB::find($cleanId);
									if($tmp->state>0){
										echo "<a href=\"/completeClean\"><button>Complete Clean</button></a>";
									}
								}	
								?>
								<br><br><br>
							</div>

							<div class="col-md-6">
								<br><br>
								<img class="img-circle" src ="FoodRe.png" >
								<br><br><br>
								<?php 
								if($user->getMealReqID()==0) echo "<a href=\"/addMealReq\"><button>Order food</button></a>";
								
								$mealId = $user->getMealReqID();
								if($mealId!=0){
									$tmp = RequestDB::find($mealId);
									if($tmp->state>0){
										echo "<a href=\"/completeOrder\"><button>Complete Order</button></a>";
									}
								}?>
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