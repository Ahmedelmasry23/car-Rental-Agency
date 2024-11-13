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
	<link rel="stylesheet" href="notvalid_style.css">
	<link rel="stylesheet" href="styles/all.min.css">
</head>
<body>
<?php


$servername_sql = "localhost";
$username_sql = "root";
$password_sql = "";
$dbname_Sql = "car_rent";

$email_user=$_POST['email'];
$password_user=$_POST['password'];
$enc=$password_user;
$mysqli = mysqli_connect($servername_sql, $username_sql, $password_sql, $dbname_Sql);


//if ($mysqli->connect_error) {
//  die("Connection failed: " . $mysqli->connect_error);
//}
$result = mysqli_query($mysqli,"SELECT * FROM customer");
if (!$result) {
    die(mysqli_error($mysqli)); 
}
$flag_found=0;
if ((mysqli_num_rows($result)) > 0) {
	while($row = mysqli_fetch_array($result)) {
	  if($email_user==$row['email']) 
	  {
		if( $enc==$row['passwordd'])
		{			
			$flag_found=1;
			if($email_user=="habibakhaled20@yahoo.com")
			{
				if($row['passwordd']==$enc) 
				{
					$_SESSION['customer_id']=$row['customer_id'];
					$_SESSION['emailadmin']=$email_user;
					header('location:admin.php');
				}		
			}
			  else
			{
				$_SESSION['emailuser'] = $email_user;	
				header('Location:view.php');
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
				 <div class="pointer2">
				<b style="font-size: 20px;" >Sorry, wrong password,</b>
				<br>
				<b style="font-size: 20px;" > click back below to retry logging in</b>
			   </div>
				<br>
				<div>
				<form action='loginn.php' method='post'>
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
  if($flag_found==0)
  {
	  ?>
	   <br></br>
	   <body>
    <div class="cover">
        <div class="img">
        <div class="card">
		     <div class="pointer2">
			<b style="font-size: 20px;" >Sorry, you are not signed in,</b>
			<br>
			<b style="font-size: 20px;" > <a href="registration.php" >Register now</a> to reserve a car you want</b> 
			<br>
			<b style="font-size: 20px;" >or click back below to retry logging in</b>
           </div>
			<br>
			<div>
			<form action='loginn.php' method='post'>
			<input type='submit' value='back' class="pointer">
			</form>
  </div>
        </div>
        </div>
    </div>
	  
 <?php }
$mysqli->close();
?>
</body>
</html>
