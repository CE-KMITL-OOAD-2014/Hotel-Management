<html>
<head>
	<title></title>
</head>
<body>
<h1>Check Room 
<?php 
	$req = new Requests();
	$req->getRequest($reqID);
	echo $req->getRoom();
 ?>
</h1>
<form action="{{ url('/checkRoomComplete') }}" method="post">
	<?php
		echo "<input type=\"radio\" name=\"reqID\" checked value=\"".$req->getID()."\"> ";
		echo "<input type=\"radio\" name=\"billNumber\" checked value=\"".$req->getBillNumber()."\"> ".$req->getRoom();
	 ?> 
	 <br><br>
	มูลค่าความเสียหายห้อง : <input type="text" name="damage"><br>
	ข้อมูลเพิ่มเติม : <input type="text" name="damage-detail"><br>
	<hr>
	มูลค่าสินค้ที่ใช้ภายในห้อง : <input type="text" name="consume"><br>
	ข้อมูลเพิ่มเติม : <input type="text" name="consume-detail"><br>
	<button type="submit">submit</button>
</form>

<br>
<br>
<hr>

</body>
</html>