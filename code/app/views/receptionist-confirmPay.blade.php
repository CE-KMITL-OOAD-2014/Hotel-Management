<html>
<head>
	<title></title>
</head>
<body>
<h1>Payment Detail</h1>
	<?php 
		$req = new Requests();
		$req->getRequest($reqId);
		$sum = 0;
		$billid = BillRepository::getID($req->getBillNumber());
		for($i=0;$i<count($billid);$i++){
			$bill = new Bill();
			$bill->getBill($billid[$i]);
			echo "<br>".$bill->getDetail()." ".$bill->getValue()." ".$bill->getTime();
			$sum+=$bill->getValue();
		}
	 ?>
<h3>Sumary : {{$sum}}</h3>
<form action="{{ url('/pay') }}" method="post">
	<input type="radio" name="reqId" value="{{ $reqId }}" checked>
	<button type="submit">submit</button>
</form>
</body>
</html>