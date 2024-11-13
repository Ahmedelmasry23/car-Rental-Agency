<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="search_cardb.css">
  <link rel="stylesheet" href="styles/all.min.css">
  <title>Document</title>
</head>
<body>
<center>
<?php
$servername_sql = "localhost";
$username_sql = "root";
$password_sql = "";
$dbname_Sql = "car_rent";
$mysqli = mysqli_connect($servername_sql, $username_sql, $password_sql, $dbname_Sql);
?>

<div class="heading">
    Results of searching
</div>
<section class="container">

<table style="width: 70%;"border='1'>
<tr style="text-align: center;">
<td><strong>reservation id</td>
    <td><strong>pickup date</td>
    <td><strong>return date</td>
    <td><strong>payment</td>
    <td><strong>customer</td>
    <td><strong>plate_id</td>

</tr>

<?php
$pickup_date=$_POST['pickup_date'];

$flag=0;
if ($pickup_date!="")
{
	$result = mysqli_query($mysqli," select * from `reservation` where `pickup_date`='$pickup_date'");
while($row = mysqli_fetch_array($result)){
	echo "<tr>";
    echo "<td>" . $row['reserve_id'] . "</td>";
    echo "<td>" . $row['pickup_date'] . "</td>";
    echo "<td>" . $row['return_date'] . "</td>";
    echo "<td>" . $row['payment'] . "</td>";
    echo "<td>" . $row['customer_id'] . "</td>";
    echo "<td>" . $row['plate_id'] . "</td>";
    echo "</tr>";
	$flag=1;
}
}
else
{
header('Location:search_reservation.php');
}
?>
</table>
</section>

<?php
if($flag==0)
{
echo '<script>alert("0 results found")</script>';
}
?>
             <br>
			  <form action='search_reservation.php' method='post'>
			  <input type='submit' value='back' class="back">
			  </form>"
<?php
$mysqli->close();
?> 
<img src="res.webp" width="380px" class="image">

</center>
</body>
</html>
