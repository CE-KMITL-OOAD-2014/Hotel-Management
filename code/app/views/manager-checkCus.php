<?php
header('Content-disposition: attachment; filename=customer.txt');
header('Content-type: text/plain');
	$customerId = CustomerDB::all();
	for($i = 0 ; $i<count($customerId) ; $i++){
		$customer = new Customer();
		$customer->getCustomer($customerId[$i]->id);
		echo "(".($i+1).". ".$customer->getName().",".$customer->getSurname().",".$customer->getNationalID().",".$customer->getDetail().")\n";
	}
?>