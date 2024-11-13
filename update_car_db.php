<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="notvalid_style.css">
	<link rel="stylesheet" href="styles/all.min.css">
</head>
<body>
<center>
<?php
$servername_sql = "localhost";
$username_sql = "root";
$password_sql = "";
$dbname_Sql = "car_rent";

$plate_id_user=$_POST['plate_id'];
$brand_user=$_POST['brand'];
$model_user=$_POST['model'];
$color_user=$_POST['color'];
$status_user=$_POST['status'];
$year_user=$_POST['year'];
$description_user=$_POST['description'];
$rating_user=$_POST['rating'];
$office_user=$_POST['office'];
$price_user=$_POST['price'];

$conn = new mysqli($servername_sql, $username_sql, $password_sql, $dbname_Sql);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT plate_id FROM car";
$result = $conn->query($sql);
$flag_found=0;
$flag=0;
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
	if($plate_id_user==$row["plate_id"])
	{
		$flag_found=1;
		break;
	}
  }
} 
if($flag_found==1)
{
if ($brand_user!="")
{
$sql = " UPDATE `car` SET `brand`='$brand_user' where `plate_id`=$plate_id_user";
$result = $conn->query($sql);
}
if ($model_user!="")
{
$sql = " UPDATE `car` SET `model`='$model_user' where `plate_id`=$plate_id_user";
$result = $conn->query($sql);
}
if ($color_user!="")
{
$sql = " UPDATE `car` SET `color`='$color_user' where `plate_id`=$plate_id_user";
$result = $conn->query($sql);
}
if ($status_user!="")
{
$sql = " UPDATE `car` SET `car_status`='$status_user' where `plate_id`=$plate_id_user";
$result = $conn->query($sql);
}
if ($year_user!="")
{
$sql = " UPDATE `car` SET `year`='$year_user' where `plate_id`=$plate_id_user";
$result = $conn->query($sql);
}
if ($description_user!="")
{
$sql = " UPDATE `car` SET `brand`='$description_user' where `plate_id`=$plate_id_user";
$result = $conn->query($sql);
}
if ($rating_user!="")
{
$sql = " UPDATE `car` SET `rating`='$rating_user' where `plate_id`=$plate_id_user";
$result = $conn->query($sql);
}
if ($office_user!="")
{
	$sql = "SELECT office_id ,location  FROM office";
    $result = $conn->query($sql);
	if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
	if($office_user==$row["location"])
	{
		$office_id_user=$row["office_id"];
		$flag=1;
		break;
	}
  }
} 
if($flag==1)
{$sql = " UPDATE `car` SET `office_id`='$office_id_user' where `plate_id`=$plate_id_user";
$result = $conn->query($sql);}
else
{
	?>
	<br></br>
	<body>
 <div class="cover">
	 <div class="img">
	 <div class="card">
		 <div class="exc">
	 <i class="fa fa-exclamation" style="font-size:70px;color:red" class="exc_ic"></i>
</div>
		  <div class="pointer2">
		 <b style="font-size: 20px;" >can not update office of car ,</b>
		 <br>
		 <b style="font-size: 20px;" > entered location is not found,</b> 
		 <br>
		 <b style="font-size: 20px;" > click back below to retry another location</b>
		</div>
		 <br>
		 <div>
		 <form action='update_car.php' method='post'>
		 <input type='submit' value='back' class="pointer">
		 </form>
</div>
	 </div>
	 </div>
 </div>
 <?php
}

}
if ($price_user!="")
{
$sql = " UPDATE `car` SET `price`='$price_user' where `plate_id`=$plate_id_user";
$result = $conn->query($sql);
}?>
<br></br>
<body>
<div class="cover">
 <div class="img">
 <div class="card">
 <div class="exc">
			<i class="fa fa-check" aria-hidden="true" style="font-size:90px;color:green" class="exc_ic"></i>
  </div>
	  <div class="pointer2">
	 <b style="font-size: 20px;" >car updated succesffully ,</b>
	 <br>
	 <b style="font-size: 20px;" > click back below to update a new car</b> 
	</div>
	 <br>
	 <div>
	 <form action='update_car.php' method='post'>
	 <input type='submit' value='back' class="pointer">
	 </form>
</div>
 </div>
 </div>
</div>
<?php
}
else
{
	?>
	<br></br>
	<body>
 <div class="cover">
	 <div class="img">
	 <div class="card">
		 <div class="exc">
	 <i class="fa fa-exclamation" style="font-size:70px;color:red" class="exc_ic"></i>
</div>
		  <div class="pointer2">
		 <b style="font-size: 20px;" >can not update  car ,</b>
		 <br>
		 <b style="font-size: 20px;" > entered plate id is not found,</b> 
		 <br>
		 <b style="font-size: 20px;" > click back below to retry another one</b>
		</div>
		 <br>
		 <div>
		 <form action='update_car.php' method='post'>
		 <input type='submit' value='back' class="pointer">
		 </form>
</div>
	 </div>
	 </div>
 </div>


<?php }
$conn->close();
?>
</center>
</body>
</html>
