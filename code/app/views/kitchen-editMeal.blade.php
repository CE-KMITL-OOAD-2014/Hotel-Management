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
<h1>Edit Meal</h1>
<div style="background-color:white">
	<div class="container">
		<div class="row">
			
				<div class="box" border="20" >
					<div class="container">
						
							<form action="{{ url('/editMeal') }}" method="post">
								<?php 
								$mealid = MealDB::all();
								for($i=0;$i<count($mealid);$i++){
									$meal = new Meal();
									$meal->getMeal($mealid[$i]->id);
									echo "<br><input type=\"radio\" name =\"mealid\" value=\"".$meal->getId()."\" checked>";
									echo ($i+1)." ".$meal->getName()." ".$meal->getDesc()." ".$meal->getPrice();
								}
								?>
								<br>

								<div class="form-group">
           
                    			<label class="col-md-2 control-label">role</label>
                    				<div class="col-md-9">
                      					<select class="form-control" name="action" id="role">
						            		<option value="edit">EDIT </option>
						            		<option value="del">DELETE</option>
						            		          
					          			</select>
                    				</div>
                  				</div>
								<div align="center"> <br><br><button type="submit"class="btn btn-danger btn-lg active">submit</button><br><br></div>
							</form>
						
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