<html>
<head>
	<title></title>
</head>
<body>
<h1>Edit Customer</h1>
	<form action="{{ url('/editCustomer') }}" method="post">
		
		<?php 
			$customerid = CustomerServiceDB::all();
			for($i=0;$i<count($customerid);$i++){
				$Customer = new CustomerService();
				$Customer->getCustomerService($customerid[$i]->userID);
				echo "<br><input type=\"radio\" name =\"userid\" value=\"".$Customer->getId()."\" checked>";
				echo ($i+1)." ".$Customer->getUsername()." ".$Customer->getRoom();
			}
		 ?>
		<br>
		<br>
		<input type="radio" name="action" value="edit">EDIT <input type="radio" name="action" value="del"> DELETE
		<button type="submit">submit</button>
	</form>
</body>
</html>