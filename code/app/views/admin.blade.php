<html>
<head>
	<title>test</title>
</head>
<body>
	<h1>Admin Panel</h1>
	<br>
	<br>
	<a href="/editCustomer"><button>Edit Customer</button></a>
	<br>
	<a href="/addCustomer"><button>Add Customer</button></a>
	<br>
	<a href="/addStaff"><button>Add Staff</button></a>
	<br>
	<a href="/editStaff"><button>Edit Staff</button></a>
	<br>
	<form action="{{ url('/logout') }}" method="post">
		<button type="submit">logout</button>
	</form>
</body>
</html>