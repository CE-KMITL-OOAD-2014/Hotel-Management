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
<h1>Add Guest</h1>
<div style="background-color:white">
	<div class="container">
		<div class="row">
			<div align="center">
				<div class="box" border="20" >
					<div class="container">
						<div class="col-md-11">
							<form action="{{ url('/addGuest') }}" method="post">
							<fieldset>
                  				<div class="form-group">
                  					<br><br>
                  					<label for="text" class="col-md-2 control-label">Name</label>
                   						<div class="col-md-9">
											<input type="text" class="form-control" name="name" placeholder="name" required="" autofocus="">
										</div>
								</div>	
								<div class="form-group">
                  					<br><br>
                  					<label for="text" class="col-md-2 control-label">Surname</label>
                   						<div class="col-md-9">
											<input type="text" class="form-control" name="surname" placeholder="surname" required="" autofocus="">
										</div>
								</div>
								<div class="form-group">
                  					<br><br>
                  					<label for="text" class="col-md-2 control-label">National ID</label>
                   						<div class="col-md-9">
											<input type="text" class="form-control" name="nationalID" placeholder="nationalID" required="" autofocus="">
										</div>
								</div>	
								<div class="form-group">
                  					<br><br>
                  					<label for="text" class="col-md-2 control-label">Detail</label>
                   						<div class="col-md-9">
											<input type="text" class="form-control" name="detail" placeholder="detail" required="" autofocus="">
										</div>
								</div>	

								<br><br>
								<button type="submit"class="btn btn-primary btn-lg active">Submit</button><br><br>
							</form>
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
