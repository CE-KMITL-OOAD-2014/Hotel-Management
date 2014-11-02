<html>
<head>
	<title>test</title>
</head>
<body>
	<form action="{{ url('/login') }}" method="post">
		username <input type="text" name="username"> <br>
		password <input type="password" name="password"> <br>
		<button type="submit">login</button>
	</form>

	<br><br>
	
	<form action="{{ url('/createAdmin') }}" method="post">
		<button type="submit">Create first admin</button>
	</form>
</body>
</html>