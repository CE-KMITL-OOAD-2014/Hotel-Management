<html>
<head>
	<title></title>
</head>
<body>
<h1>Edit Customer</h1>
	<form action="{{ url('/editCustomerComplete') }}" method="post">
		
		<?php
			$customer = new CustomerService();
			$customer->getCustomerService($userid);
		 ?>
		<br>Username : <input type="text" name="username" value="{{$customer->getUsername()}}">
		<br>Password : <input type="text" name="password" value="{{$customer->getpassword()}}">
		<br>Room : <input type="text" name="room" value="{{$customer->getRoom()}}">

		<input type="radio" name="userID" value="{{$userid}}" checked>
		<br>
		<button type="submit">submit</button>
	</form>
</body>
</html>