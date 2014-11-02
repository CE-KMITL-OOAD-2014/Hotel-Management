<html>
<head>
	<title>test</title>
</head>
<body>
	<h1>Admin Panel</h1>
	<br>
	<br>
	<a href="/adduser"><button>Adduser</button></a>
	<br>
	<form action="{{ url('/logout') }}" method="post">
		<button type="submit">logout</button>
	</form>
</body>
</html>