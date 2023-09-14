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
    <title>Pakar Kedelai | Input Admin</title>
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
            <div class="panel-heading">TAMBAH ADMIN</div>
            <div class="panel-body">
              <?php
              $query = mysqli_query($konek_db, "SELECT max(iduser) as kodeTerbesar FROM user");
              $data = mysqli_fetch_array($query);
              $noadmin = $data['kodeTerbesar'];
              $urutan = (int) substr($noadmin, 3, 3);
              $urutan++; 
              $huruf = "ADM";
              $noadmin = $huruf . sprintf("%03s", $urutan);
              ?>
              <form class="form-horizontal" data-toggle="validator" role="form" method="post" action="ainputadmin.php">
                <div class="form-group has-feedback">
                  <label class="control-label col-sm-2" for="nama">ID Admin</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" required name="iduser" readonly value="<?php echo $noadmin ?>" data-error="Isi kolom dengan benar">
                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    <div class="help-block with-errors" role="alert"></div>
                  </div>
                </div>
                <div class="form-group has-feedback">
                  <label class="control-label col-sm-2" for="nama">Username</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" required name="username" data-error="Isi kolom dengan benar">
                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    <div class="help-block with-errors" role="alert"></div>
                  </div>
                </div>
                <div class="form-group has-feedback">
                  <label class="control-label col-sm-2" for="nama">Password</label>
                  <div class="col-sm-10">
                    <input type="password" class="form-control" required name="password" data-error="Isi kolom dengan benar">
                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    <div class="help-block with-errors" role="alert"></div>
                  </div>
                </div>
                <div class="form-group has-feedback">
                  <label class="control-label col-sm-2" for="nama">Nama</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" required name="nama" data-error="Isi kolom dengan benar">
                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    <div class="help-block with-errors" role="alert"></div>
                  </div>
                </div>
            </div>
            <div class="panel-footer"><button type="submit" name="submit" class="btn btn-primary">Simpan</button></div>
          </div>
            <?php
            if (isset($_POST['submit'])) {
              $iduser = $_POST['iduser'];
              $username = $_POST['username'];
              $password = $_POST['password'];
              $nama = $_POST['nama'];
              $query = "INSERT INTO user SET iduser='$iduser',username='$username',password='$password',nama='$nama'";
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