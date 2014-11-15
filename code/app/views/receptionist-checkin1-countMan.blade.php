<html>
<head>
	<title></title>
</head>
<body>
<h1>Check IN</h1>
<form action="{{ url('/checkin') }}" method="post">
	<br>How many guest : <input type="text" name="person">
	
	<?php 
		$room = RoomDB::where('available','=',true)->get();
		for($i = 0 ; $i < count($room) ; $i++){
			$cusid = CustomerServiceRepository::getIDbyRoom($room[$i]->roomNumber);
			if($cusid!=NULL){
				echo "<br><input type='radio' name='roomNumber' value='".$room[$i]->roomNumber."'> ".$room[$i]->roomNumber;
			}
		}
	 ?>	
	<br>
	<button type="submit">submit</button>
</form>
</body>
</html>