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
</body>
</html>