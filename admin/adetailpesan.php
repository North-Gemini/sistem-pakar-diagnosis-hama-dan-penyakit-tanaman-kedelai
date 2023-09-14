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
    <title>Pakar Kedelai | Detail Pesan</title>
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
            <div class="panel-heading">DETAIL PESAN</div>
            <div class="panel-body">
              <div class="form-group" method="POST">
                <br><label class="control-label col-sm-2">NAMA</label>
                <div class="col-sm-10">
                  <?php
                  $tampil = "SELECT * FROM kontak where idkontak='" . $_GET['id'] . "'";
                  $sql = mysqli_query($konek_db, $tampil);
                  while ($data = mysqli_fetch_array($sql)) {
                    echo "<input type='text'  class='form-control' id='namakontak' readonly value='" . $data['namakontak'] . "'><br>";
                  }
                  ?>
                </div>
              </div>
              <div class="form-group" method="POST">
                <br><label class="control-label col-sm-2">EMAIL</label>
                <div class="col-sm-10">
                  <?php
                  $tampil = "SELECT * FROM kontak where idkontak='" . $_GET['id'] . "'";
                  $sql = mysqli_query($konek_db, $tampil);
                  while ($data = mysqli_fetch_array($sql)) {
                    echo "<input type='text'  class='form-control' id='emailkontak' readonly value='" . $data['emailkontak'] . "'><br>";
                  }
                  ?>
                </div>
              </div>
              <div class="form-group" method="POST">
                <br><label class="control-label col-sm-2">TELEPON</label>
                <div class="col-sm-10">
                  <?php
                  $tampil = "SELECT * FROM kontak where idkontak='" . $_GET['id'] . "'";
                  $sql = mysqli_query($konek_db, $tampil);
                  while ($data = mysqli_fetch_array($sql)) {
                    echo "<input type='text'  class='form-control' id='teleponkontak' readonly value='" . $data['teleponkontak'] . "'><br>";
                  }
                  ?>
                </div>
              </div>
              <div class="form-group" method="POST">
                <br><label class="control-label col-sm-2">PESAN</label><br>
                <div class="col-sm-10">
                  <?php
                  $tampil = "SELECT * FROM kontak where idkontak='" . $_GET['id'] . "'";
                  $sql = mysqli_query($konek_db, $tampil);
                  while ($data = mysqli_fetch_array($sql)) {
                    echo "<textarea  rows='8' class='form-control' id='pesan'  readonly>" . $data['pesan'] . "</textarea><br>";
                  }
                  ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php include "../footer.php"; ?>
  </body>
</html>