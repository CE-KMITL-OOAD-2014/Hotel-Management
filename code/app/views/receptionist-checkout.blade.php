<html>
<head>
	<title></title>
</head>
<body>
<h1>Check IN</h1>
<form action="{{ url('/checkout') }}" method="post">
	<?php 
		$room = RoomDB::where('available','=',false)->get();
		for($i = 0 ; $i < count($room) ; $i++){
			echo "<br><input type='radio' name='roomNumber' value='".$room[$i]->roomNumber."'> ".$room[$i]->roomNumber;
		}
	 ?>	
	<br>
	<button type="submit">submit</button>
</form>
</body>
</html>