<?php
include 'config.php';

$nama = $_POST['nama'];
$email = $_POST['email'];
$username = $_POST ['username'];
$password = $_POST ['password'];

$simpan = mysqli_query ($koneksi, "INSERT INTO user
 VALUES ('', '$nama', '$email', '$username', '$password','user') ")
or die (mysqli_error($koneksi));

if ($simpan){
  header ("Location: loginn.php");
}else{
  echo "gagal";
}
?>
