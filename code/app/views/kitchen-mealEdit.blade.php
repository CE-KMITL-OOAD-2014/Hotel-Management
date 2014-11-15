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
			<div align="center">
				<div class="box" border="20" >
					<div class="container">
						<center>
							<form action="{{ url('/editMealComplete') }}" method="post">
								<?php
								$meal = new Meal();
								$meal->getMeal($mealid);
								?>
								<fieldset>
									<div class="form-group">
										<br><br>
										<label for="text" class="col-md-2 control-label">name</label>
										<div class="col-md-9">
											<input type="text" class="form-control" name="name" value="{{$meal->getName()}}" >
										</div>
									</div>
									<div class="form-group">
										<br><br>
										<label for="text" class="col-md-2 control-label">Description</label>
										<div class="col-md-9">
											<input type="text" class="form-control" name="desc" value="{{$meal->getDesc()}}" >
										</div>
									</div>
									<div class="form-group">
										<br><br>
										<label for="text" class="col-md-2 control-label">price</label>
										<div class="col-md-9">
											<input type="text" class="form-control" name="price" value="{{$meal->getPrice()}}">
										</div>
									</div>
									<br><br><input type="radio" name="mealID" value="{{$mealid}}" checked>
									<br><br>
									<button type="submit" class="btn btn-danger btn-lg active">submit</button><br><br><br>
								</form>
							</fieldset>
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