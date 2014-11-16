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
		<form action="{{ url('/editStaff') }}" method="post">
			<div style="margin-left:20px;"><h1>Edit Staff</h1></div><br>
			<div style="margin-left:60px;">
				<label class=" control-label">Select Room</label>
				

				<?php 
					$staffid = StaffDB::all();
					for($i=0;$i<count($staffid);$i++){
						$staff = new Staff();
						$staff->getStaff($staffid[$i]->userID);
						echo "<br><input type=\"radio\" name =\"userid\" value=\"".$staff->getId()."\" checked>";
						echo ($i+1)." ".$staff->getName()." ".$staff->getRole()." ".$staff->getUsername();
					}
				?>
			</div>
			<br>
			<br>
			<div align="center">
				<div class="box" border="20" >
					<div class="container">
						
							<div class="form-group">
								<br><br>
								<label class="col-md-2 control-label">Role</label>
								<div class="col-md-9">
									<select class="form-control" name="action" id="action">
										<option value="edit" check>EDIT </option>
										<option value="del"> DELETE</option>
									</select>
								</div>
							</div>
							<br><br><br><button type="submit" class="btn btn-primary btn-lg active">submit</button><br><br><br>
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