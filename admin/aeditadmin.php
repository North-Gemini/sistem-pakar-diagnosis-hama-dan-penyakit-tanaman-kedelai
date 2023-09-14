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
    <title>Pakar Kedelai | Edit Admin</title>
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
            <div class="panel-heading"></div>
            <div class="panel-body">
              <form method="post">
              <div class="form-group">
                <label class="control-label col-sm-2">ID</label>
                <div class="col-sm-10">
                  <?php
                  $tampil = "SELECT * FROM user where iduser='" . $_GET['id'] . "'";
                  $sql = mysqli_query($konek_db, $tampil);
                  while ($data = mysqli_fetch_array($sql)) {
                    echo "<input type='text' name='iduser' class='form-control' id='iduser' disabled value='" . $data['iduser'] . "'><br>";
                  }
                  ?>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2">USERNAME</label>
                <div class="col-sm-10">
                  <?php
                  $tampil = "SELECT * FROM user where iduser='" . $_GET['id'] . "'";
                  $sql = mysqli_query($konek_db, $tampil);
                  while ($data = mysqli_fetch_array($sql)) {
                    echo "<input type='text'  class='form-control' id='username' name='username' value='" . $data['username'] . "'><br>";
                  }
                  ?>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2">PASSWORD</label>
                <div class="col-sm-10">
                  <?php
                  $tampil = "SELECT * FROM user where iduser='" . $_GET['id'] . "'";
                  $sql = mysqli_query($konek_db, $tampil);
                  while ($data = mysqli_fetch_array($sql)) {
                    echo "<input type='text'  class='form-control' id='password' name='password' value='" . $data['password'] . "'><br>";
                  }
                  ?>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2">NAMA</label>
                <div class="col-sm-10">
                  <?php
                  $tampil = "SELECT * FROM user where iduser='" . $_GET['id'] . "'";
                  $sql = mysqli_query($konek_db, $tampil);
                  while ($data = mysqli_fetch_array($sql)) {
                    echo "<input type='text'  class='form-control' id='nama' name='nama' value='" . $data['nama'] . "'><br>";
                  }
                  ?>
                </div>
              </div>
            </div>
            <div class="panel-footer"><button type="submit" name="submit" class="btn btn-primary">Simpan</button></div>
          </div>
            <?php
            if (isset($_POST['submit'])) {
              $id = $_GET['id'];
              $username = $_POST['username'];
              $password = $_POST['password'];
              $nama = $_POST['nama'];
              $query = "update user SET username='" . $_POST['username'] . "', password='" . $_POST['password'] . "', nama='" . $_POST['nama'] . "' WHERE iduser='$id'";
              mysqli_query($konek_db, $query);
              header("location:kelolaadmin.php");
            }
            ?>
          </form>
        </div>
      </div>
    </div>
    <?php include "../footer.php"; ?>
  </body>
</html>