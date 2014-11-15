<html>
<head>
	<title></title>
</head>
<body>
<h1>Edit Staff</h1>
	<form action="{{ url('/editStaff') }}" method="post">
		
		<?php 
			$staffid = StaffDB::all();
			for($i=0;$i<count($staffid);$i++){
				$staff = new Staff();
				$staff->getStaff($staffid[$i]->userID);
				echo "<br><input type=\"radio\" name =\"userid\" value=\"".$staff->getId()."\" checked>";
				echo ($i+1)." ".$staff->getName()." ".$staff->getRole()." ".$staff->getUsername();
			}
		 ?>
		<br>
		<br>
		<input type="radio" name="action" value="edit">EDIT <input type="radio" name="action" value="del"> DELETE
		<button type="submit">submit</button>
	</form>
</body>
</html>