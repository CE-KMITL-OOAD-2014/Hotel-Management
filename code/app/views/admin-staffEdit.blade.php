<html>
<head>
	<title></title>
</head>
<body>
<h1>Edit Staff</h1>
	<form action="{{ url('/editStaffComplete') }}" method="post">
		
		<?php
			$staff = new Staff();
			$staff->getStaff($userid);
		 ?>
		<br>Username : <input type="text" name="username" value="{{$staff->getUsername()}}">
		<br>Password : <input type="text" name="password" value="{{$staff->getpassword()}}">
		<br>name : <input type="text" name="name" value="{{$staff->getname()}}">
		<br>staff ID : <input type="text" name="staffID" value="{{$staff->getStaffID()}}">
		<br>ID Number : <input type="text" name="IDnumber" value="{{$staff->getIDnumber()}}">
		<br>Location : <input type="text" name="location" value="{{$staff->getLocation()}}">
		<br>Tel : <input type="text" name="tel" value="{{$staff->getTel()}}">
		<br>Email : <input type="text" name="email" value="{{$staff->getEmail()}}">
		<input type="radio" name="userID" value="{{$userid}}" checked>
		<br>
		<button type="submit">submit</button>
	</form>
</body>
</html>