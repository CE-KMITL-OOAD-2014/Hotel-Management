<html>
<head>
	<title></title>
</head>
<body>
<h1>Payment</h1>
<form action="{{ url('/confirmPay') }}" method="post">
	<?php 
		$req = RequestDB::where('type','=',3)->where('state','=',1)->get();
		for($i = 0 ; $i < count($req) ; $i++){
			echo "<br><input type='radio' name='reqId' value='".$req[$i]->id."'> ".$req[$i]->room;
		}
	 ?>	
	<br>
	<button type="submit">submit</button>
</form>
</body>
</html>