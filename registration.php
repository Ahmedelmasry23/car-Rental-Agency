<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="register_style.css">
    <title>Document</title>
    <script>
function validateForm() {
  var x =email.value;
  var y =password.value;
  var z =fname.value;
  var w=lname.value;
  var p=phone.value;
  var emailconfig=/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
  if (z == "") {
    alert("you must enter first name");
    return false;
	}
	if (w == "") {
    alert("you must enter last name");
    return false;
	}
  if (x == "") {
    alert("you must enter an email");
    return false;
	}
	  if(x.search(emailconfig)==-1)
  {
  alert("in valid email format");
  return false;
  }
  if (y == "") {
    alert("you must enter a password");
    return false;
  }

  if (p == "") {
    alert("you must enter your phone number");
    return false;
	}
}
</script>
</head>
<body>
   

      <div class="container">
       <form action="newregistration.php" class="content" onsubmit="return validateForm()" method="post">
            <h2 style="letter-spacing: 7px;">Register now</h2> <br><br>
            <input type="name" id="fname" name="fname" placeholder="Enter your first name" class="input"><br><br>
            <input type="name" id="lname" name="lname" placeholder="Enter your last name" class="input"><br><br>
            <input type="text" id="email" name="email" placeholder="Enter you email" class="input"><br><br>
            <input type="password" id="password" name="password" placeholder="choose a password"
                class="input"><br><br>
            <input type="" id="phone" name="phone"
                placeholder="enter your phone number" class="input"><br><br>
            <input type="checkbox" id="vehicle1" name="vehicle1" value="agree" checked>
            <label for="vehicle1"> I agree all statements in terms of services</label><br><br>
            <input type="submit" class="submitbutton" value="sign up" class="submitbutton" style="color: black;">
        </form>
        <center>
        <form action='index.php' method='post'>
			  <input type='submit' value='back' class="back">
			  </form>
</center>
    </div>
</body>
</html>

