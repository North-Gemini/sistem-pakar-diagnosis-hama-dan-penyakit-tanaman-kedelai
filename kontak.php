<?php
include ("config/koneksi.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Pakar Kedelai | Beranda</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/custom.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <script type="text/javascript" src="chartjs/Chart.js"></script>
  </head>
  <body>
    <nav class="navbar navbar-inverse" style="background-color: rgb(32, 32, 32);">
      <?php include "navbar.php"; ?>
    </nav>
    <div class="container-fluid text-left">
      <div class="row content">
        <div class="col-sm-12 text-left">
            <h1 style=>Tentang Kami</h1>
            <p class="par">BSIP (Badan Standarisasi Instrumen Pertanian) merupakan salah satu unit Eselon I pada Kementerian<br>
                            Pertanian Republik Indonesia yang mempunyai tugas menyelenggarakan koordinasi, perumusan,<br>
                            penerapan, dan pemeliharaan, serta harmonisasi standar instrumen pertanian.<br>
                            </p>
            <h1>Hubungi Kami</h1>
            <form class="form-horizontal col-sm-6" method="post" action=" ">
                <div class="panel panel-info">
                    <div class="panel-body">
                        <div class="form-group has-feedback">
                            <!-- <label class="control-label col-sm-2" for="nama">Nama</label> -->
                            <div class="col-sm-12">
                                <input type="text" class="form-control" required name="nama" data-error="Isi kolom dengan benar" placeholder="Nama">
                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                <div class="help-block with-errors" role="alert"></div>
                            </div>
                        </div>
                        <div class="form-group has-feedback">
                            <!-- <label class="control-label col-sm-2" for="nama">Username</label> -->
                            <div class="col-sm-12">
                                <input type="email" class="form-control" required name="email" data-error="Isi kolom dengan benar" placeholder="Alamat email">
                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                <div class="help-block with-errors" role="alert"></div>
                            </div>
                        </div>
                        <div class="form-group has-feedback">
                            <!-- <label class="control-label col-sm-2" for="nama">Password</label> -->
                            <div class="col-sm-12">
                                <input type="text" class="form-control" required name="telepon" data-error="Isi kolom dengan benar" placeholder="Telepon">
                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                <div class="help-block with-errors" role="alert"></div>
                            </div>
                        </div>
                        <div class="form-group">
                          <!-- <label class="control-label col-sm-2" for="alamat">Pesan</label> -->
                          <div class="col-sm-12">
                            <textarea rows='8' class="form-control" name="pesan" placeholder="Pesan"></textarea>
                          </div>
                        </div>
                    </div>
                    <div class="panel-footer"><button type="submit" name="submit" class="btn btn-primary">Kirim</button></div>
                </div>
                <?php
                if(isset($_POST["submit"])){
                  $nama = $_POST["nama"];
                  $email = $_POST["email"];
                  $telepon = $_POST["telepon"];
                  $pesan = $_POST["pesan"];

                  mysqli_query($konek_db, "INSERT INTO kontak VALUES('', '$nama', '$email', '$telepon', '$pesan')");
                  echo "<script>
                          alert('Pesan Terkirim!');
                        </script>";
                }
                ?>
            </form>
        </div>
      </div>
    </div>
    <?php include "footer.php"; ?>
  </body>
</html>