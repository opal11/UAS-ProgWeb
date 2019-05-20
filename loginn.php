<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">

  <title>Cardo Shop</title>

  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <link href="css/shop-homepage.css" rel="stylesheet">

</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Cardo Shop</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
            <a class="nav-link" href="Index.php">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About Us</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">

    <div class="row" style= "min-height:560px;">

      <div class="col-lg-3">

        <h1 class="my-4">Shop Name</h1>
        <div class="kotak_login">
      		<p class="tulisan_login">Silahkan login</p>

      		<form action="cek_login.php" method="post">
      			<label>Username</label>
      			<input type="text" name="username" class="form_login" placeholder="Username .." required="required">

      			<label>Password</label>
      			<input type="password" name="password" class="form_login" placeholder="Password .." required="required">

      			<input type="submit" class="tombol_login" value="LOGIN">

      			<br/>
      			<br/>
      			<center>
      				<a class="link" href="index.php">kembali</a>
      			</center>
      		</form>
            </div>
          </div>

        </div>

      </div>

    </div>


  </div>



  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white href="about.php" ">About Us</p>
    </div>
  </footer>


  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
