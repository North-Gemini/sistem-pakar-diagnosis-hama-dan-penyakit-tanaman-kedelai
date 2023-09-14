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
    <title>Pakar Kedelai | Hasil Dignosa</title>
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
      <?php include "navuser.php"; ?>
    </nav>
    <div class="container-fluid text-center">
      <div class="row content">
        <div class="col-sm-12 text-left">
          <div class="panel panel-info">
            <div class="panel-heading">IDENTITAS PENYAKIT</div>
            <div class="panel-body">
              <div class="form-group" method="POST">
                <br><label class="control-label col-sm-2">ID Hama/Penyakit</label>
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
                <br><label class="control-label col-sm-2">Nama Hama/Penyakit</label>
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
                <br><label class="control-label col-sm-2">Jenis Tanaman</label>
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
                <br><label class="control-label col-sm-2">Gejala</label>
                <div class="col-sm-10">
                  <?php
                  $tampil = "SELECT * FROM penyakit p, basispengetahuan b where p.idpenyakit='" . $_GET['id'] . "' and p.namapenyakit=b.namapenyakit";
                  $sql = mysqli_query($konek_db, $tampil);
                  while ($data = mysqli_fetch_array($sql)) {
                    echo "<input type='text'  class='form-control' id='jenistanaman' readonly value='" . $data['gejala'] . "'><br>";
                  }
                  ?>
                </div>
              </div>
              <div class="form-group" method="POST">
                <br><label class="control-label col-sm-2">Terjangkit :</label>
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
                <br><label class="control-label col-sm-2">Kultur Teknis</label><br>
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
                <br><label class="control-label col-sm-2">Fisik Mekanis</label><br>
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
                <br><label class="control-label col-sm-2">Kimiawi</label><br>
                <div class="col-sm-10">
                  <?php
                  $tampil = "SELECT * FROM penyakit where idpenyakit='" . $_GET['id'] . "'";
                  $sql = mysqli_query($konek_db, $tampil);
                  while ($data = mysqli_fetch_array($sql)) {
                    echo "<textarea  rows='8' class='form-control' id='penanganan' readonly>" . $data['kimiawi'] . "</textarea><br>";
                  }
                  ?>
                </div>
              </div>
              <div class="form-group" method="POST">
                <br><label class="control-label col-sm-2">Hayati</label><br>
                <div class="col-sm-10">
                  <?php
                  $tampil = "SELECT * FROM penyakit where idpenyakit='" . $_GET['id'] . "'";
                  $sql = mysqli_query($konek_db, $tampil);
                  while ($data = mysqli_fetch_array($sql)) {
                    echo "<textarea rows='8' class='form-control' id='penanganan' readonly>" . $data['hayati'] . "</textarea><br>";
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