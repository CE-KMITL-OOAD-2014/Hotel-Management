<html>
<head>
	<title></title>
</head>
<body>
<h1>KITCHEN - ADD MEAL</h1>
<form action="{{ url('/addMeal') }}" method="post">
	<br>name : <input type="text" name="name">
	<br>price : <input type="text" name="price">
	<br>description : <input type="text" name="desc">
	<button type="submit">submit</button>
</form>
</body>
</html>