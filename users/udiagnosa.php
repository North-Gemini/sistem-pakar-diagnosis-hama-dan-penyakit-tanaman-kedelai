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
    <title>Pakar Kedelai | Diagnosa Hama dan Penyakit</title>
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
          <br>
          <form id="form1" name="form1" method="post" action="udiagnosa.php">
          <button type="submit" name="submit1" class="btn btn-primary" onChange='this.form.submit();'>TENTUKAN GEJALA</button><br>
          </form>
          <br>
          <form id="form2" name="form2" method="post" action="udiagnosa.php">
            <?php 
            if (isset($_POST['submit1'])){
                echo "<div class='panel panel-info'>
                          <div class='panel-heading'>AKAR</div>
                    </div>";
                $query = mysqli_query($konek_db, 'SELECT * FROM gejala WHERE daerah="akar"');
                while ($data = mysqli_fetch_array($query)) {
                  echo "<div style = color:white;><input type='checkbox' value='" . $data['gejala'] . "' name='gejala[]' /> " . $data['gejala'] . "</div>";
                }
                echo '<br>';
              }
            ?>
            <?php
            if (isset($_POST['submit1'])){
                echo "<div class='panel panel-info'>
                          <div class='panel-heading'>BATANG</div>
                    </div>";
                $query = mysqli_query($konek_db, 'SELECT * FROM gejala WHERE daerah="batang"');
                while ($data = mysqli_fetch_array($query)) {
                  echo "<div style = color:white;><input type='checkbox' value='" . $data['gejala'] . "' name='gejala[]' /> " . $data['gejala'] . "</div>";
                }
                echo '<br>';
              }
            ?>
            <?php 
            if (isset($_POST['submit1'])){
                echo "<div class='panel panel-info'>
                          <div class='panel-heading'>DAUN</div>
                    </div>";
                $query = mysqli_query($konek_db, 'SELECT * FROM gejala WHERE daerah="daun"');
                while ($data = mysqli_fetch_array($query)) {
                  echo "<div style = color:white;><input type='checkbox' value='" . $data['gejala'] . "' name='gejala[]' /> " . $data['gejala'] . "</div>";
                }
                echo '<br>';
              }
            ?>
            <?php 
            if (isset($_POST['submit1'])){
                echo "<div class='panel panel-info'>
                          <div class='panel-heading'>POLONG</div>
                    </div>";
                $query = mysqli_query($konek_db, 'SELECT * FROM gejala WHERE daerah="polong"');
                while ($data = mysqli_fetch_array($query)) {
                  echo "<div style = color:white;><input type='checkbox' value='" . $data['gejala'] . "' name='gejala[]' /> " . $data['gejala'] . "</div>";
                }
                echo '<br>';
              }
            ?>
            <?php 
            if (isset($_POST['submit1'])){
                echo "<div class='panel panel-info'>
                          <div class='panel-heading'>BIJI</div>
                    </div>";
                $query = mysqli_query($konek_db, 'SELECT * FROM gejala WHERE daerah="biji"');
                while ($data = mysqli_fetch_array($query)) {
                  echo "<div style = color:white;><input type='checkbox' value='" . $data['gejala'] . "' name='gejala[]' /> " . $data['gejala'] . "</div>";
                }
                echo '<br>';
              }
            ?>
            <br>
            <button type="submit" name="submit" onclick="return checkDiagnosa()" class="btn btn-primary">CEK PENYAKIT</button><br><br>
            <div class="panel panel-info">
              <div class="panel-heading">HASIL DIAGNOSA</div>
              <div class="panel-body">
                <div class="box-body table-responsive">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>NO</th>
                        <th>ID Hama/Penyakit</th>
                        <th>Nama Hama/Penyakit</th>
                        <th>Jenis Tanaman</th>
                        <th>Terjangkit</th>
                        <th>Detail</th>
                      </tr>
                    </thead>
                    <?php
                    if (isset($_POST['submit'])) {
                      if(!isset($_POST['gejala'])){
                        echo " Pilih Gejala Terlebih Dahulu! ";
                      }
                      if(isset($_POST['gejala'])){
                        $gejala = $_POST['gejala'];
                        $jumlah_dipilih = count($gejala);
                        for ($x = 0; $x < $jumlah_dipilih; $x++) {
                          $tampil = "select DISTINCT p.idpenyakit, p.namapenyakit, p.jenistanaman, p.terjangkit from basispengetahuan b, penyakit p where b.gejala='$gejala[$x]' and p.namapenyakit=b.namapenyakit group by namapenyakit";
                          $result = mysqli_query($konek_db, $tampil);
                          $hasil = mysqli_fetch_array($result);
                        }
                        echo "
                              <tr>  
                              <td>" . $x . "</td>
                                    <td>" . $hasil['idpenyakit'] . "</td>
                                    <td>" . $hasil['namapenyakit'] . "</td>  
                                    <td>" . $hasil['jenistanaman'] . "</td> 
                                    <td>" . $hasil['terjangkit'] . "</td> 
                                    <td><a href=\"uhasildiagnosa.php?id=" . $hasil['idpenyakit'] . "\"><i class='glyphicon glyphicon-search'></i></a></td>
                        </tr>      
                                  ";
                        }
                    }
                    ?>
                  </table>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <?php include "../footer.php"; ?>
    <script language="JavaScript" type="text/javascript">
      function checkDiagnosa() {
        return confirm('Apakah sudah benar gejalanya?');
      }
    </script>
  </body>
</html>