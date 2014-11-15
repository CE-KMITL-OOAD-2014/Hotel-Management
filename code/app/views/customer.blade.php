<html>
<head>
	<title>test</title>
</head>
<body>
	<h1>Customer Service</h1>
	<br>
	<br>
	<br>

	<?php 
	$user = unserialize(Session::get('user'));
	if($user->getCleanReqID()==0) echo "<a href=\"/addCleanReq\"><button>Cleaning Request</button></a>";
	if($user->getMealReqID()==0) echo "<a href=\"/addMealReq\"><button>Order food</button></a>";

	$cleanId = $user->getCleanReqID();
	if($cleanId!=0){
		$tmp = RequestDB::find($cleanId);
		if($tmp->state!=0){
			echo "<a href=\"/completeClean\"><button>Complete Clean</button></a>";
		}
	}

	$mealId = $user->getMealReqID();
	if($mealId!=0){
		$tmp = RequestDB::find($mealId);
		if($tmp->state!=0){
			echo "<a href=\"/completeOrder\"><button>Complete Order</button></a>";
		}
	}

	var_dump($user);
	 ?>

	<form action="{{ url('/logout') }}" method="post">
		<button type="submit">logout</button>
	</form>
</body>
</html>