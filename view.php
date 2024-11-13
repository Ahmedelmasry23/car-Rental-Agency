
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style/all.min.css">
    <link rel="stylesheet" href="style/homestyle.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</head>
<body>



    
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Car rental</a>
    </div>
    <ul class="nav navbar-nav">
    <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="catalog.php">model
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
        <form action='catalog.php' method='post'>
            <p> Enter model you want:</p>
          <li><input type="text" id="model" name="model"></li>
          <br>
          
			  <input type='submit' value='search' class="search">
        </ul>
      </li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="catalog.php">brand
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
            <p> Enter brand you want:</p>
          <li><input type="text" id="brand" name="brand"></li>
          <br>
			  <input type='submit' value='search' class="search">
        </ul>
      </li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="catalog.php">color
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
            <p> Enter color you want:</p>
          <li><input type="text" id="color" name="color"></li>
          <br>
			  <input type='submit' value='search' class="search">
        </ul>
      </li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="catalog.php">status
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
            <p> Enter status you want:</p>
          <li><input type="text" id="status" name="status"></li>
          <br>
			  <input type='submit' value='search' class="search">
        </ul>
      </li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="catalog.php">year
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
            <p> Enter year you want:</p>
          <li><input type="text" id="year" name="year"></li>
          <br>
			  <input type='submit' value='search' class="search">
        </ul>
      </li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="catalog.php">description
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
            <p> Enter description you want:</p>
          <li><input type="text" id="description" name="description"></li>
          <br>
			  <input type='submit' value='search' class="search">
        </ul>
      </li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="catalog.php">rating
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
            <p> Enter max rating you want:</p>
          <li><input type="text" id="rating" name="rating"></li>
          <br>
			  <input type='submit' value='search' class="search">
        </ul>
      </li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="catalog.php">price
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
            <p> Enter maxium price you want:</p>
          <li><input type="text" id="price" name="price"></li>
          <br>
			  <input type='submit' value='search' class="search">
        </ul>

      <li><button class="btn btn-danger navbar-btn">view all</button></li>
      </form>
      <li><a href="loginn.php">log out</a></li>
    </ul>
  </div>
</nav>
<br>
<section class="gallery-section">
<div class="wrapper">
      <div class="img-box">
        <img src="brand_model/kia_cerato.jpg">
      </div>
  </div>
  <div class="wrapper">
    <div class="img-box">
        <img src="brand_model/chevrolet_aveo.jpg">
    </div>
</div>
<div class="wrapper">
    <div class="img-box">
        <img src="brand_model/toyota_corolla.jpg">
    </div>
</div>
<div class="wrapper">
    <div class="img-box">
        <img src="brand_model/opel_astra.jpg">
    </div>
</div>
<div class="wrapper">
    <div class="img-box">
        <img src="brand_model/fiat_tipo.jpg">
    </div>
</div>
<div class="wrapper">
    <div class="img-box">
        <img src="brand_model/BMW_x2.jpg">
    </div>
</div>
<div class="wrapper">
    <div class="img-box">
        <img src="brand_model/suzuki_presso.jpg">
    </div>
</div>
<div class="wrapper">
    <div class="img-box">
        <img src="brand_model/jeep_wrangler.jpg">
    </div>
</div>
<div class="wrapper">
    <div class="img-box">
        <img src="brand_model/mitsubishi_lancer.jpg">
    </div>
</div>
</section>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="app.js"></script>
  
</body>
</html>