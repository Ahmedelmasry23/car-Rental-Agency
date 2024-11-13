<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="search_carstyle.css">
  <link rel="stylesheet" href="styles/all.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <title>Document</title>
  <script>

</script>
</head>
<body>
<div class="background">
    <div class="features-section">
    <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="admin.php">Car Rental System</a>
    </div>
    <ul class="nav navbar-nav">
      <li ><a href="add_car.php">add car</a></li>
      <li ><a href="update_car.php">update car</a></li>
      <li class="active"><a href="search_car.php">search with car information</a></li>
      <li ><a href="search_customer.php">search with customer information</a></li>
      <li><a href="search_reservation.php">search with reservation information</a></li>
      <li><a href="reports.php">daily reports</a></li>
      <li><a href="index.php">Log out</a></li>
    </ul>
  </div>
</nav>
    <div class="features">
        <div class="wrapper">
            <div class="card caption">
                <div class="habiba"> 
                    <p class="addcar">search for a car</p>
<form action="search_car_db.php"  method="post" class="form1">
<input type="text" placeholder="enter car plate id to search for " id="plate_id" name="plate_id" class="ip">
<input type="text" placeholder="enter car brand to search for " id="brand" name="brand" class="ip">
<input type="text" placeholder="enter car model to search for " id="model" name="model" class="ip">
<input type="text" placeholder="enter car color to search for " id="color" name="color" class="ip">
<input type="text" placeholder="enter car status to search for " id="status" name="status" class="ip">
<input type="text" placeholder="enter car year to search for " id="year" name="year" class="ip">
<input type="text" placeholder="enter car description to search for " id="description" name="description" class="ip">
<input type="text" placeholder="enter car rating to search for " id="rating" name="rating" class="ip">
<input type="text" placeholder="enter car office to search for " id="office" name="office" class="ip">
<input type="text" placeholder="enter car price to search for " id="price" name="price" class="ip">
<input type="submit" value="search" class="add">
</form>

</div>
            </div>
        </div>
        <div class="wrapper change">
            <div class=" box">
              <img src="R.png" >
            </div>
        </div>
    </div>
</div>
</div>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>
