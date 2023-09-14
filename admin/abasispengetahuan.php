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
    <title>Pakar Kedelai | Input Basis Pengetahuan</title>
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
          <form id="form1" name="form1" method="post" action="abasispengetahuan.php">
            <div class="panel panel-info">
              <div class="panel-heading">JENIS TANAMAN</div>
              <div class="panel-body">
                <input type="checkbox" value="Kedelai"> Kedelai <br>
              </div>
            </div>
          </form>
          <form id="form1" name="form1" method="post">
            <div class="panel panel-info">
              <div class="panel-heading">HAMA / PENYAKIT</div>
              <div class="panel-body">
                <select class="form-control" name="penyakit">
                  <option disabled selected value>Pilih Hama / Penyakit</option>
                  <?php
                  $query1 = mysqli_query($konek_db, 'SELECT * FROM penyakit');
                  while ($hasil = mysqli_fetch_array($query1)) {
                    echo "<option value='" . $hasil['namapenyakit'] . "'>" . $hasil['idpenyakit'] . " " . $hasil['namapenyakit'] . "</option>";
                  }
                  ?>
                </select>
              </div>
            </div>
            <form id="form2" name="form2" method="post" action="udiagnosa.php">
              <div class="panel panel-info">
                <div class="panel-heading">GEJALA AKAR</div>
                <div class="panel-body">
                  <?php
                  $query = mysqli_query($konek_db, 'SELECT * FROM gejala WHERE daerah="akar"');
                  while ($data = mysqli_fetch_array($query)) {
                    echo "<input type='checkbox' value='" . $data['gejala'] . "' name='gejala[]' /> " . $data['gejala'] . "<br>";
                  }
                  ?>
                  <br>
                </div>
              </div>
              <div class="panel panel-info">
                <div class="panel-heading">GEJALA BATANG</div>
                <div class="panel-body">
                  <?php
                  $query = mysqli_query($konek_db, 'SELECT * FROM gejala WHERE daerah="batang"');
                  while ($data = mysqli_fetch_array($query)) {
                    echo "<input type='checkbox' value='" . $data['gejala'] . "' name='gejala[]' /> " . $data['gejala'] . "<br>";
                  }
                  ?>
                </div>
              </div>
              <div class="panel panel-info">
                <div class="panel-heading">GEJALA DAUN</div>
                <div class="panel-body">
                  <?php
                  $query = mysqli_query($konek_db, 'SELECT * FROM gejala WHERE daerah="daun"');
                  while ($data = mysqli_fetch_array($query)) {
                    echo "<input type='checkbox' value='" . $data['gejala'] . "' name='gejala[]' /> " . $data['gejala'] . "<br>";
                  }
                  ?>
                </div>
              </div>
              <div class="panel panel-info">
                <div class="panel-heading">GEJALA POLONG</div>
                <div class="panel-body">
                  <?php
                  $query = mysqli_query($konek_db, 'SELECT * FROM gejala WHERE daerah="polong"');
                  while ($data = mysqli_fetch_array($query)) {
                    echo "<input type='checkbox' value='" . $data['gejala'] . "' name='gejala[]' /> " . $data['gejala'] . "<br>";
                  }
                  ?>
                </div>
              </div>
              <div class="panel panel-info">
                <div class="panel-heading">GEJALA BIJI</div>
                <div class="panel-body">
                  <?php
                  $query = mysqli_query($konek_db, 'SELECT * FROM gejala WHERE daerah="biji"');
                  while ($data = mysqli_fetch_array($query)) {
                    echo "<input type='checkbox' value='" . $data['gejala'] . "' name='gejala[]' /> " . $data['gejala'] . "<br>";
                  }
                  ?>
                </div>
              </div>
              <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
              <?php
              if (isset($_POST['submit'])) {
                if(!isset($_POST['penyakit'])){
                  echo " Centang Kedelai! Kemudian Tentukan Penyakit dan Gejala Terlebih Dahulu! ";
                }
                if(isset($_POST['penyakit'])) {
                  $penyakit = $_POST['penyakit'];
                  $gejala = $_POST['gejala'];
                  $jumlah_dipilih = count($gejala);
                  for ($x = 0; $x < $jumlah_dipilih; $x++) {
                    $hasil = mysqli_query($konek_db, "INSERT INTO basispengetahuan (namapenyakit, gejala) values('$penyakit','$gejala[$x]')");
                    if ($hasil) {
                      echo '<script language="javascript">';
                      echo 'alert("Data Berhasil disimpan")';
                      echo '</script>';
                  }
                }
              }
            }
              ?>
            </form>
            <br>
            <br>
          </form>
        </div>
      </div>
    </div>
    <?php include "../footer.php"; ?>
  </body>
</html>