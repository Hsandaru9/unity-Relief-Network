<!doctype html>
<html lang="en">

<head>
  <title>Unity Releif Network</title>
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

    <a class="navbar-brand text-dark" href="home.php">
    <i class="fa fa-shield " aria-hidden="true"></i>
    Unity Relief Network

  </a>
</a> 
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
       
        <li class="nav-item">
          <a class="nav-link text-white" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="aboutus.php">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="contactus.php">Contact Us</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link text-white" href="incident report center.php">Incident Report Center</a>
        </li>
        

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="informationcenter.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Donation Area
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="donate.php">Donate</a>
            <a class="dropdown-item" href="volunteer.php">Be a Volunteer</a>
            <a class="dropdown-item" href="informationcenter.php"></a>
           

          </div>
        </li>


        
      </ul>
      
        <ul class="nav justify-content-end">

          <li class="nav-item">
            
          </li>
          <li class="nav-item">
          <a href="logout.php"><button type="button" class="btn btn-dark my-2 my-sm-0">Logout</button></a>
          </li>

        </ul>
    </div>
    </div>
  </nav>

<!-- nav end -->

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/pexels-ludawigakwana-12091690.jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
    
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/pexels-pok-rie-33563-14823600.jpg" alt="Second slide">
      <div class="carousel-caption d-none d-md-block">
    
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/pexels-islandhopper-x-339537771-14840720.jpg" alt="Third slide">
      <div class="carousel-caption d-none d-md-block">
    
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/pexels-rdne-6646967.jpg" alt="Forth slide">
      
    </div>
  </div>

  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>



<div class="jumbotron">
  <h1 class="display-4">Welcome to Unity Relief Network</h1>
  <p class="lead">We cannot stop natural disasters but we can arm ourselves with knowledge: so many lives wouldn't have to be lost if there was enough disaster preparedness.</p>
  <hr class="my-4">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex corporis rem fugiat cumque nam minus ipsam aliquam aut velit distinctio autem animi reprehenderit, aspernatur iste repellendus quasi velit! Ut itaque minus, maiores. Deleniti, rerum nesciunt animi? Magnam laboriosam minus corporis rem dicta fugiat quam quo officia, beatae eum esse voluptates nesciunt ut temporibus dolor, nisi unde. Consequuntur impedit excepturi omnis numquam, expedita eum voluptas est saepe.</p>
  <p class="lead">
    <a class="btn btn-danger btn-lg" href="#" role="button">Read more</a>
  </p>
</div>

<!-- <h1 class="center display-4">Reported Incidents</h1> -->

	<div class="card">
	  <!-- <div class="card-header">
	    Reported Incidents
	  </div> -->
	  <div class="card-body">
	    <h5 class="card-title">Reported Incidents</h5>
	    <?php

			include_once'latestincedents.php'
			?>
		</div>
	 </div>

<?php
include_once'footer.php'
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
