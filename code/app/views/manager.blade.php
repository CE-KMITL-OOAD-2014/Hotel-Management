<html>
<head>
	<title>test</title>
</head>
<body>
	<h1>Manager Panel</h1>
	<br>
	<br>
	<a href="/addRoom"><button>Add Room</button></a>
	<br>
	<a href="/editRoom"><button>Edit Room</button></a>
	<br>
	<form action="{{ url('/logout') }}" method="post">
		<button type="submit">logout</button>
	</form>

	<?php 
		$user = unserialize(Session::get('user'));
		var_dump($user);
	 ?>
</body>
</html>