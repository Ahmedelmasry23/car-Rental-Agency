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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style_admin.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style/all.min.css">
    <link rel="stylesheet" href="style/homestyle.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</head>
<body>


<?php
if(isset( $_SESSION['emailadmin']))
{
    ?>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="admin.php">Car Rental System</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="add_car.php">add car</a></li>
      <li><a href="update_car.php">update car</a></li>
      <li><a href="search_car.php">search with car information</a></li>
      <li><a href="search_customer.php">search with customer information</a></li>
      <li><a href="search_reservation.php">search with reservation information</a></li>
      <li><a href="reports.php">daily reports</a></li>
      <li><a href="index.php">Log out</a></li>
    </ul>
  </div>
</nav>

<p class="headerr">
  Welcome admin, choose from the above to search or modify or add
</p>

<section class="gallery-section">
  <div class="wrapper">
      <div class="img-box">
        <img src="brand_model/kia_cerato.jpg">
      </div>
  </div>
  <div class="wrapper">
    <div class="img-box">
        <img src="brand_model/chevrolet_aveo.jpg">
    </div>
</div>
<div class="wrapper">
    <div class="img-box">
        <img src="brand_model/toyota_corolla.jpg">
    </div>
</div>
<div class="wrapper">
    <div class="img-box">
        <img src="brand_model/opel_astra.jpg">
    </div>
</div>
<div class="wrapper">
    <div class="img-box">
        <img src="brand_model/fiat_tipo.jpg">
    </div>
</div>
<div class="wrapper">
    <div class="img-box">
        <img src="brand_model/BMW_x2.jpg">
    </div>
</div>
<div class="wrapper">
    <div class="img-box">
        <img src="brand_model/suzuki_presso.jpg">
    </div>
</div>
<div class="wrapper">
    <div class="img-box">
        <img src="brand_model/jeep_wrangler.jpg">
    </div>
</div>
<div class="wrapper">
    <div class="img-box">
        <img src="brand_model/mitsubishi_lancer.jpg">
    </div>
</div>
</section>
    <script src="app.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</body>
</html>

<?php } 
else
{
   echo "<br/><br/><center><h1>This page only for admin</h1></center>";
}
    ?>
