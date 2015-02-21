<?php
	session_start();
	echo $_SESSION["fail"];
?>
<html>
  <head>
    <script src="js/app.js"></script>
    <script src="http://maps.googleapis.com/maps/api/js"></script>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script src="js/jquery-1.11.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <style type="text/css">
	  html { height: 100% }
	  body { height: 100%; margin: 0; padding: 0 }
	  #map-canvas { height: 100% }
	  #divElement{
	    position: absolute;
	    top: 50%;
	    left: 50%;
	    margin-top: -150px;
	    margin-left: -150px;
	}​
	</style>
  </head>
  <body>
  <div>
  	<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">Personal Portal</a>
        </div>
       </div>
    </nav>
    <div id="divElement">
        <h3>Login</h3>
       	<form class="form-horizontal" action="login.php" method="POST">
		  <div class="form-group">
		    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
		    <div class="col-sm-10">
		      <input type="email" class="form-control" name="Email" id="Email" placeholder="Email">
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
		    <div class="col-sm-10">
		      <input type="password" name="Password" class="form-control" id="Password" placeholder="Password">
		    </div>
		  </div>
		  <div class="form-group">
		    <div class="col-sm-offset-2 col-sm-10">
		      <button type="submit" class="btn btn-primary">Sign in</button>
		    </div>
		  </div>
		</form>
    </div>
  </body>
</html>