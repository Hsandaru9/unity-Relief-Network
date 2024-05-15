<!doctype html>
<html lang="en">

<head>
  <title>Unity Releif Network</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">


  <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.13/jquery-ui.min.js"></script>

  <!-- custom stylesheets -->
  <link rel="stylesheet" href="/css/common-layout.css">
  <link rel="stylesheet" href="/css/common-text.css">
  <!-- fontawesome cdn -->
  <script src="https://use.fontawesome.com/1cc2ffd043.js"></script>
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDNT70lDbSZ992ZZm9FmBdGUyV-d9GkOqQ"></script>


  
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <!-- jQuery UI library -->
  <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.13/jquery-ui.min.js"></script>

 


</head>

<body>

  <?php
include_once'header.php'
 ?>

    <!-- nav end -->
    <br>
    <form action="report/donate.php" method="POST">
      <div class="container">
        <div class="card card-body">




          <div class="form-group">
            <label for="exampleInputEmail1">National Identification Number</label>
            <input type="input" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="NIC Number">
          </div>

          <!-- User Name -->
          <div class="form-group">
            <label for="exampleInputEmail1">User Name</label>
            <input type="input" class="form-control" name="user_name" placeholder="User Name">
          </div>

          <!-- Email address -->
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" name="user_email" placeholder="Enter email">
          </div>

          

         
          <br>
         
           

              <label for="exampleInputEmail1">Address</label>
              <input type="input" class="form-control" name="address" placeholder="Enter Address">
            </div>

            <!-- Latitude -->
            

         

          <!-- Incident Type -->
          <br>
          <div class="form-group">
            <label for="exampleFormControlSelect1">Donation Categories</label><br>
            <select class="form-control" name="incident">
        <option>First Aid Supplies</option>
        <option>Clothing and Bedding</option>
        <option>Water</option>
        <option>Food</option>
        
      </select>
          </div>

          <br>
          <div class="form-group">
            <label for="exampleFormControlSelect1">For How Many People?</label><br>
            <select class="form-control" name="incident">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        <option>6</option>
        <option>7</option>
        <option>8</option>
        <option>9</option>
        <option>10</option>
        <option>11</option>
        <option>12</option>
        <option>13</option>
        <option>14</option>
        <option>15</option>
        <option>16</option>
        <option>17</option>
        <option>18</option>
        <option>19</option>
        <option>20</option>
        
      </select>
          </div>

          <div class="form-group">
            <label for="exampleFormControlTextarea1">Notes</label>
            <textarea class="form-control" name="explanation" rows="3"></textarea>
          </div>

          <br>

          <button class="btn btn btn-warning btn-space my-2 my-sm-0" type="submit" name="submit">Submit</button>

          <br>

    </form>









    </div>










    </div>
    </div>


    <br>


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
