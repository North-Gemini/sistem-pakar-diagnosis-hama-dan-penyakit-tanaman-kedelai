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
    <title>Pakar Kedelai | Kelola Admin</title>
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
          <a href="ainputadmin.php"><button type="button" class="btn btn-default"><span class="glyphicon glyphicon-plus" aria-hidden="true"> Tambah</span></button></a>
          <br><br>
          <div class="panel panel-info">
            <div class="panel-heading">DATA ADMIN</div>
            <div class="panel-body">
              <div class="box-body table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>NO</th>
                      <th>ID</th>
                      <th>Username</th>
                      <th>Password</th>
                      <th>Nama</th>
                      <th>Kelola</th>
                    </tr>
                  </thead>
                  <?php
                  $query = mysqli_query($konek_db, 'SELECT * FROM user');
                  $no = 1;
                      while ($data = mysqli_fetch_array($query)) {
                      ?>
                        <tr>
                          <td><?php echo $no++ ?></td>
                          <td><?php echo $data['iduser'] ?></td>
                          <td><?php echo $data['username'] ?></td>
                          <td><?php echo $data['password'] ?></td>
                          <td><?php echo $data['nama'] ?></td>
                          <td><a href="aeditadmin.php?id=<?php echo $data['iduser']; ?>"><i class='glyphicon glyphicon-pencil'></i></a> || <a href="adeleteadmin.php?id=<?php echo $data['iduser']; ?>" onclick='return checkDelete()'><i class='glyphicon glyphicon-trash'></i></a> </td>
                        </tr>
                        <?php } ?>
                </table><br><br><br><br><br>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script language="JavaScript" type="text/javascript">
      function checkDelete() {
        return confirm('Yakin menghapus data ini?');
      }
    </script>
    <?php include "../footer.php"; ?>
  </body>
</html>