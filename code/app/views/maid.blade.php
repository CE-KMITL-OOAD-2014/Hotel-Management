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
	<h1>Maid</h1>
	<br>
	<br>
	<div style="background-color:white">
		<div class="container">
        <div class="row">
       	 	<div align="center">
           		 <div class="box" border="20" >
					<div class="container">
							<center>
							<br><br><br>
							<img class="img-circle" src ="request.png" >
							<br><br><br>
							<a href="/checkClean"><button type="button" class="btn btn-success btn-lg active">check request</button></a>
							<br><br><br>
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