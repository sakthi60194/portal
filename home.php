<?php
	session_start();
	if(isset($_SESSION["email"])
		echo "true";
	else
		echo "false";
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
  <!-- <div>
  	<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">Personal Portal</a>
        </div>
       </div>
    </nav>-->
  <!--   <div id="divElement">
       <p>Hello</p>
    </div> -->
  </body>

</html>