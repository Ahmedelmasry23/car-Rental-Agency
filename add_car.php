<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="add_carstyle.css">
  <link rel="stylesheet" href="styles/all.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <title>Document</title>
  <script>
function validateForm() {
  var x =plate_id.value;
  var y =brand.value;
  var z =status.value;
  var w=year.value;
  var q=office.value;
  var e=price.value;
  if (x == "") {
    alert("you must enter plate id");
    return false;
	}
  if (y == "") {
    alert("you must enter brand of car");
    return false;
	}
  if (z == "") {
    alert("you must enter car status");
    return false;
  }
  if (w =="") {
    alert("you must enter car year");
    return false;
	}
  if (q =="") {
    alert("you must enter car office");
    return false;
	}
	if (e =="") {
    alert("you must enter car price");
    return false;
	}
}
</script>
</head>
<body>

<?php
if(isset( $_SESSION['emailadmin']))
{
    ?>
<div class="background">
    <div class="features-section">
    <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="admin.php">Car Rental System</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="add_car.php">add car</a></li>
      <li><a href="update_car.php">update car</a></li>
      <li><a href="search_car.php">search car with information</a></li>
      <li ><a href="search_customer.php">search with customer information</a></li>
      <li><a href="search_reservation.php">search reservation with information</a></li>
      <li><a href="reports.php">daily reports</a></li>
      <li><a href="index.php">Log out</a></li>
    </ul>
  </div>
</nav>
    <div class="features">
        <div class="wrapper">
            <div class="card caption">
                <div class="habiba"> 
                    <p class="addcar">Add new car</p>
<form action="add_carr_db.php" onsubmit="return validateForm()" method="post" enctype="multipart/form-data" class="form1">
<input type="text" placeholder="enter car plate id " id="plate_id" name="plate_id" class="ip">
<input type="text" placeholder="enter car brand " id="brand" name="brand" class="ip">
<input type="text" placeholder="enter car model " id="model" name="model" class="ip">
<input type="text" placeholder="enter car color " id="color" name="color" class="ip">
<input type="text" placeholder="enter car status " id="status" name="status" class="ip">
<input type="text" placeholder="enter car year " id="year" name="year" class="ip">
<input type="text" placeholder="enter car description " id="description" name="description" class="ip">
<input type="text" placeholder="enter car rating " id="rating" name="rating" class="ip">
<input type="text" placeholder="enter car office location " id="office" name="office" class="ip">
<input type="text" placeholder="enter car price " id="price" name="price" class="ip">
<input type="file"  id="image" name="image" class="ip">
<input type="submit" value="add" class="add">

             
            </div>
            </div>
        </div>
        <div class="wrapper change">
            <div class=" box">
              <img src="mm.png" >
            </div>
        </div>
    </div>
</div>
</div>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>
<?php } 
else
{
   echo "<br/><br/><center><h1>This page only for admin</h1></center>";
}
    ?>
