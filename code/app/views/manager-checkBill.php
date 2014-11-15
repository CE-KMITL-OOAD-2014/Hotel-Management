<?php
header('Content-disposition: attachment; filename=bill.txt');
header('Content-type: text/plain');
	$billId = BillDB::all();
	for($i = 0 ; $i<count($billId) ; $i++){
		$bill = new Bill();
		$bill->getBill($billId[$i]->id);

		echo $bill->getBillNumber().",".$bill->getDetail().",".$bill->getValue().",\n";
	}
?>