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
$start_date_user=$_POST['startdate'];
$end_date_user=$_POST['enddate'];
?>
<div class="heading">
    Results of searching
</div>
<section class="container">
<table style="width: 100%;"border='1'>
<tr style="text-align: center;">
<td><strong>date</td>
<td><strong>total_payment</td>
</tr>
<?php

$result = mysqli_query($mysqli,"CALL fill_calendar('$start_date_user', '$end_date_user');");
$result = mysqli_query($mysqli,"
SELECT
    calendar.datefield AS DATE,
    IFNULL(SUM((car.prices)*DATEDIFF(return_date, pickup_date)),0) AS total_payment
FROM
    car
JOIN reservation ON car.plate_id = reservation.plate_id
RIGHT JOIN calendar ON(
        DATE(reservation.pickup_date) = calendar.datefield
    )
WHERE
    (
        calendar.datefield BETWEEN('$start_date_user') AND('$end_date_user')
    )
GROUP BY
    DATE;");
while($row = mysqli_fetch_array($result)){
	echo "<tr>";                               
	echo "<td>" . $row['DATE'] . "</td>";                      
	echo "<td>" . $row['total_payment'] . "</td>";                       
    echo "</tr>";
}
$result = mysqli_query($mysqli,"DELETE FROM calendar;");
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
