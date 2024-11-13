<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="styles/all.min.css">
	<link rel="stylesheet" href="search_cardb.css">
</head>
<body>
<center>
<?php
$servername_sql = "localhost";
$username_sql = "root";
$password_sql = "";
$dbname_Sql = "car_rent";
$mysqli = mysqli_connect($servername_sql, $username_sql, $password_sql, $dbname_Sql);

$start_date_user=$_POST['day_date'];
?>
<div class="heading">
    Results of searching
</div>
<section class="container">
<table style="width: 100%;"border='1'>
<tr style="text-align: center;">
<td><strong>plate_id</td>
<td><strong>brand</td>
<td><strong>model</td>
<td><strong>car status</td>
</tr>
<?php
$result = mysqli_query($mysqli," SELECT plate_id,brand,model,car_status FROM car  
WHERE plate_id NOT IN (SELECT plate_id FROM reservation);");
while($row = mysqli_fetch_array($result)){
	echo "<tr>";
    echo "<td>" . $row['plate_id'] . "</td>";
    echo "<td>" . $row['brand'] . "</td>";
    echo "<td>" . $row['model'] . "</td>";
    echo "<td>" . $row['car_status'] . "</td>";
    echo "</tr>";
}
$result = mysqli_query($mysqli,"SELECT car.plate_id,brand,model,car_status,reservation.pickup_date,reservation.return_date
FROM car,reservation
WHERE car.plate_id=reservation.plate_id;");
while($row = mysqli_fetch_array($result)){
	echo "<tr>";
    echo "<td>" . $row['plate_id'] . "</td>";
    echo "<td>" . $row['brand'] . "</td>";
    echo "<td>" . $row['model'] . "</td>";
	if($start_date_user < $row["pickup_date"])
	{                                                  
	echo "<td>" . "active" . "</td>";
	}
	else if($start_date_user >= $row["pickup_date"] && $start_date_user <= $row["return_date"])
	{
	echo "<td>" . "rented" . "</td>";
	}
	else if($start_date_user > $row["return_date"])
	{
	echo "<td>" . "active" . "</td>";
	}
    echo "</tr>";
}
?>
</table>
</section>

             <br>
			  <form action='reports.php' method='post'>
			  <input type='submit' value='back' class="back">
			  </form>"
<?php
$mysqli->close();
?> 
<img src="res.webp" width="380px" class="image">

</center>
</body>
</html>
