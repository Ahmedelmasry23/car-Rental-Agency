
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Cars</title>
    <link rel="stylesheet" type="text/css" href= "https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
    <center>

<div class="col-md-12" >
    <div class="row" >



<?php
$servername_sql = "localhost";
$username_sql = "root";
$password_sql = "";
$dbname_Sql = "car_rent";
$mysqli = mysqli_connect($servername_sql, $username_sql, $password_sql, $dbname_Sql);

$brand_user=$_POST['brand'];
$model_user=$_POST['model'];
$color_user=$_POST['color'];
$status_user=$_POST['status'];
$year_user=$_POST['year'];
$description_user=$_POST['description'];
$rating_user=$_POST['rating'];
$price_user=$_POST['price'];
$flag=0;
if ($brand_user!="")
{
	$result = mysqli_query($mysqli," select * from car,office where car.office_id= office.office_id AND `brand`='$brand_user' order by plate_id DESC");
while($row = mysqli_fetch_array($result)){
	?> 
        <div class="col-md-4">
            <form method="post" action="reserve.php?id=<?=$row['plate_id'] ?>"> 
            <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" style='height: 150px;'>
            <h5><?= $row['brand'];?> <?=$row['model'];?> <?=$row['year']?></h5>
            <h5>$<?=$row['prices']?></h5>
            <h6>Description:<?=$row['description']?></h6>
            <h6>Rating:<?=$row['rating']?></h6>
			<h6>avaliable in :<?=$row['location']?></h6>
            <input type="submit" name="reserve" class="btn btn-warning my-2" value="reserve">  
        </form>
        </div> 
        <?php 
	$flag=1;
}
}
if ($model_user!="")
{
	$result = mysqli_query($mysqli," select * from car,office where car.office_id= office.office_id AND `model`='$model_user' order by plate_id DESC");
while($row = mysqli_fetch_array($result)){
	?> 
        <div class="col-md-4">
            <form method="post" action="reserve.php?id=<?=$row['plate_id'] ?>"> 
            <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" style='height: 150px;'>
            <h5><?= $row['brand'];?> <?=$row['model'];?> <?=$row['year']?></h5>
            <h5>$<?=$row['prices']?></h5>
            <h6>Description:<?=$row['description']?></h6>
            <h6>Rating:<?=$row['rating']?></h6>
            <h6>avaliable in :<?=$row['location']?></h6>
			<input type="submit" name="reserve" class="btn btn-warning my-2" value="reserve">  
        </form>
        </div> 
        <?php 
	$flag=1;
}
}
if ($status_user!="")
{
	$result = mysqli_query($mysqli," select * from car,office where car.office_id= office.office_id AND `car`='$status_user' order by plate_id DESC");
while($row = mysqli_fetch_array($result)){
	?> 
        <div class="col-md-4">
            <form method="post" action="reserve.php?id=<?=$row['plate_id'] ?>"> 
            <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" style='height: 150px;'>
            <h5><?= $row['brand'];?> <?=$row['model'];?> <?=$row['year']?></h5>
            <h5>$<?=$row['prices']?></h5>
            <h6>Description:<?=$row['description']?></h6>
            <h6>Rating:<?=$row['rating']?></h6>
            <h6>avaliable in :<?=$row['location']?></h6>
			<input type="submit" name="reserve" class="btn btn-warning my-2" value="reserve">  
        </form>
        </div> 
        <?php 
	$flag=1;
}
}
if ($color_user!="")
{
	$result = mysqli_query($mysqli," select * from car,office where car.office_id= office.office_id AND `color`='$color_user' order by plate_id DESC");
while($row = mysqli_fetch_array($result)){
	?> 
        <div class="col-md-4">
            <form method="post" action="reserve.php?id=<?=$row['plate_id'] ?>"> 
            <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" style='height: 150px;'>
            <h5><?= $row['brand'];?> <?=$row['model'];?> <?=$row['year']?></h5>
            <h5>$<?=$row['prices']?></h5>
            <h6>Description:<?=$row['description']?></h6>
            <h6>Rating:<?=$row['rating']?></h6>
            <h6>avaliable in :<?=$row['location']?></h6>
			<input type="submit" name="reserve" class="btn btn-warning my-2" value="reserve">  
        </form>
        </div> 
        <?php 
	$flag=1;
}
}
if ($year_user!="")
{
	$result = mysqli_query($mysqli," select * from car,office where car.office_id= office.office_id AND `year`='$year_user' order by plate_id DESC");
while($row = mysqli_fetch_array($result)){
	?> 
        <div class="col-md-4">
            <form method="post" action="reserve.php?id=<?=$row['plate_id'] ?>"> 
            <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" style='height: 150px;'>
            <h5><?= $row['brand'];?> <?=$row['model'];?> <?=$row['year']?></h5>
            <h5>$<?=$row['prices']?></h5>
            <h6>Description:<?=$row['description']?></h6>
            <h6>Rating:<?=$row['rating']?></h6>
            <h6>avaliable in :<?=$row['location']?></h6>
			<input type="submit" name="reserve" class="btn btn-warning my-2" value="reserve">  
        </form>
        </div> 
        <?php 
	$flag=1;
}
}
if ($description_user!="")
{
	$result = mysqli_query($mysqli," select * from car,office where car.office_id= office.office_id AND `description`='$description_user' order by plate_id DESC");
while($row = mysqli_fetch_array($result)){
	?> 
        <div class="col-md-4">
            <form method="post" action="reserve.php?id=<?=$row['plate_id'] ?>"> 
            <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" style='height: 150px;'>
            <h5><?= $row['brand'];?> <?=$row['model'];?> <?=$row['year']?></h5>
            <h5>$<?=$row['prices']?></h5>
            <h6>Description:<?=$row['description']?></h6>
            <h6>Rating:<?=$row['rating']?></h6>
            <h6>avaliable in :<?=$row['location']?></h6>
			<input type="submit" name="reserve" class="btn btn-warning my-2" value="reserve">  
        </form>
        </div> 
        <?php 
	$flag=1;
}
}
if ($rating_user!="")
{
	$result = mysqli_query($mysqli," select * from car,office where car.office_id= office.office_id AND `rating`<='$rating_user' order by plate_id DESC");
while($row = mysqli_fetch_array($result)){
	?> 
        <div class="col-md-4">
            <form method="post" action="reserve.php?id=<?=$row['plate_id'] ?>"> 
            <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" style='height: 150px;'>
            <h5><?= $row['brand'];?> <?=$row['model'];?> <?=$row['year']?></h5>
            <h5>$<?=$row['prices']?></h5>
            <h6>Description:<?=$row['description']?></h6>
            <h6>Rating:<?=$row['rating']?></h6>
			<h6>avaliable in :<?=$row['location']?></h6>	
		   <input type="submit" name="reserve" class="btn btn-warning my-2" value="reserve">  
        </form>
        </div> 
        <?php 
	$flag=1;
}
}
if ($price_user!="")
{
	$result = mysqli_query($mysqli," select * from car,office where car.office_id= office.office_id AND `prices`<='$price_user' order by plate_id DESC");
while($row = mysqli_fetch_array($result)){
	?> 
        <div class="col-md-4">
            <form method="post" action="reserve.php?id=<?=$row['plate_id'] ?>"> 
            <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" style='height: 150px;'>
            <h5><?= $row['brand'];?> <?=$row['model'];?> <?=$row['year']?></h5>
            <h5>$<?=$row['prices']?></h5>
            <h6>Description:<?=$row['description']?></h6>
            <h6>Rating:<?=$row['rating']?></h6>
			<h6>avaliable in :<?=$row['location']?></h6>	
		   <input type="submit" name="reserve" class="btn btn-warning my-2" value="reserve">  
        </form>
        </div> 
        <?php 
	$flag=1;
}
}
if($flag==0)
{
    $result = mysqli_query($mysqli," select * from car,office where car.office_id= office.office_id order by plate_id DESC");
while($row = mysqli_fetch_array($result)){
	?> 
        <div class="col-md-4">
            <form method="post" action="reserve.php?id=<?=$row['plate_id'] ?>"> 
            <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" style='height: 150px;'>
            <h5><?= $row['brand'];?> <?=$row['model'];?> <?=$row['year']?></h5>
            <h5>$<?=$row['prices']?></h5>
            <h6>Description:<?=$row['description']?></h6>
            <h6>Rating:<?=$row['rating']?></h6>
			<h6>avaliable in :<?=$row['location']?></h6>	
		   <input type="submit" name="reserve" class="btn btn-warning my-2" value="reserve">  
        </form>
        </div> 
        <?php 
}

}
 ?>  <br>
 <form action='view.php' method='post'>
 <input type='submit' value='back' class="back">
 </form>"
        </div>
        </div>
        </center>
</body>
</html>