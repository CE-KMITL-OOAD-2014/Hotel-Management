<html>
<head>
	<title></title>
</head>
<body>
<h1>Give Customer Account</h1>
<?php
	$id = CustomerServiceRepository::getIDbyBill($billId);
	$customer = new CustomerService();
	$customer->getCustomerService($id);
	echo "<br><h2> Customer Room : ".$customer->getRoom()."</h2>";
	echo "<br><h3> Username : ".$customer->getUsername()."</h3>";
	echo "<br><h3> Password : ".$customer->getPassword()."</h3>";
 ?>
 <a href="{{url('/')}}"><button>Exit</button></a>
</body>
</html>