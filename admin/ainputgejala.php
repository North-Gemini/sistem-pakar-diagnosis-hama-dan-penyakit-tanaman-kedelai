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
    <title>Pakar Kedelai | Input Gejala</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/custom.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <script src="js/validator.js"></script>
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
            <div class="panel-heading">TAMBAH GEJALA</div>
            <div class="panel-body">
              <?php
              $query = mysqli_query($konek_db, "SELECT max(idgejala) as kodeTerbesar FROM gejala");
              $data = mysqli_fetch_array($query);
              $nogejala = $data['kodeTerbesar'];
              $urutan = (int) substr($nogejala, 3, 3);
              $urutan++; 
              $huruf = "G";
              $nogejala = $huruf . sprintf("%03s", $urutan);
              ?>
              <form class="form-horizontal" data-toggle="validator" role="form" method="post" action="ainputgejala.php">
                <div class="form-group has-feedback">
                  <label class="control-label col-sm-2" for="nama">ID Gejala:</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" required name="idgejala" value="<?php echo $nogejala ?>" data-error="Isi kolom dengan benar">
                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    <div class="help-block with-errors" role="alert"></div>
                  </div>
                </div>
                <div class="form-group has-feedback">
                  <label class="control-label col-sm-2" for="nama">Gejala:</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" required name="gejala" data-error="Isi kolom dengan benar">
                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    <div class="help-block with-errors" role="alert"></div>
                  </div>
                </div>
                <div class="form-group ">
                  <label class="control-label col-sm-2" for="alamat">Daerah:</label>
                  <div class="col-sm-10">
                    <select class="form-control" name="daerah" onChange='this.form.submit();'>
                      <option disabled selected value>Daerah</option>
                      <option>Akar</option>
                      <option>Batang</option>
                      <option>Daun</option>
                      <option>Polong</option>
                      <option>Biji</option>
                    </select>
                  </div>
                </div>
                <div class="form-group has-feedback">
                  <label class="control-label col-sm-2" for="nama">Jenis Tanaman</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" required name="jenistanaman" readonly value="Kedelai" data-error="Isi kolom dengan benar">
                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    <div class="help-block with-errors" role="alert"></div>
                  </div>
                </div>
              </div>
              <div class="panel-footer"><button type="submit" name="submit" class="btn btn-primary">Simpan</button></div>
            </div>
                <?php
                if (isset($_POST['submit'])) {
                  $idgejala = $_POST['idgejala'];
                  $gejala = $_POST['gejala'];
                  $daerah = $_POST['daerah'];
                  $jenistanaman = $_POST['jenistanaman'];
                  $query = "INSERT INTO gejala SET idgejala='$idgejala',gejala='$gejala',daerah='$daerah',jenistanaman='$jenistanaman'";
                  $result = mysqli_query($konek_db, $query);
                  if ($result) {
                    echo '<script language="javascript">';
                    echo 'alert("Data Berhasil disimpan")';
                    echo '</script>';
                  }
                }
                ?>
              </form>
        </div>
      </div>
    </div>
    <?php include "../footer.php"; ?>
  </body>
</html>