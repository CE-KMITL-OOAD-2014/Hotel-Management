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
<h1>KITCHEN - ADD MEAL</h1>
<div style="background-color:white">
	<div class="container">
		<div class="row">
			<div align="center">
				<div class="box" border="20" >
					<div class="container">
						<center>

							<form action="{{ url('/addMeal') }}" method="post">
								<fieldset>
									<div class="form-group">
										<br><br>
										<label for="text" class="col-md-2 control-label">name</label>
										<div class="col-md-9">
											<input type="text" class="form-control" name="name" placeholder="name" required="" autofocus="">
										</div>
									</div>
									<div class="form-group">
										<br><br>
										<label for="text" class="col-md-2 control-label">price</label>
										<div class="col-md-9">
											<input type="text" class="form-control" name="price" placeholder="price" required="" autofocus="">
										</div>
									</div>
									<div class="form-group">
										<br><br>
										<label for="text" class="col-md-2 control-label">description</label>
										<div class="col-md-9">
											<input type="text" class="form-control" name="desc" placeholder="description" required="" autofocus="">
										</div>
									</div>


									
									<br><br>
									<button type="submit"  class="btn btn-danger btn-lg active">submit</button>
									<br><br>
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