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
						<form action="{{ url('/editRoomComplete') }}" method="post">

							<?php
							$room = new Room();
							$room->getRoom($roomid);
							?>
							<h3>Room : {{$room->getRoomNumber()}}</h3>
							<fieldset>
									<div class="form-group">
										<br><br>
										<label for="text" class="col-md-2 control-label">price</label>
										<div class="col-md-9">
											<input type="text" class="form-control" name="price" value="{{$room->getPrice()}}">
										</div>
									</div>
									<div class="form-group">
										<br><br>
										<label for="text" class="col-md-2 control-label">bed</label>
										<div class="col-md-9">
											<input type="text" class="form-control" name="bed"  value="{{$room->getBed()}}">
										</div>
									</div>
									<div class="form-group">
										<br><br>
										<label for="text" class="col-md-2 control-label">type </label>
										<div class="col-md-9">
											<input type="text" class="form-control" name="roomType" value="{{$room->getRoomType()}}">
										</div>
									</div>
							<br><br><input type="radio" name="roomID" value="{{$roomid}}" checked>
							<br><br>
							<button type="submit" class="btn btn-primary btn-lg active">submit</button><br><br>
							</fieldset>
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