<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="update_style.css">
  <link rel="stylesheet" href="styles/all.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <title>Document</title>
  <script>
function validateForm() {
  let inputDate = document.getElementById('plate_id');
  let inputDate2 = document.getElementById('brand');
  let inputDate3 = document.getElementById('model');
  let inputDate4 = document.getElementById('color');
  let inputDate5 = document.getElementById('status');
  let inputDate6 = document.getElementById('year');
  let inputDate7 = document.getElementById('description');
  let inputDate8 = document.getElementById('rating');
  let inputDate9 = document.getElementById('office');
  let inputDate10 = document.getElementById('price');
  if (inputDate.value=="") {
    alert("you must enter plate id");
    return false;
	}
	if (inputDate2.value=="" &&inputDate3.value=="" &&inputDate4.value=="" &&inputDate5.value=="" &&inputDate6.value=="" &&inputDate7.value=="" &&inputDate8.value=="" &&inputDate9.value=="" &&inputDate10.value=="" ) {
    alert("you must enter at least one value");
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
      <li ><a href="add_car.php">add car</a></li>
      <li class="active"><a href="update_car.php">update car</a></li>
      <li><a href="search_car.php">search car with information</a></li>
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
<p class="addcar">update car</p>
<form action="update_car_db.php" onsubmit="return validateForm()" method="post" class="form1">
<input type="text" placeholder="enter car plate id you wish to update" id="plate_id" name="plate_id" class="ip">
<input type="text" placeholder="enter updated car brand " id="brand" name="brand" class="ip">
<input type="text" placeholder="enter updated car model " id="model" name="model" class="ip">
<input type="text" placeholder="enter update car color " id="color" name="color" class="ip">
<input type="text" placeholder="enter update car status " id="status" name="status" class="ip">
<input type="text" placeholder="enter update car year " id="year" name="year" class="ip">
<input type="text" placeholder="enter update car description " id="description" name="description" class="ip">
<input type="text" placeholder="enter update car rating " id="rating" name="rating" class="ip">
<input type="text" placeholder="enter update car office " id="office" name="office" class="ip">
<input type="text" placeholder="enter update car price " id="price" name="price" class="ip">
<input type="submit" value="update" class="add">
</form>
</div>
            </div>
        </div>
        <div class="wrapper change">
            <div class=" box">
              <img src="www.jpg" >
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
