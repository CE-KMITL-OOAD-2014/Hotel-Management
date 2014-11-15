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
<h1>Edit Room</h1>
<div style="background-color:white">
	<div class="container">
		<div class="row">
			<div align="center">
				<div class="box" border="20" >
					<div class="container">
						<form action="{{ url('/editRoom') }}" method="post">

							<?php 
							$roomid = RoomDB::all();
							for($i=0;$i<count($roomid);$i++){
								$room = new Room();
								$room->getRoom($roomid[$i]->id);
								echo "<br><input type=\"radio\" name =\"roomid\" value=\"".$room->getId()."\" checked>";
								echo ($i+1)." ".$room->getRoomNumber()." ".$room->getBed()." ".$room->getRoomType()." ".$room->getPrice();
							}
							?>
							<br><br>
							<div class="form-group">
                  				<br><br>
                    			<label class="col-md-1 control-label"></label>
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