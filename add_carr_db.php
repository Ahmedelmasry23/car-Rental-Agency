<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="notvalid_add.css">
	<link rel="stylesheet" href="styles/all.min.css">
</head>
<center>
<body>
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

$fileName = basename($_FILES["image"]["name"]); 
$fileType = pathinfo($fileName, PATHINFO_EXTENSION);
$image = $_FILES['image']['tmp_name']; 
$imgContent = addslashes(file_get_contents($image)); 
         

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
			<b style="font-size: 20px;" >Sorry, plate id is already used,</b>
			<br>
			<b style="font-size: 20px;" > click back below </b> 
			<br>
			<b style="font-size: 20px;" >to enter a new plate id</b>
           </div>
			<br>
			<div>
			<form action='add_car.php' method='post'>
			<input type='submit' value='back' class="pointer">
			</form>
  </div>
        </div>
        </div>
    </div>
			  <?php
		$flag_found=1;
		break;
	}
  }
} 

if($flag_found==0)
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
if ($flag==1){
	$sql = "INSERT INTO `car`(`plate_id`, `brand`, `model`, `color`, `car_status`, `year`, `description`, `rating`, `office_id`, `prices`,`image`)
	VALUES ('$plate_id_user','$brand_user','$model_user','$color_user','$status_user','$year_user','$description_user','$rating_user','$office_id_user','$price_user','$imgContent')";
	if ($conn->query($sql) === TRUE) 
	{
	?>
 <br></br>
	   <body>
    <div class="cover">
        <div class="img">
        <div class="card">
			<div class="exc">
			<i class="fa fa-check" aria-hidden="true" style="font-size:90px;color:green" class="exc_ic"></i>
  </div>
		     <div class="pointer2">
			<b style="font-size: 20px;" >car added successfully</b>
			<br>
			<b style="font-size: 20px;" > click back below </b> 
			<br>
			<b style="font-size: 20px;" >to enter a new one</b>
           </div>
			<br>
			<div>
			<form action='add_car.php' method='post'>
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
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
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
		 <b style="font-size: 20px;" >can not add this car,</b>
		 <br>
		 <b style="font-size: 20px;" > in valid office location, </b> 
		 <br>
		 <b style="font-size: 20px;" > enter back below to retry a valid location</b>
		</div>
		 <br>
		 <div>
		 <form action='add_car.php' method='post'>
		 <input type='submit' value='back' class="pointer">
		 </form>
</div>
	 </div>
	 </div>
 </div>
	
<?php
}

$conn->close();
}

?> 
</center>
</body>
</html>
