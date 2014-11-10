<html>
<head>
	<title>test</title>
</head>
<body>
	<h1>Kitchen</h1>
	<br>
	<br>
	<a href="/addMeal"><button>Add Meal</button></a>
	<br>
	<form action="{{ url('/logout') }}" method="post">
		<button type="submit">logout</button>
	</form>
</body>
</html>