<html>
<head>
	<title></title>
</head>
<body>
<h1>Order Queue</h1>
	<form action="{{ url('/acceptOrder') }}" method="post">
		
		<?php 
			$req = RequestDB::where('type','=',2)->where('state','=',0)->get();
			for($i = 0 ; $i < count($req) ; $i++){
				$meal = new Meal();
				$meal->getMeal($req[$i]->mealID);
				echo "<br><input type='radio' name='reqID' value='".$req[$i]->id."'> ".$req[$i]->room." : ".$meal->getName();
			}
		 ?>
		<br>
		<button type="submit">submit</button>
	</form>
</body>
</html>