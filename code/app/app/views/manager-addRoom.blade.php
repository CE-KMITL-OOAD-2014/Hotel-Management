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
					<input type="radio" name="roomType" checked value="big"> ห้องโต 
					<input type="radio" name="roomType" value="medium"> ห้องไม่โตมาก 
					<input type="radio" name="roomType" value="small"> ห้องเล็ก
	<br>available : 
					<input type="radio" name="available" checked value="1"> ว่าง 
					<input type="radio" name="available" value="0"> ไม่ว่าง
	<br>maintainancing : 
					<input type="radio" name="maintainancing" checked value="1"> ซ่อมบำรุง 
					<input type="radio" name="maintainancing" value="0"> พร้อมใช้งาน
	<br>clean : 
					<input type="radio" name="clean" checked value="1"> ทำความสะอาดแล้ว
					<input type="radio" name="clean" value="0"> ยังไม่ได้ทำความสะอาด

	<button type="submit">submit</button>
</form>
</body>
</html>