<html>
<head>
	<title>test</title>
</head>
<body>
	<h1>Kitchen</h1>
	<br>
	<br>
	<a href="/checkOrder"><button>check Order</button></a>
	<br>
	<a href="/addMeal"><button>Add Meal</button></a>
	<br>
	<a href="/editMeal"><button>Edit Meal</button></a>
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