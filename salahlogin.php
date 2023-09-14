<?php
include('config/koneksi.php');

if (isset($_SESSION['login_user'])) {
  header("location: about.php");
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Pakar Kedelai | Salah Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/custom.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
  </head>

  <body>
    <nav class="navbar navbar-inverse">
      <?php include "navbar.php"; ?>
    </nav>
    <div class="container-fluid text-center">
      <div class="row content">
        <div class="col-sm-12 text-left">
          <div class="alert alert-danger alert-dismissible" id="alert">
            <a href="index.php" class="close">&times;</a>
            USERNAME ATAU PASSWORD SALAH, SILAHKAN LOGIN LAGI
          </div>
          <div class="panel panel-info">
            <div class="panel-heading">KACANG KEDELAI</div>
            <div class="panel-body">
              <p align=justify>Kacang kedelai (Glycine MAX L) merupakan salah satu komoditas hortikultura yang telah banyak dikenal oleh semua golongan masyarakat, didukung daya beli masyarakat serta
                harga jual yang cukup tinggi, kacang kedelai dapat dijadikan komoditi yang menjanjikan. Pengolahan kacang kedelai dapat dilakukan dengan 
                berbagai macam cara dan menghasilkan produk-produk yang umum dijumpai di pasaran seperti tepung kedelai, susu kedelai, tahu, tempe, bungkil kedelai, 
                minyak kedelai, dan protein nabati bertekstur. Namun, Produksi kedelai Indonesia diperkirakan kembali turun 3,05% menjadi 594,6 ribu ton pada 2022. 
                Setahun setelahnya, produksi kedelai bakal berkurang 3,09% menjadi 576,3 ribu ton. Sementara, kedelai yang berasal dari Indonesia turun 3,12% 
                menjadi 558,3 ribu ton pada 2024. Kemungkinan terbesar hal ini disebabkan oleh beberapa faktor, antara lain yang paling bermasalah adalah faktor 
                hama dan penyakit. Masalahnya sering ditemui bahwa petani yang minim akan pengetahuaan mengenai penyakit yang menyerang tanaman mereka, ditambah 
                lagi keterbatasan seorang ahli kadang-kadang menjadi kendala bagi petani yang akan melakukan konsultasi untuk menyelesaikan masalah dan mendapatkan 
                solusi terbaik. Diharapkan sistem pakar simulasi diagnosa hama dan penyakit tanaman kacang kedelai dapat membantu petani dalam memberikan pengetahuan yang cukup.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header" style="padding:35px 50px;">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
          </div>
          <div class="modal-body" style="padding:40px 50px;">
            <form role="form" method="post" action="ceklogin.php">
              <div class="form-group" method="post">
                <label for="username"><span class="glyphicon glyphicon-user"></span> Username</label>
                <input type="text" class="form-control" name="username" id="password" placeholder="Enter username">
              </div>
              <div class="form-group" method="post">
                <label for="password"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Enter password">
              </div>
              <button type="submit" id="submit" nama="submit" class="btn btn-primary btn-block" method="post"><span
                  class="glyphicon glyphicon-off"></span> Login</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <?php include "footer.php"; ?>
    <script>
      $(document).ready(function () {
        $("#myBtn").click(function () {
          $("#myModal").modal();
        });
      });
    </script>
  </body>
</html>