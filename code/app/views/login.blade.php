@extends('layout')

@section('body')
<div>
  <a href="/addadmin"><button type="button" class="btn btn-default" style="background-color:#31152B; color:white;">Add Admin</button></a>
</div>
<div>
  <form class="form-horizontal" role="form">
    <div class="form-group">
      <br><br>
        <label for="inputEmail3" class="col-sm-2 control-label">Username</label>
        <div class="col-sm-10">
        <input type="username" class="form-control" id="username" placeholder="username">
      </div>
    </div>
    <div class="form-group">
      <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
      <div class="col-sm-10">
        <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">login</button>
      </div>
    </div>
  </form>
</div>
@stop

@section('title')
  <span class="glyphicon glyphicon-star"></span>
  Hotel Management System
@stop