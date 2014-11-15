<html>
<head>
	<title></title>
</head>
<body>
<h1>ADD ROOM</h1>
<form action="{{ url('/addRoom') }}" method="post">
	<br>roomNumber : <input type="text" name="roomNumber">
	<br>price : <input type="text" name="price">
	<br>bed : <input type="text" name="bed">
	<br>roomType : 
					<input type="radio" name="roomType" checked value="big"> big 
					<input type="radio" name="roomType" value="medium"> medium 
					<input type="radio" name="roomType" value="small"> small
	<br>available : 
					<input type="radio" name="available" checked value="1"> ว่าง 
					<input type="radio" name="available" value="0"> ไม่ว่าง

	<button type="submit">submit</button>
</form>
</body>
</html>