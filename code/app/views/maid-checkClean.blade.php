@extends('layoutMaid')

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
<h1>Clean Queue</h1>
<div style="background-color:white">
	<div class="container">
		<div class="row">
			<div align="center">
				<div class="box" border="20" >
					<div class="container">
						<center>
							<form action="{{ url('/acceptClean') }}" method="post">
								<div class="col-md-6">
									<div align="center"><h3>Clean</h3></div>
									<br>
									<?php 
									$req = RequestDB::where('type','=',1)->where('state','=',0)->get();
									for($i = 0 ; $i < count($req) ; $i++){
										echo "<br><input type='radio' name='reqID' value='".$req[$i]->id."'> ".$req[$i]->room;
									}
									?>
									<br><br>
									<button type="submit"  class="btn btn-success btn-lg active">submit</button>
									<br><br>
								</div>
							</form>
							<div class="col-md-6">
								<div align="center"><h3>Clean For Checkout</h3></div>
								<br>

								<form action="{{ url('/checkRoom') }}" method="post">

									<?php 
									$req = RequestDB::where('type','=',3)->where('state','=',0)->get();
									for($i = 0 ; $i < count($req) ; $i++){
										echo "<br><input type='radio' name='reqID' value='".$req[$i]->id."'> ".$req[$i]->room;
									}
									?>
									<br><br>
									<button type="submit"  class="btn btn-success btn-lg active">submit</button>
									<br><br>
								</form>
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