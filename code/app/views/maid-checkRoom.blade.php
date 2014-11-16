@extends('layoutMaid')

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
<h1>Check Room 
	<?php 
	$req = new Requests();
	$req->getRequest($reqID);
	echo $req->getRoom();
	?>
</h1>
<div style="background-color:white">
	<div class="container">
		<div class="row">
			<div align="center">
				<div class="box" border="20" >
					<div class="container">
						<center>
							<form action="{{ url('/checkRoomComplete') }}" method="post">
								<br><br>
								<?php
								echo "<input type=\"radio\" name=\"reqID\" checked value=\"".$req->getID()."\"> ";
								echo "<input type=\"radio\" name=\"billNumber\" checked value=\"".$req->getBillNumber()."\"> ".$req->getRoom();
								?> 
								<br><br>
								<fieldset>
									<div class="form-group">
										<br><br>
										<label for="text" class="col-md-2 control-label">มูลค่าความเสียหายห้อง</label>
										<div class="col-md-9">
											<input type="text" class="form-control" name="damage" placeholder="มูลค่าความเสียหายห้อง" required="" autofocus="">
										</div>
									</div>
									<div class="form-group">
										<br><br>
										<label for="text" class="col-md-2 control-label">ข้อมูลเพิ่มเติม</label>
										<div class="col-md-9">
											<input type="text" class="form-control" name="damage-detail" placeholder="ข้อมูลเพิ่มเติม" required="" autofocus="">
										</div>
									</div>

									<hr>
									<div class="form-group">
										<br><br>
										<label for="text" class="col-md-2 control-label">มูลค่าสินค้ที่ใช้ภายในห้อง</label>
										<div class="col-md-9">
											<input type="text" class="form-control" name="consume" placeholder="มูลค่าสินค้ที่ใช้ภายในห้อง" required="" autofocus="">
										</div>
									</div>
									<div class="form-group">
										<br><br>
										<label for="text" class="col-md-2 control-label">ข้อมูลเพิ่มเติม</label>
										<div class="col-md-9">
											<input type="text" class="form-control" name="consume-detail" placeholder="ข้อมูลเพิ่มเติม" required="" autofocus="">
										</div>
									</div>

									<br><br><button type="submit " class="btn btn-success btn-lg active">submit</button><br><br>
								</form>
							</fieldset>
						</form>
					</center>
				</div>
			</div>
		</div>
	</div>
</div>
</div>


<form id="myForm"action="{{ url('/logout') }}" method="post">
</form>
<script type="text/javascript">
	function myFunction() {
		document.getElementById("myForm").submit();
	}


</script>

@stop
