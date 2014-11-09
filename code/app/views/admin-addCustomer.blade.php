<html>
<head>
	<title></title>
</head>
<body>
<h1>ADD USER</h1>
<form action="{{ url('/addCustomer') }}" method="post">
	<br>username : <input type="text" name="username">
	<br>password : <input type="password" name="password">
	<br>retype password : <input type="password" name="retypepassword">
	<br>room : <input type="text" name="room">
	<button type="submit">submit</button>
</form>
</body>
</html>