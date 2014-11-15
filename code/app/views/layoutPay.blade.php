<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hotel Management System</title>
    <link href="css/bootstrap.min.css"  rel="stylesheet">
    <style type="text/css">
      html, body {
        height: 100%;
      }

      * {
        margin: 0;
      }

      .wrapper {
        min-height: 100%;
        height: auto !important;
        height: 100%;
        margin: 0 auto -5em;
      }

      #body-footer {
        position: fixed;
        bottom: 0;
        left: 0;
        right: 0;
        min-height: 80px;
      }

      .pushtop {
        height: 70px;
        width: 100%;
      }

      .prepush {
        height: 70px;
        width: 100%;
      }

    </style>
  </head>
  <body style="background-color:#FFFFFF;">
<div class="wrapper">
<div class="pushtop"></div>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Hotel Management System</a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        @Yield('nav')
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

    <div class="container" >
      <div>
        @yield('body')
      </div>
    </div>
    <div class="prepush"></div>
    <div class="push"></div>
</div>
    <footer class="text-center" id="body-footer" style="background: #008A6E;">
  </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>