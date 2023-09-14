<?php
session_start();
if(!isset($_SESSION["loginuser"])){
  header("Location: loginuser.php");
  exit;
}
include('../config/koneksi.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Pakar Kedelai | Tentang Sistem Pakar</title>
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
      <?php include "navuser.php" ?>  
    </nav>
    <div class="container-fluid text-center">
      <div class="row content">
        <div class="col-sm-12 text-left">
          <div class="panel panel-info">
            <div class="panel-heading">TENTANG SISTEM</div>
            <div class="panel-body">
              <p align=justifiy>
                Sistem pakar simulasi diagnosa hama dan penyakit tanaman kacang kedelai dibuat bertujuan untuk sebagai sarana konsultasi, 
                sarana belajar di suatu instansi dan dapat digunakan sebagai alat yang digunakan untuk mendiagnosa dan mensosialisasikan jenis hama dan penyakit.
              </p>
            </div>
          </div>
          <div class="panel panel-info">
            <div class="panel-heading">DIBUAT OLEH</div>
            <div class="panel-body">
              <p>Fakultas Sains dan Teknologi<br>
                 Program Studi Teknik Informatika<br>
                 Universitas Islam Raden Rahmat Malang</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php include "../footer.php"; ?>
  </body>
</html>