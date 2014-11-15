<html>
<head>
	<title></title>
</head>
<body>
<h1>Order Queue</h1>
	<form action="{{ url('/cancelReq') }}" method="post">
		
		<?php 
			$req = RequestDB::where('type','<',3)->where('state','=',0)->get();
			for($i = 0 ; $i < count($req) ; $i++){
				if($req[$i]->type == 2){
					$meal = new Meal();
					$meal->getMeal($req[$i]->mealID);
					echo "<br><input type='radio' name='reqID' value='".$req[$i]->id."'> Meal Request ".$req[$i]->room." : ".$meal->getName()." AT : ".$req[$i]->updated_at;;
				}
				else{
					echo "<br><input type='radio' name='reqID' value='".$req[$i]->id."'> Clean Request ".$req[$i]->room." AT : ".$req[$i]->updated_at;
				}
			}
		 ?>
		<br>
		<button type="submit">submit</button>
	</form>
</body>
</html>