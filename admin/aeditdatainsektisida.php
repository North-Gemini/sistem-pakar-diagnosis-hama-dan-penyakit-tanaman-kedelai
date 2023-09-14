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
    <title>Pakar Kedelai | Edit Insektisida</title>
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
          <form method="post">
            <div class="panel panel-info">
              <div class="panel-heading">EDIT DATA INSEKTISIDA</div>
              <div class="panel-body">
                <div class="form-group">
                  <label class="control-label col-sm-2">ID</label>
                  <div class="col-sm-10">
                    <?php
                    $tampil = "SELECT * FROM insektisida where idinsektisida='" . $_GET['id'] . "'";
                    $sql = mysqli_query($konek_db, $tampil);
                    while ($data = mysqli_fetch_array($sql)) {
                      echo "<input type='text' name='idinsektisida' class='form-control' id='idinsektisida' disabled value='" . $data['idinsektisida'] . "'><br>";
                    }
                    ?>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2">Hama Sasaran</label>
                  <div class="col-sm-10">
                    <?php
                    $tampil = "SELECT * FROM insektisida where idinsektisida='" . $_GET['id'] . "'";
                    $sql = mysqli_query($konek_db, $tampil);
                    while ($data = mysqli_fetch_array($sql)) {
                      echo "<input type='text'  class='form-control' id='hamasasaran' name='hamasasaran' value='" . $data['hamasasaran'] . "'><br>";
                    }
                    ?>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2">Nama Insektisida</label>
                  <div class="col-sm-10">
                    <?php
                    $tampil = "SELECT * FROM insektisida where idinsektisida='" . $_GET['id'] . "'";
                    $sql = mysqli_query($konek_db, $tampil);
                    while ($data = mysqli_fetch_array($sql)) {
                      echo "<input type='text'  class='form-control' id='namainsektisida' name='namainsektisida' value='" . $data['namainsektisida'] . "'><br>";
                    }
                    ?>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2">Bahan Aktif</label>
                  <div class="col-sm-10">
                    <?php
                    $tampil = "SELECT * FROM insektisida where idinsektisida='" . $_GET['id'] . "'";
                    $sql = mysqli_query($konek_db, $tampil);
                    while ($data = mysqli_fetch_array($sql)) {
                      echo "<input type='text'  class='form-control' id='bahanaktif' name='bahanaktif' value='" . $data['bahanaktif'] . "'><br>";
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
              $hamasasaran = $_POST['hamasasaran'];
              $namainsektisida = $_POST['namainsektisida'];
              $bahanaktif = $_POST['bahanaktif'];
              $query = "update insektisida SET hamasasaran='" . $_POST['hamasasaran'] . "', namainsektisida='" . $_POST['namainsektisida'] . "', bahanaktif='" . $_POST['bahanaktif'] . "' WHERE idinsektisida='$id'";
              mysqli_query($konek_db, $query);
            }
            ?>
          </form>
        </div>
      </div>
    </div>
    <?php include "../footer.php"; ?>
  </body>
</html>