<html>
<head>
	<title></title>
</head>
<body>
<h1>Edit Room</h1>
	<form action="{{ url('/editRoomComplete') }}" method="post">
		
		<?php
			$room = new Room();
			$room->getRoom($roomid);
		 ?>
		 <h3>Room : {{$room->getRoomNumber()}}</h3>
		<br>price : <input type="text" name="price" value="{{$room->getPrice()}}">
		<br>bed : <input type="text" name="bed" value="{{$room->getBed()}}">
		<br>type : <input type="radio" name="available" value="1"> available
		<br>type : <input type="radio" name="available" value="0" checked> not available
		<br>roomType : 
			<input type="radio" name="roomType" checked value="big"> ห้องโต 
			<input type="radio" name="roomType" value="medium"> ห้องไม่โตมาก 
			<input type="radio" name="roomType" value="small"> ห้องเล็ก
		<br><input type="radio" name="roomID" value="{{$roomid}}" checked>
		<br>
		<button type="submit">submit</button>
	</form>
</body>
</html>