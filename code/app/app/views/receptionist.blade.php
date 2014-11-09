<html>
<head>
	<title>test</title>
</head>
<body>
	<h1>Receptionist</h1>
	<br>
	<br>
	<a href="/checkin"><button>checkin</button></a>
	<br>
	<form action="{{ url('/logout') }}" method="post">
		<button type="submit">logout</button>
	</form>
</body>
</html>