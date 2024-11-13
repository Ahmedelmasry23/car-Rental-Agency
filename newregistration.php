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
<center>
<?php

$servername_sql = "localhost";
$username_sql = "root";
$password_sql = "";
$dbname_Sql = "car_rent";


$fname_user=$_POST['fname'];
$lname_user=$_POST['lname'];
$password_user=$_POST['password'];
$email_user=$_POST['email'];
$phone_user=$_POST['phone'];

$conn = new mysqli($servername_sql, $username_sql, $password_sql, $dbname_Sql);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT email FROM customer";
$result = $conn->query($sql);
$flag_found=0;
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
	if($email_user==$row["email"])
	{
?>
		   <div class="cover">
        <div class="img">
        <div class="card">
		     <div class="pointer2">
			<b style="font-size: 20px;" >the email is already used,</b>
			<br>
			<b style="font-size: 20px;" > <a href="loginn.php" >login now</a> and enter your password</b> 
			<br>
			<b style="font-size: 20px;" >or click back below to re-register with a new mail</b>
           </div>
			<br>
			<div>
			<form action='registration.php' method='post'>
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
	$sql = "INSERT INTO customer (fnamee, lname, passwordd, email, phone_number)
    VALUES ('$fname_user', '$lname_user' ,MD5('$password_user'), '$email_user', '$phone_user')";
	if ($conn->query($sql) === TRUE) 
	{
      header('Location:view.php');
    }
    else 
	{
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?> 
</center>
</body>
</html>
