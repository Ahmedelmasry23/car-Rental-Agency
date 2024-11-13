<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
	<link rel="stylesheet" href="styles/all.min.css">
    <link rel="stylesheet" href="reserve.css">
<script>
    function validateForm() {
  let inputDate = document.getElementById('pickup_date');
  let inputDate2 = document.getElementById('return_date');
  let inputDate3 = document.getElementById('office');
  let inputDate4 = document.getElementById('payment');
  if (!inputDate.value) {
    alert("you must enter pick up date");
    return false;
	}
    if (!inputDate2.value) {
    alert("you must enter return date");
    return false;
	}
  if (inputDate3.value=="") {
    alert("you must enter office");
    return false;
  }
  if (inputDate4.value=="") {
    alert("you must enter payment method");
    return false;
  }
  else
  {
    if(inputDate4.value=="cash" || inputDate4.value=="visa")
    {
        return true;
    } 
    else
    {
        alert("you must enter a valid payment method (cash or visa only)");
    return false;
    }
  }
  


}
</script>
</head>
<center>
<body>
<?php
$servername_sql = "localhost";
$username_sql = "root";
$password_sql = "";
$dbname_Sql = "car_rent";
$mysqli = mysqli_connect($servername_sql, $username_sql, $password_sql, $dbname_Sql);
$plate_id_user=$_GET['id'];
$_SESSION['plate_id'] = $plate_id_user;
?>
<div class="background">
    <div class="features-section">
    <div class="features">
        <div class="wrapper">
            <div class="card caption">
                <div class="habiba"> 
                    <p class="addcar">Reserve now</p>
                    <br>
<form action="reserve_db.php" onsubmit="return validateForm()" method="post"  class="form1">
<div>Enter pickup date: </div>
<input type="date" placeholder="enter pickup date" id="pickup_date" name="pickup_date" class="ip">
<div> Enter return date </div>
<input type="date" placeholder="enter return date " id="return_date" name="return_date" class="ip" >
<input type="text" placeholder="enter office (country)" id="office" name="office" class="ip" >
<input type="text" placeholder="enter payment method (cash or visa)" id="payment" name="payment" class="ip" >
<br><br>
<center>
<input type="submit" value="Reserve" class="ip inew">
 <a href="view.php" class="ip">back </a>
</form>
</center>
</form>
</div>
            </div>
        </div>

    </div>
</div>
</div>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>
