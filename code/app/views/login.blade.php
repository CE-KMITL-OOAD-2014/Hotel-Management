@extends('layout')

@section('title')
LOGIN
@stop

<!--.................................................................................-->

@section('body')

<!--login modal-->
<div id="loginModal" class="modal show" tabindex="-1" role="dialog" aria-hidden="true" style="margin-top:80px;">
  <div class="modal-dialog">
  <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h1 class="text-center">Sign In</h1>
      </div>
      <div class="modal-body">
      	<center>
          <form action="{{ url('/login') }}" method="post">
    			<input type="text"  class="form-control input-lg" placeholder="username" name="username"><br>
    			<input type="password" class="form-control input-lg" placeholder="password" name="password"><br>
    			<button type="submit" class="btn btn-primary btn-lg btn-block">Log In</button>
  			</form>
  			<br><br>
  			</center>
      </div>
  </div>
  </div>
</div>

@stop