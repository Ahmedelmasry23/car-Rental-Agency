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

$fname_user=$_POST['fname'];
$lname_user=$_POST['lname'];
?>
<div class="heading">
    Results of searching
</div>
<section class="container">
<table style="width: 100%;"border='1'>
<tr style="text-align: center;">
<td><strong>pickup date</td>
<td><strong>return date</td>
<td><strong>payment</td>
<td><strong>first name</td>
<td><strong>last name</td>
<td><strong>phone number</td>
<td><strong>plate_id</td>
<td><strong>brand</td>
<td><strong>model</td>
</tr>
<?php
$result = mysqli_query($mysqli,"SELECT reservation.pickup_date,reservation.return_date,reservation.payment, 
customer.fnamee,customer.lname,customer.phone_number,
car.plate_id,car.brand,car.model
FROM reservation,car,customer
where reservation.plate_id=car.plate_id AND reservation.customer_id=customer.customer_id AND
customer.fnamee='$fname_user' AND customer.lname='$lname_user';");
while($row = mysqli_fetch_array($result)){
	echo "<tr>";                               
	echo "<td>" . $row['pickup_date'] . "</td>";                      
	echo "<td>" . $row['return_date'] . "</td>";                       
	echo "<td>" . $row['payment'] . "</td>";
	echo "<td>" . $row['fnamee'] . "</td>";
	echo "<td>" . $row['lname'] . "</td>";
	echo "<td>" . $row['phone_number'] . "</td>";
    echo "<td>" . $row['plate_id'] . "</td>";
    echo "<td>" . $row['brand'] . "</td>";
    echo "<td>" . $row['model'] . "</td>";
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
