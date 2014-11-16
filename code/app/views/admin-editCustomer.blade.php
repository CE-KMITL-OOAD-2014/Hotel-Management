@extends('layoutAdmin')

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

<div style="background-color:white">
	<div class="container">
		<div class="row">
			<div style="margin-left:20px;"><h1>Edit Customer</h1></div><br>
			<div style="margin-left:60px;">
				<label class=" control-label">Select Room</label>
			</div>
			<div align="center">
				<div class="box" border="20" >
					<div class="container">
						<center>
							<form action="{{ url('/editCustomer') }}" method="post">


								<?php 
								$customerid = CustomerServiceDB::all();
								for($i=0;$i<count($customerid);$i++){
									$Customer = new CustomerService();
									$Customer->getCustomerService($customerid[$i]->userID);
									echo "<br><input type=\"radio\" name =\"userid\" value=\"".$Customer->getId()."\" checked>";
									echo ($i+1)." ".$Customer->getUsername()." ".$Customer->getRoom();
								}
								?>
								<br>
								<br>

								<fieldset>
									<div class="form-group">
										<br><br>
										<label class="col-md-2 control-label">role</label>
										<div class="col-md-9">
											<select class="form-control" name="action" id="action">
												<option value="edit" check>EDIT</option>
												<option value="del">DELETE</option>

											</select>
										</div>
									</div>
								</fieldset>
								<br><br>
								<button type="submit"  class="btn btn-primary btn-lg active">submit</button>
								<br><br>
							</form>

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