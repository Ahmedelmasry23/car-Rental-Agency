<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="reports.css">
  <link rel="stylesheet" href="styles/all.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <title>Document</title>
  <script>
function validateForm() {
  let inputDate = document.getElementById('start_date');
  let inputDate2 = document.getElementById('end_date');
  if (!inputDate.value) {
    alert("you must enter start date");
    return false;
	}
  if (!inputDate2.value) {
    alert("you must enter end date");
    return false;
  }
}
function validateForm4() {
  let inputDate = document.getElementById('startdate');
  let inputDate2 = document.getElementById('enddate');
  if (!inputDate.value) {
    alert("you must enter start date");
    return false;
	}
  if (!inputDate2.value) {
    alert("you must enter end date");
    return false;
  }
}
function validateForm2() {
  var x =day_date.value;
  if (x == "") {
    alert("you must enter day date");
    return false;
	}
}
function validateForm3() {
  var x =fname.value;
  var y =lname.value;
  if (x == "") {
    alert("you must first name ");
    return false;
	}
  if (y == "") {
    alert("you must last name");
    return false;
  }
}
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
      <li><a href="search_car.php">search car with information</a></li>
      <li ><a href="search_customer.php">search with customer information</a></li>
      <li ><a href="search_reservation.php">search with reservation information</a></li>
      <li class="active"><a href="reports.php">daily reports</a></li>
      <li><a href="index.php">Log out</a></li>
    </ul>
  </div>
</nav>

    <div class="features">
        <div class="wrapper">
            <div class="card caption">
                <div class="habiba"> 
                    <p class="addcar">Daily reports of reservation</p>
                    <form action="reports_db.php"  onsubmit="return validateForm()" method="post" class="form1">
<div>Enter start date:</div>
<input type="date" placeholder="enter start date " id="start_date" name="start_date" class="ip">
<div>Enter end date:</div>
<input type="date" placeholder="enter end date " id="end_date" name="end_date" class="ip">
<br>
<input type="text" placeholder="(optional) enter plate id if you want the reservation of specific car:" id="plate_id" name="plate_id" class="ip">
<input type="submit" value="Get report of reservations"  class="ip inew">
</form>
<p class="addcar">Status of all cars on specific day</p>
<form action="reports2_db.php"  onsubmit="return validateForm2()" method="post" class="form1">
<div>Enter day date :</div>
<input type="date" placeholder="enter day date " id="day_date" name="day_date" class="ip">
<input type="submit" value="Get report of all car status" class="ip inew" >
</form>
</div>
            </div>
        </div>
        <div class="wrapper change">
          <div class="form2">
        <p class="addcar">Reservations of specific customer</p>
<form action="reports3_db.php"  onsubmit="return validateForm3()" method="post" class="form1">
<input type="text" placeholder="enter customer first name if you want the reservation of specific customer" id="fname" name="fname" class="ip">
<input type="text" placeholder="enter customer last name if you want the reservation of specific customer" id="lname" name="lname" class="ip">
<input type="submit" value="Get report of reservations" class="ip inew">
</form>
<p class="addcar">Daily payments </p>
<form action="reports4_db.php"  onsubmit="return validateForm4()" method="post" class="form1">
<div>Enter start date : </div>
<input type="date" placeholder="enter start date " id="startdate" name="startdate" class="ip">
<div>Enter end date : </div>
<input type="date" placeholder="enter end date " id="enddate" name="enddate" class="ip">
<input type="submit" value="Get report of payments" class="ip inew">
</form>
<br>
</div>
        </div>
    </div>
</div>
</div>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>
