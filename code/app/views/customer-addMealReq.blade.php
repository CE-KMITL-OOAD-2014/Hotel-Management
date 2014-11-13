<html>
<head>
	<title></title>
</head>
<body>
<h1>Check IN</h1>
<form action="{{ url('/addMealReq') }}" method="post">
	<h2>Chose food from list below :</h2>
	
	<?php 
		$meal = MealDB::all();
		for($i = 0 ; $i < count($meal) ; $i++){
			//echo "<br><input type='radio' name='mealNumber' value='".$meal[$i]->id."'>".$meal[$i]->name.+" "+$meal[$i]->desc;
			echo "<br><input type='radio' name='mealNumber' value='".$meal[$i]->id."'>";

			echo $meal[$i]->name." ".$meal[$i]->price." ";
		}
	 ?>	
	<br>
	<button type="submit">submit</button>

	<?php 
	$user = unserialize(Session::get('user'));
	var_dump($user);
	 ?>
</form>
</body>
</html>