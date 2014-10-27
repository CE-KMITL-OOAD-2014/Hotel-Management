<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>test</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
    </style>
  </head>
<body>
<div class="dropdown">
  <a data-toggle="dropdown" href="#"><button type="button" class="btn btn-default">อิดอกอาท</button></a>
  <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
    <li>
      <div>
        <div class="col-xs-8">
          <div id="loginModal" class="modal show" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                      <h1 class="text-center">Login</h1>
                  </div>
                  <div class="modal-body">
                      <form class="form col-md-12 center-block">
                        <div class="form-group">
                          <input type="text" class="form-control input-lg" placeholder="Email">
                        </div>
                        <div class="form-group">
                          <input type="password" class="form-control input-lg" placeholder="Password">
                        </div>
                        <div class="form-group">
                          <button class="btn btn-success btn-lg btn-block">Sign In</button>
                    <div class="text-center">
                            <h1>or</h1>
                    </div>
                          <button class="btn btn-success btn-lg btn-block"><a href="register.html">Register</a></button>
                        </div>
                      </form>
                  </div>
                  <div class="modal-footer">
                      <div class="col-md-12">
                      <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
                  </div>  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </li>
  </ul>
</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>