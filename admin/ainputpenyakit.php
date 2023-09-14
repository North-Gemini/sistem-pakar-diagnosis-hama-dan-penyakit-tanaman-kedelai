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
    <title>Pakar Kedelai | Input Hama dan Penyakit</title>
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
            <div class="panel-heading">IDENTITAS HAMA/PENYAKIT</div>
            <div class="panel-body">
              <?php
              $query = mysqli_query($konek_db, "SELECT max(idpenyakit) as kodeTerbesar FROM penyakit");
              $data = mysqli_fetch_array($query);
              $nopenyakit = $data['kodeTerbesar'];
              $urutan = (int) substr($nopenyakit, 3, 3);
              $urutan++; 
              $huruf = "PH";
              $nopenyakit = $huruf . sprintf("%03s", $urutan);
              ?>
              <form class="form-horizontal" method="post" data-toggle="validator" role="form" action="ainputpenyakit.php">
                <div class="form-group has-feedback">
                  <label class="control-label col-sm-2" for="nama">ID Hama/Penyakit</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" required name="idpenyakit" readonly value="<?php echo $nopenyakit ?>" data-error="Isi kolom dengan benar">
                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    <div class="help-block with-errors" role="alert"></div>
                  </div>
                </div>

                <div class="form-group has-feedback">
                  <label class="control-label col-sm-2" for="nama">Nama Hama/Penyakit</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" required name="namapenyakit" data-error="Isi kolom dengan benar">
                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    <div class="help-block with-errors" role="alert"></div>
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

                <div class="form-group has-feedback">
                  <label class="control-label col-sm-2" for="alamat">Terjangkit</label>
                  <div class="col-sm-10">
                    <select class="form-control" name="terjangkit" onChange='this.form.submit();'>
                      <option disabled selected value>Terjangkit</option>
                      <option>Hama</option>
                      <option>Penyakit</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="panel panel-info">
              <div class="panel-heading">CARA PENGENDALIAN</div>
              <div class="panel-body">
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="alamat">Kultur Teknis</label>
                    <div class="col-sm-10">
                      <textarea rows='8' class="form-control" name="kulturteknis"></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="alamat">Fisik Mekanis</label>
                    <div class="col-sm-10">
                      <textarea rows='8' class="form-control" name="fisikmekanis"></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="alamat">Hayati</label>
                    <div class="col-sm-10">
                      <textarea rows='8' class="form-control" name="hayati"></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="alamat">Kimiawi</label>
                    <div class="col-sm-10">
                      <textarea rows='8' class="form-control" name="kimiawi"></textarea>
                    </div>
                  </div>
                </div>
                <div class="panel-footer"><button type="submit" name="submit" class="btn btn-primary">Simpan</button><br></div>
             </div>
                  <?php
                  if (isset($_POST['submit'])) {
                    $idpenyakit = $_POST['idpenyakit'];
                    $namapenyakit = $_POST['namapenyakit'];
                    $jenistanaman = $_POST['jenistanaman'];
                    $terjangkit = $_POST['terjangkit'];
                    $kulturteknis = $_POST['kulturteknis'];
                    $fisikmekanis = $_POST['fisikmekanis'];
                    $hayati = $_POST['hayati'];
                    $kimiawi = $_POST['kimiawi'];
                    $query = "INSERT INTO penyakit SET idpenyakit='$idpenyakit',namapenyakit='$namapenyakit',jenistanaman='$jenistanaman',terjangkit='$terjangkit',kulturteknis='$kulturteknis', fisikmekanis='$fisikmekanis',hayati='$hayati',kimiawi='$kimiawi'";
                    $result = mysqli_query($konek_db, $query);
                    if ($result) {
                      echo '<script language="javascript">';
                      echo 'alert("Data Berhasil disimpan")';
                      echo '</script>';
                    }
                  }
                  ?>
                </form><br>
        </div>
      </div>
    </div>
    <?php include "../footer.php"; ?>
  </body>
</html>