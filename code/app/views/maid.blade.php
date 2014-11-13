<html>
<head>
	<title>test</title>
</head>
<body>
	<h1>Maid</h1>
	<br>
	<br>
	<a href="/checkClean"><button>check request</button></a>
	<br>
	<form action="{{ url('/logout') }}" method="post">
		<button type="submit">logout</button>
	</form>
</body>
</html>