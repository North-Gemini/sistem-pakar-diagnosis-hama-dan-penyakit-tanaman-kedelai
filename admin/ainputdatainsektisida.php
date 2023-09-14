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
    <title>Pakar Kedelai | Input Insektisida</title>
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
            <div class="panel-heading">TAMBAH DATA INSEKTISIDA</div>
            <div class="panel-body">
              <?php
              $query = mysqli_query($konek_db, "SELECT max(idinsektisida) as kodeTerbesar FROM insektisida");
              $data = mysqli_fetch_array($query);
              $noinsektisida = $data['kodeTerbesar'];
              $urutan = (int) substr($noinsektisida, 3, 3);
              $urutan++; 
              $huruf = "IN";
              $noinsektisida = $huruf . sprintf("%03s", $urutan);
              ?>
              <form class="form-horizontal" data-toggle="validator" role="form" method="post" action="ainputdatainsektisida.php">
                <div class="form-group has-feedback">
                  <label class="control-label col-sm-2" for="id">ID Insektisida</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" required name="idinsektisida" readonly value="<?php echo $noinsektisida ?>" data-error="Isi kolom dengan benar">
                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    <div class="help-block with-errors" role="alert"></div>
                  </div>
                </div>
                <div class="form-group has-feedback">
                  <label class="control-label col-sm-2" for="nama">Hama Sasaran</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" required name="hamasasaran" data-error="Isi kolom dengan benar">
                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    <div class="help-block with-errors" role="alert"></div>
                  </div>
                </div>
                <div class="form-group has-feedback">
                  <label class="control-label col-sm-2" for="nama">Nama Insektisida</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" required name="namainsektisida" data-error="Isi kolom dengan benar">
                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    <div class="help-block with-errors" role="alert"></div>
                  </div>
                </div>
                <div class="form-group has-feedback">
                  <label class="control-label col-sm-2" for="nama">Bahan Aktif</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" required name="bahanaktif" data-error="Isi kolom dengan benar">
                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    <div class="help-block with-errors" role="alert"></div>
                  </div>
                </div>
              </div>
              <div class="panel-footer"><button type="submit" name="submit" class="btn btn-primary">Simpan</button></div>
            </div>
            <?php
            if (isset($_POST['submit'])) {
              $idinsektisida = $_POST['idinsektisida'];
              $hamasasaran = $_POST['hamasasaran'];
              $namainsektisida = $_POST['namainsektisida'];
              $bahanaktif = $_POST['bahanaktif'];
              $query = "INSERT INTO insektisida SET idinsektisida='$idinsektisida',hamasasaran='$hamasasaran',namainsektisida='$namainsektisida',bahanaktif='$bahanaktif'";
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