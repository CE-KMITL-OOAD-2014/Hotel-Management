<html>
<head>
	<title></title>
</head>
<body>
<h1>Edit Meal</h1>
	<form action="{{ url('/editMeal') }}" method="post">
		
		<?php 
			$mealid = MealDB::all();
			for($i=0;$i<count($mealid);$i++){
				$meal = new Meal();
				$meal->getMeal($mealid[$i]->id);
				echo "<br><input type=\"radio\" name =\"mealid\" value=\"".$meal->getId()."\" checked>";
				echo ($i+1)." ".$meal->getName()." ".$meal->getDesc()." ".$meal->getPrice();
			}
		 ?>
		<br>
		<br>
		<input type="radio" name="action" value="edit">EDIT <input type="radio" name="action" value="del"> DELETE
		<button type="submit">submit</button>
	</form>
</body>
</html>