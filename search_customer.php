<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="search_custstyle.css">
  <link rel="stylesheet" href="styles/all.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <title>Document</title>
  <script>

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
      <li><a href="update_car.php">update car</a></li>
      <li><a href="search_car.php">search car with information</a></li>
      <li class="active"><a href="search_customer.php">search with customer information</a></li>
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
                    <p class="addcar">search for a customer</p>
<form action="search_customer_db.php"  method="post" class="form1">
<input type="text" id="customer_id" placeholder="enter customer id to search for " name="customer_id" class="ip">
<input type="text" id="fname" placeholder="enter customer first name to search for " name="fname" class="ip">
<input type="text" id="lname" placeholder="enter customer last name to search for" name="lname" class="ip">
<input type="text" id="email" placeholder="enter customer email to search for" name="email" class="ip">
 <input type="text" id="phone_no"placeholder="enter customer phone number to search for" name="phone_no" class="ip">
<input type="submit" value="search" class="add">
</form>
</div>
            </div>
        </div>
        <div class="wrapper change">
            <div class=" box">
              <img src="ss.webp" >
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

