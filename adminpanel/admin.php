<!doctype html>
<html lang="en">

<head>
  <title>Unity Releif Network</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

  <!-- custom stylesheets -->
  <link rel="stylesheet" href="/css/common-layout.css">
  <link rel="stylesheet" href="/css/common-text.css">
  <!-- fontawesome cdn -->
<script src="https://use.fontawesome.com/1cc2ffd043.js"></script>

  <!-- offline stylesheets -->



</head>

<body>

<!-- nav start -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-danger">

    <a class="navbar-brand text-dark" href="../index.php">

    <i class="fa fa-shield " aria-hidden="true"></i>
    Unity Relief Network
  </a>

		<ul class="nav justify-content-end">
			 <li class="nav-item">
			 			<a href="../adminlogin.php"><button type="button" class="btn btn-dark my-2 my-sm-0 ">Logout</button></a>

			 </li>
    </ul>




  </nav>


<br>
	<div class="text-center">
		<h5 class="">Admin Dashboard</h5>
	</div>
<br>



















	<div class="card">
	 
	  <div class="card-body">
	    <h5 class="card-title">Reported Incidents</h5>
	    <?php

			include_once'../latestincedents.php'
			?>
		</div>
	 </div>

<br>
<div class="card">
	  
	  <div class="card-body">
	    <h5 class="card-title">User Info</h5>
	    <?php

			include_once'../usersinfo.php'
			?>
		</div>
	 </div>
	





<br><br>
<br><br>
<br><br>



















        

<?php

include_once'../footer.php'
?>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

  <script src="libs/jquery-3.2.1.min.js"></script>
  <script src="scripts/script.js">

  </script>

</body>

</html>
