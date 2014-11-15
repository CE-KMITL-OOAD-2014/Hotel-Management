<html>
<head>
	<title></title>
</head>
<body>
<h1>Edit Meal</h1>
	<form action="{{ url('/editMealComplete') }}" method="post">
		
		<?php
			$meal = new Meal();
			$meal->getMeal($mealid);
		 ?>
		<br>name : <input type="text" name="name" value="{{$meal->getName()}}">
		<br>Description : <input type="text" name="desc" value="{{$meal->getDesc()}}">
		<br>price : <input type="text" name="price" value="{{$meal->getPrice()}}">
		<input type="radio" name="mealID" value="{{$mealid}}" checked>
		<br>
		<button type="submit">submit</button>
	</form>
</body>
</html>