<html>
<head>
	<title></title>
</head>
<body>
<h1>ADD USER</h1>
<form action="{{ url('/addStaff') }}" method="post">
	<br>username : <input type="text" name="username">
	<br>password : <input type="password" name="password">
	<br>retype password : <input type="password" name="retypepassword">
	<!-- ตรงนี้ลีเอาใส่ไว้เป็น dropdown นะ ดูใน bootstrap -->
	<br>role :<br>
	<input type="radio" name="role" value="manager" checked >manager<br>
	<input type="radio" name="role" value="receptionist" >receptionist<br>
	<input type="radio" name="role" value="kitchen" >kitchen<br>
	<input type="radio" name="role" value="maid" >maid<br>
	<!---->
	<br>staffID : <input type="text" name="staffID">
	<br>name : <input type="text" name="name">
	<br>IDnumber : <input type="text" name="IDnumber">
	<br>location : <input type="text" name="location">
	<br>email : <input type="text" name="email">
	<br>tel : <input type="text" name="tel">

	<button type="submit">submit</button>
</form>
</body>
</html>