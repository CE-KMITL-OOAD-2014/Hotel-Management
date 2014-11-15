<html>
<head>
	<title></title>
</head>
<body>
<h1>Edit Room</h1>
	<form action="{{ url('/editRoom') }}" method="post">
		
		<?php 
			$roomid = RoomDB::all();
			for($i=0;$i<count($roomid);$i++){
				$room = new Room();
				$room->getRoom($roomid[$i]->id);
				echo "<br><input type=\"radio\" name =\"roomid\" value=\"".$room->getId()."\" checked>";
				echo ($i+1)." ".$room->getRoomNumber()." ".$room->getBed()." ".$room->getRoomType()." ".$room->getPrice();
			}
		 ?>
		<br>
		<br>
		<input type="radio" name="action" value="edit" checked>EDIT <input type="radio" name="action" value="del"> DELETE
		<button type="submit">submit</button>
	</form>
</body>
</html>