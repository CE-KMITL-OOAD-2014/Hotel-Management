<html>
<head>
	<title>test</title>
</head>
<body>
	<form action="{{ url('/login') }}" method="post">
		username <input type="text" name="username"> <br>
		password <input type="password" name="password"> <br>
		<button type="submit">login</button>
	</form>

	<br><br>
	
	<form action="{{ url('/createAdmin') }}" method="post">
		<button type="submit">Create first admin</button>
	</form>
</body>
</html>

<?php
	$date = date("ymd");
	$activeRoomSet = CustomerServiceDB::where('state','=',1)->get();

	//echo count($activeRoomSet);
	for($i=0;$i<count($activeRoomSet);$i++){
		//echo $i."<br>";
		$req = RequestDB::where('room','=',$activeRoomSet[$i]->room)->where('date','=',$date)->get();
		if(count($req)==0) {
			$id = RequestRepository::newRequest();
			$req = new Requests();
			$req->getRequest($id);
			$req->setType(1);
			$req->setRoom($activeRoomSet[$i]->room);
			$req->setBillNumber(0);
			$req->setCustomerServiceID(0);
			$req->setState(0);
			$req->setDate($date);
			$req->saveToDB();
		}
	}
 ?>