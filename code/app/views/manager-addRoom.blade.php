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
<h1>ADD ROOM</h1>
<div style="background-color:white">
	<div class="container">
		<div class="row">
			<div align="center">
				<div class="box" border="20" >
					<div class="container">
						<center>
							<form action="{{ url('/addRoom') }}" method="post">
								<fieldset>
									<div class="form-group">
										<br><br>
										<label for="text" class="col-md-2 control-label">room number</label>
										<div class="col-md-9">
											<input type="text" class="form-control" name="roomNumber" placeholder="roomNumber" required="" autofocus="">
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
										<label for="text" class="col-md-2 control-label">bed</label>
										<div class="col-md-9">
											<input type="text" class="form-control" name="bed" placeholder="bed" required="" autofocus="">
										</div>
									</div>

									<div class="form-group">
										<br><br>
										<label class="col-md-2 control-label">room type</label>
										<div class="col-md-9">
											<select class="form-control" name="roomType" id="roomType">
												<option value="big" check>big</option>
												<option value="medium">medium</option>
												<option value="small">small</option>
												          
											</select>
										</div>
									</div>
									<div class="form-group">
										<br><br>
										<label class="col-md-2 control-label">available </label>
										<div class="col-md-9">
											<select class="form-control" name="available" id="roomType">
												<option value="1" check>ว่าง </option>
												<option value="0">ไม่ว่าง</option>
												          
											</select>
										</div>
									</div>
									
									<br><br>
									<button type="submit"  class="btn btn-primary btn-lg active">submit</button>
									<br><br>
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