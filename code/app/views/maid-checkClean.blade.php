<html>
<head>
	<title></title>
</head>
<body>
<h1>Clean Queue</h1>
<form action="{{ url('/acceptClean') }}" method="post">
	
	<?php 
		$req = RequestDB::where('type','=',1)->where('state','=',0)->get();
		for($i = 0 ; $i < count($req) ; $i++){
			echo "<br><input type='radio' name='reqID' value='".$req[$i]->id."'> ".$req[$i]->room;
		}
	 ?>
	<br>
	<button type="submit">submit</button>
</form>

<br>
<br>
<hr>
<br>
<br>

<form action="{{ url('/checkRoom') }}" method="post">
	
	<?php 
		$req = RequestDB::where('type','=',3)->where('state','=',0)->get();
		for($i = 0 ; $i < count($req) ; $i++){
			echo "<br><input type='radio' name='reqID' value='".$req[$i]->id."'> ".$req[$i]->room;
		}
	 ?>
	<br>
	<button type="submit">submit</button>
</form>
</body>
</html>