<html>
<head>
	<title>test</title>
</head>
<body>
	<form action="{{ url('/logout') }}" method="post">
		<button type="submit">logout</button>
	</form>
	<a href="/adduser"><button>Adduser</button></a>
</body>
</html>