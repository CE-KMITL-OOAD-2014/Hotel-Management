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
<h1>Payment</h1>
<div style="background-color:white">
	<div class="container">
		<div class="row">
			<div align="center">
				<div class="box" border="20" >
					<div class="container">
						<center>
							<form action="{{ url('/confirmPay') }}" method="post">
								Select Room
								<br><br>
								<?php 
									$req = RequestDB::where('type','=',3)->where('state','=',1)->get();
									for($i = 0 ; $i < count($req) ; $i++){
										echo "<br><input type='radio' name='reqId' value='".$req[$i]->id."'> ".$req[$i]->room;
									}
								?>	
								<br><br>
								<button type="submit" class="btn btn-primary btn-lg active">Submit</button>
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