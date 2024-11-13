<?php
session_start();
?>
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


<table style="width: 70% ;height:150px;"border='1'>
<tr style="text-align: center;">
<td><strong>plate_id</td>
    <td><strong>brand</td>
    <td><strong>model</td>
    <td><strong>color</td>
    <td><strong>car status</td>
    <td><strong>year</td>
    <td><strong>description</td>
    <td><strong>rating</td>
    <td><strong>office_id</td>
    <td><strong>price</td>

</tr>

<?php
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
$flag=0;
if($plate_id_user=="" && $brand_user=="" && $model_user=="" && $color_user=="" && $status_user=="" && $year_user=="" && $description_user=="" && $rating_user=="" &&$office_user==""  && $price_user=="")
{
header('Location:search_car.php');
}
else
{
if ($plate_id_user!="")
{
	$result1 ="select * from `car` where `plate_id`= $plate_id_user  "; 
}
else
{
	$result1 ="select * from `car`";
}

if ($brand_user!="")
{
	$result2 ="select * from `car` where `brand`= '$brand_user'  "; 
	
}
else
{
	$result2 ="select * from `car`";
}

if ($model_user!="")
{
$result3 ="select * from `car` where `model`= '$model_user' ";

}
else
{
	$result3 ="select * from `car`";
}
if ($color_user!="")
{
$result4 ="select * from `car` where `color`= '$color_user' ";

}
else
{
	$result4 ="select * from `car`";
}
if ($status_user!="")
{
$result5 ="select * from `car` where `car_status`= '$status_user' ";

}
else
{
	$result5 ="select * from `car`";
}
if ($year_user!="")
{
$result6 ="select * from `car` where `year`= $year_user ";

}
else
{
	$result6 ="select * from `car`";
}
if ($description_user!="")
{
$result7 ="select * from `car` where `description`= '$description_user' ";

}
else
{
	$result7 ="select * from `car`";
}
if ($rating_user!="")
{
$result8 ="select * from `car` where `rating`= $rating_user ";
}
else
{
	$result8 ="select * from `car`";
}
if ($office_user!="")
{
$result9 ="select * from `car` where `office_id`= $office_user ";

}
else
{
	$result9 ="select * from `car`";
}
if ($price_user!="")
{
$result10 ="select * from `car` where `prices`= $price_user ";
}
else
{
	$result10 ="select * from `car`";
}

$result11="$result1 INTERSECT $result2  INTERSECT $result3  INTERSECT $result4  INTERSECT $result5  INTERSECT $result6  
INTERSECT $result7  INTERSECT $result8  INTERSECT $result9  INTERSECT $result10  ";
$result = $mysqli->query($result11);
while($row = mysqli_fetch_array($result)){
	echo "<tr>";
    echo "<td>" . $row['plate_id'] . "</td>";
    echo "<td>" . $row['brand'] . "</td>";
    echo "<td>" . $row['model'] . "</td>";
    echo "<td>" . $row['color'] . "</td>";
    echo "<td>" . $row['car_status'] . "</td>";
    echo "<td>" . $row['year'] . "</td>";
    echo "<td>" . $row['description'] . "</td>";
    echo "<td>" . $row['rating'] . "</td>";
    echo "<td>" . $row['office_id'] . "</td>";
    echo "<td>" . $row['prices'] . "</td>";
    echo "</tr>";
	$flag=1;
}
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
			  <form action='search_car.php' method='post'>
			  <input type='submit' value='back' class="back">
			  </form>"
              <?php
$mysqli->close();
?> 
<img src="res.webp" width="380px" class="image">

</center>
</body>
</html>
