@extends('layoutPay')

@section('title')
Add User
@stop
@section('nav')
<li>

	<a onclick="myFunction()" type="submit" style="background-color:#FF8C00; color:white;">
		<span class="glyphicon glyphicon-user">logout
		</span>
	</a>
</li>
@stop

@section('body')
<h1>Payment Detail</h1>

<?php 
	$req = new Requests();
	$req->getRequest($reqId);
	$sum = 0;
	$billRepository = new BillRepository();
	$billid = $billRepository->getID($req->getBillNumber());
	for($i=0;$i<count($billid);$i++){
		$bill = new Bill();
		$bill->getBill($billid[$i]);
		echo "<br>".$bill->getDetail()." ".$bill->getValue()." ".$bill->getTime();
		$sum+=$bill->getValue();
	}
?>
<h3>Sumary : {{$sum}}</h3>
<div align="center">
	<form action="{{ url('/pay') }}" method="post">
		<input type="hidden" name="reqId" value="{{ $reqId }}" checked>
		<br><br><button type="submit" class="btn btn-primary btn-lg active">Submit</button>
	</form>
</div>

<form id="myForm"action="{{ url('/logout') }}" method="post">
</form>
<script type="text/javascript">
	function myFunction() {
		document.getElementById("myForm").submit();
	}


</script>

@stop