<html>
<head>
	<title></title>
</head>
<body>
<h1>Add Guest</h1>
<form action="{{ url('/checkin') }}" method="post">	
	<br>name : <input type="text" name="name">
	<br>surname : <input type="text" name="surname">
	<br>nationalID : <input type="text" name="nationalID">
	<br>detail : <input type="text" name="detail">
	<button type="submit">submit</button>
</form>
</body>
</html>