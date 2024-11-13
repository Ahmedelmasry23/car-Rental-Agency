<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="login_style.css">
  <title>Document</title>
  <script>
function validateForm() {
  var x =email.value;
  var y =password.value;
  var emailconfig=/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
  if (x == "") {
    alert("you must enter an email");
    return false;
	}
  if (y == "") {
    alert("you must enter a password");
    return false;
  }
  if(x.search(emailconfig)==-1)
  {
  alert("in valid email format");
  return false;
  }
}
</script>
</head>
<body>
<div class="container">
            <div class="content">
                <form action="new_login.php" onsubmit="return validateForm()" method="post">
                <input type="text" id="email" name="email" class="child" placeholder="Enter your email :"><br><br>
                <input type="password" id="password" name="password" class="child" placeholder="Enter your password :"><br><br>
                <input type="submit" class="submitbutton" value="login">
</form>
                <br><br>
                <b style="font-size: 15px;">Not Logged in</b> , <a href="registration.php">Register now</a>
        
            </div>
            
            <form action='index.php' method='post'>
			  <input type='submit' value='back' class="back">
			  </form>

        </div>

</body>
</html>

