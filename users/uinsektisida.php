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
    <title>Pakar Kedelai | Data Insektisida</title>
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
            <div class="panel-heading">DATA INSEKTISIDA</div>
            <div class="panel-body">
              <div class="box-body table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>NO</th>
                      <th>ID Insektisida</th>
                      <th>Hama Sasaran</th>
                      <th>Nama Insektisida</th>
                      <th>Bahan Aktif</th>
                    </tr>
                  </thead>
                  <?php
                  $query = mysqli_query($konek_db, 'SELECT * FROM insektisida');
                  $no = 1;
                  while ($data = mysqli_fetch_array($query)) {
                    ?>
                    <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $data['idinsektisida'] ?></td>
                      <td><?php echo $data['hamasasaran'] ?></td>
                      <td><?php echo $data['namainsektisida'] ?></td>
                      <td><?php echo $data['bahanaktif'] ?></td>
                    </tr>
                    <?php } ?>
                </table><br><br><br><br><br>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php include "../footer.php"; ?>
  </body>
</html>