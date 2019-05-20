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
          <li class="nav-item active">
            <a class="nav-link" href="Index.php">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="adminlog.php">Admin</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About Us</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">

    <div class="row">

      <div class="col-lg-3">

        <h1 class="my-4">Shop Name</h1>
        <div class="kotak_login">

          <form method="post" name="pendaftaran" action="act_reg.php">
  <table border=0 align="center" cellpadding=5 cellspacing=0>
  <tr>
  <td colspan=3><center><font size=5>PENDAFTARAN</font></center></td>
  </tr>
  <tr>
  <td>Nama</td><td>:</td><td><input type="text" name="nama"></td>
  </tr>
  <tr>
  <td>Email</td><td>:</td><td><input type="text" name="email"></td>
  </tr>
  <tr>
  <td>Username</td><td>:</td><td><input type="text" name="username"></td>
  </tr>
  <tr>
  <td>Password</td><td>:</td><td><input type="password" name="password"></td>
  </tr>
  <tr>
  <td colspan=2>&nbsp;</td>
  <td><input type="submit" name="submit" value="DAFTAR"></td>
  </tr>
  <tr>
  <td colspan=3><a href="loginn.php">LOGIN</a></td>
  </tr>
  </table>
</form>
            </div>
          </div>

        </div>

      </div>

    </div>


  </div>



  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white href="#" ">About Us</p>
    </div>
  </footer>


  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
