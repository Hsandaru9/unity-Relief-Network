


<?php
include_once'dbh.latestincedents.php';
?>


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

<div class="flex">


	<table class="table table-dark">
		<thead>
			<tr>
				<!-- <th scope="col">#</th> -->
				<th scope="col">User Name</th>
				<th scope="col">User Email</th>
				<th scope="col">Incident Address</th>
				<th scope="col">Latitude</th>
				<th scope="col">Longitude</th>
				<th scope="col">Incident</th>
				<th scope="col">Requesting Donation Items</th>
			</tr>
		</thead>

<tbody><tr>


	<?php


		$sql = "SELECT * FROM increport;";
		$result = mysqli_query($conn,$sql);
		$resultCheck = mysqli_num_rows($result);




				// echo $row['user_id'];
				// echo $row['user_name'];
				// echo $row['user_email'];
				// echo $row['address'];
				// echo $row['latitude'];
				// echo $row['longitude'];
				// echo $row['incident'];
				// echo $row['explanation'];
        //

	if ($resultCheck > 0) {
		while ($row = mysqli_fetch_assoc($result)) {


			 // echo "<th>" . $row['user_id']    . "</th>" ;
			 echo "<td>" . $row['user_name'] . "</td>" ;
			 echo "<td>" . $row['user_email'] . "</td>" ;
			 echo "<td>" . $row['address'] . "</td>" ;
			 echo "<td>" . $row['latitude'] . "</td>" ;
			 echo "<td>" . $row['longitude'] . "</td>" ;
			 echo "<td>" . $row['incident'] . "</td>" ;
			 echo "<td>" . $row['explanation'] . "</td>" ;


echo "</tr>";


}


}


 ?>



</tbody>
</table>


</div>











  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

  <script src="libs/jquery-3.2.1.min.js"></script>
  <script src="scripts/script.js">

  </script>

</body>

</html>
