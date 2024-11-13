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
session_start();
$servername_sql = "localhost";
$username_sql = "root";
$password_sql = "";
$dbname_Sql = "car_rent";
$mysqli = mysqli_connect($servername_sql, $username_sql, $password_sql, $dbname_Sql);
?>
<?php
$flag=0;
$plate_id_user2 =$_SESSION['plate_id'];
$email_user=$_SESSION['emailuser'];
$pickup_date_user=$_POST['pickup_date'];
$return_date_user=$_POST['return_date'];
$office_user=$_POST['office'];
$payment_user=$_POST['payment'];
$flag1=0;
$result = mysqli_query($mysqli,"select office.location from office,car where car.office_id=office.office_id AND car.plate_id='$plate_id_user2'");
while($row = mysqli_fetch_array($result))
{
    if($office_user== $row['location'])
    {
        $flag1=1;
    }
}

if($flag1==0)
{
    ?>
    <div class="cover">
	 <div class="img">
	 <div class="card">
	 <div class="exc">
	 <i class="fa fa-exclamation" style="font-size:70px;color:red" class="exc_ic"></i>
</div>
		  <div class="pointer2">
		 <b style="font-size: 20px;" > This car isn't available in that office,</b>
		 <br>
		 <b style="font-size: 20px;" > Enter back below to retry </b>
		</div>
		 <br>
		 <div>
		 <form action='view.php' method='post'>
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
$result = mysqli_query($mysqli,"select customer_id from customer where email='$email_user'");
while($row = mysqli_fetch_array($result)){
    $customer_id_user=$row['customer_id'];

}
$result = mysqli_query($mysqli,"select car_status from car where plate_id='$plate_id_user2'");
while($row = mysqli_fetch_array($result)){
    if($row['car_status'] == "out of service")
    {
        ?>
        <div class="cover">
	 <div class="img">
	 <div class="card">
	 <div class="exc">
	 <i class="fa fa-exclamation" style="font-size:70px;color:red" class="exc_ic"></i>
</div>
		  <div class="pointer2">
		 <b style="font-size: 20px;" > Car is out of service,</b>
		 <br>
		 <b style="font-size: 20px;" > Enter back below to choose another car </b>
		</div>
		 <br>
		 <div>
		 <form action='view.php' method='post'>
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
        $result1 = mysqli_query($mysqli,"select * from reservation where plate_id='$plate_id_user2'");
        while($row = mysqli_fetch_array($result1)){
            $flag=0;
            if($pickup_date_user >= $row['pickup_date'] && $pickup_date_user <= $row['return_date'])
            {
                ?>
                 <div class="cover">
	 <div class="img">
	 <div class="card">
	 <div class="exc">
	 <i class="fa fa-exclamation" style="font-size:70px;color:red" class="exc_ic"></i>
</div>
		  <div class="pointer2">
		 <b style="font-size: 20px;" > Can't reserve at this date,</b>
		 <br>
		 <b style="font-size: 20px;" > Enter back below to retry </b>
		</div>
		 <br>
		 <div>
		 <form action='view.php' method='post'>
		 <input type='submit' value='back' class="pointer">
		 </form>
</div>
	 </div>
	 </div>
 </div>
 <?php
                $flag=1;
                break;
            }
            else if ($return_date_user <= $row['return_date'] && $return_date_user >= $row['pickup_date'])
            {
                ?>
                <div class="cover">
                <div class="img">
                <div class="card">
                <div class="exc">
                <i class="fa fa-exclamation" style="font-size:70px;color:red" class="exc_ic"></i>
           </div>
                     <div class="pointer2">
                    <b style="font-size: 20px;" > Can't reserve at this date,</b>
                    <br>
                    <b style="font-size: 20px;" > Enter back below to retry </b>
                   </div>
                    <br>
                    <div>
                    <form action='view.php' method='post'>
                    <input type='submit' value='back' class="pointer">
                    </form>
           </div>
                </div>
                </div>
            </div>
            <?php
                $flag=1;
                break;
            }
            else
            {
                continue;
            }
        }
        if($flag==0)
        {
            $result2 = mysqli_query($mysqli,"INSERT INTO `reservation`(`pickup_date`, `return_date`, `payment`, `customer_id`, `plate_id`) VALUES ('$pickup_date_user','$return_date_user','$payment_user','$customer_id_user','$plate_id_user2')");
 ?>
                <div class="cover">
                <div class="img">
                <div class="card">
                <div class="exc">
                <i class="fa fa-exclamation" style="font-size:70px;color:red" class="exc_ic"></i>
           </div>
                     <div class="pointer2">
                    <b style="font-size: 20px;" > Car is reserved successfully,</b>
                    <br>
                    <b style="font-size: 20px;" > Enter back below to reserve another car </b>
                   </div>
                    <br>
                    <div>
                    <form action='view.php' method='post'>
                    <input type='submit' value='back' class="pointer">
                    </form>
           </div>
                </div>
                </div>
            </div>
            <?php
        }
    }

}
}
?>