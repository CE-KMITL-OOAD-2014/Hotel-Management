<?php
header('Content-disposition: attachment; filename=gen.txt');
header('Content-type: text/plain');
	$billId = BillRepository::all();
	for($i = 0 ; $i<count($billId) ; $i++){
		$bill = new Bill();
		$bill->getBill($billId[$i]);

		//echo $bill->getBillNumber().",".$bill->getDetail().",".$bill->getValue().",";
		//echo "<br>";
	}
echo "this is the file\n";
echo " meee.";
?>