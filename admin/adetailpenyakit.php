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
    <title>Pakar Kedelai | Detail Hama dan Penyakit</title>
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
            <div class="panel-heading">DETAIL PENYAKIT</div>
            <div class="panel-body">
              <div class="form-group" method="POST">
                <br><label class="control-label col-sm-2">ID</label>
                <div class="col-sm-10">
                  <?php
                  $tampil = "SELECT * FROM penyakit where idpenyakit='" . $_GET['id'] . "'";
                  $sql = mysqli_query($konek_db, $tampil);
                  while ($data = mysqli_fetch_array($sql)) {
                    echo "<input type='text'  class='form-control' id='idpenyakit' readonly value='" . $data['idpenyakit'] . "'><br>";
                  }
                  ?>
                </div>
              </div>
              <div class="form-group" method="POST">
                <br><label class="control-label col-sm-2">NAMA</label>
                <div class="col-sm-10">
                  <?php
                  $tampil = "SELECT * FROM penyakit where idpenyakit='" . $_GET['id'] . "'";
                  $sql = mysqli_query($konek_db, $tampil);
                  while ($data = mysqli_fetch_array($sql)) {
                    echo "<input type='text'  class='form-control' id='namapenyakit' readonly value='" . $data['namapenyakit'] . "'><br>";
                  }
                  ?>
                </div>
              </div>
              <div class="form-group" method="POST">
                <br><label class="control-label col-sm-2">JENIS</label>
                <div class="col-sm-10">
                  <?php
                  $tampil = "SELECT * FROM penyakit where idpenyakit='" . $_GET['id'] . "'";
                  $sql = mysqli_query($konek_db, $tampil);
                  while ($data = mysqli_fetch_array($sql)) {
                    echo "<input type='text'  class='form-control' id='jenistanaman' readonly value='" . $data['jenistanaman'] . "'><br>";
                  }
                  ?>
                </div>
              </div>
              <div class="form-group" method="POST">
                <br><label class="control-label col-sm-2">GEJALA</label>
                <div class="col-sm-10">
                  <?php
                  $tampil = "SELECT * FROM penyakit p, basispengetahuan b where p.idpenyakit='" . $_GET['id'] . "' and p.namapenyakit=b.namapenyakit";
                  $sql = mysqli_query($konek_db, $tampil);
                  while ($data = mysqli_fetch_array($sql)) {
                    echo "<input type='text'  class='form-control' id='jenistanaman' readonly value='" . $data['gejala'] . "'><br>";
                  }
                  echo "<input type='text'  class='form-control' id='jenistanaman' readonly value=''><br>";
                  ?>
                </div>
              </div>
              <div class="form-group" method="POST">
                <br><label class="control-label col-sm-2">TERJANGKIT</label>
                <div class="col-sm-10">
                  <?php
                  $tampil = "SELECT * FROM penyakit where idpenyakit='" . $_GET['id'] . "'";
                  $sql = mysqli_query($konek_db, $tampil);
                  while ($data = mysqli_fetch_array($sql)) {
                    echo "<input type='text'  class='form-control' id='terjangkit' readonly value='" . $data['terjangkit'] . "'><br>";
                  }
                  ?>
                </div>
              </div>
            </div>
          </div>
          <div class="panel panel-info">
            <div class="panel-heading">CARA PENGENDALIAN</div>
            <div class="panel-body">
              <div class="form-group" method="POST">
                <br><label class="control-label col-sm-2">KULTUR TEKNIS</label><br>
                <div class="col-sm-10">
                  <?php
                  $tampil = "SELECT * FROM penyakit where idpenyakit='" . $_GET['id'] . "'";
                  $sql = mysqli_query($konek_db, $tampil);
                  while ($data = mysqli_fetch_array($sql)) {
                    echo "<textarea  rows='8' class='form-control' id='penanganan'  readonly>" . $data['kulturteknis'] . "</textarea><br>";
                  }
                  ?>
                </div>
              </div>
              <div class="form-group" method="POST">
                <br><label class="control-label col-sm-2">FISIK MEKANIS</label><br>
                <div class="col-sm-10">
                  <?php
                  $tampil = "SELECT * FROM penyakit where idpenyakit='" . $_GET['id'] . "'";
                  $sql = mysqli_query($konek_db, $tampil);
                  while ($data = mysqli_fetch_array($sql)) {
                    echo "<textarea rows='8' class='form-control' id='penanganan' readonly>" . $data['fisikmekanis'] . "</textarea><br>";
                  }
                  ?>
                </div>
              </div>
              <div class="form-group" method="POST">
                <br><label class="control-label col-sm-2">HAYATI</label><br>
                <div class="col-sm-10">
                  <?php
                  $tampil = "SELECT * FROM penyakit where idpenyakit='" . $_GET['id'] . "'";
                  $sql = mysqli_query($konek_db, $tampil);
                  while ($data = mysqli_fetch_array($sql)) {
                    echo "<textarea  rows='8' class='form-control' id='penanganan' readonly>" . $data['hayati'] . "</textarea><br>";
                  }
                  ?>
                </div>
              </div>
              <div class="form-group" method="POST">
                <br><label class="control-label col-sm-2">KIMIAWI</label><br>
                <div class="col-sm-10">
                  <?php
                  $tampil = "SELECT * FROM penyakit where idpenyakit='" . $_GET['id'] . "'";
                  $sql = mysqli_query($konek_db, $tampil);
                  while ($data = mysqli_fetch_array($sql)) {
                    echo "<textarea rows='8' class='form-control' id='penanganan' readonly>" . $data['kimiawi'] . "</textarea><br>";
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