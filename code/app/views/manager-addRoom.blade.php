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
	<br>avaialable : 
					<input type="radio" name="avaialable" checked value="true"> ว่าง 
					<input type="radio" name="avaialable" value="false"> ไม่ว่าง
	<br>maintainancing : 
					<input type="radio" name="maintainancing" checked value="true"> ซ่อมบำรุง 
					<input type="radio" name="maintainancing" value="false"> พร้อมใช้งาน
	<br>clean : 
					<input type="radio" name="clean" checked value="true"> ทำความสะอาดแล้ว
					<input type="radio" name="clean" value="false"> ยังไม่ได้ทำความสะอาด

	<button type="submit">submit</button>
</form>
</body>
</html>