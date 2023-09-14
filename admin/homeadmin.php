<?php
session_start();
if(!isset($_SESSION["loginadmin"])){
  header("Location: loginadmin.php");
  exit;
}
include ('../config/koneksi.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Pakar Kedelai | Beranda Admin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/custom.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
  </head>
  <body>
    <nav class="navbar navbar-inverse">
      <?php include "navadmin.php"; ?>
    </nav>
    <div class="container-fluid text-center">
      <div class="row content">
        <?php include "sidenav.php"; ?>
        <div class="col-sm-10 text-left">
          <div class="panel panel-info">
            <div class="panel-heading">HALAMAN ADMINISTRATOR</div>
            <div class="panel-body">
              <h5>Selamat datang <strong>Admin</strong> Silahkan pilih menu yang diinginkan! </h5>
            </div>
          </div>
          <div class="panel panel-info">
            <div class="panel-heading">PERAN ADMIN</div>
            <div class="panel-body">
              <p align=justify>Peran Admin Sistem Pakar Diagnosa Hama dan Penyakit Tanaman Kedelai antara lain mengupdate, mengedit dan menghapus data 
                yang berkaitan dengan tanaman kedelai khususnya Hama, Penyakit dan Gejala yang dijangkit oleh tanaman. Dengan kata lain admin sebagai pengelola
                Sistem Pakar Diagnosa Hama dan Penyakit tanaman kedelai. Admin dapat juga mengelola Data admin di menu <strong>Kelola Admin.</strong>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php include "../footer.php"; ?>
  </body>
</html>