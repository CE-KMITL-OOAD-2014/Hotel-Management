<html>
<head>
	<title></title>
</head>
<body>
<h1>Payment Detail</h1>
	<?php 
		//$billNumber;
	 ?>	
<form action="{{ url('/pay') }}" method="post">
	<input type="radio" name="reqId" value="{{ $reqId }}" checked>
	<button type="submit">submit</button>
</form>
</body>
</html>