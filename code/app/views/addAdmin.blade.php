@extends('layout')

@section('body')
<div><h1>Add Admin</h1></div>
<div>
	<form role="form" action="{{ url('/addadmin') }}" method="post">
  		<div class="form-group">
    		<label>Username</label>
    		<input type="text" class="form-control" id="createAdminUsername" placeholder="username">
  		</div>
		<div class="form-group">
		    <label>Password</label>
			<input type="password" class="form-control" id="createAdminPassword" placeholder="Password">
		</div>
		<div class="form-group">
		    <label>Retype Password</label>
			<input type="password" class="form-control" id="createAdminRePassword" placeholder="Password">
		</div>
		<div class="form-group">
		    <label>Admin key from Developer</label>
			<input type="text" class="form-control" id="createAdminkey" placeholder="key">
		</div>
		<button type="submit" class="btn btn-default" style="background-color:#AAFF20;">Submit</button>
	</form>
</div>
@stop