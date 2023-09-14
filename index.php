<?php
include('config/koneksi.php')
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
          <h1>Sistem Pakar <br><span class="spann">Diagnosa Hama dan Penyakit</span> <br>Tanaman Kedelai</h1>
          <p class="par">Sistem pakar adalah suatu program komputer atau sistem informasi yang mengandung
                          beberapa pengetahuan dari satu atau lebih pakar manusia terkait suatu bidang yang cenderung spesifik. Pakar yang dimaksudkan merupakan seseorang yang memiliki
                          keahlian khusus di bidangnya masing-masing, contohnya dokter, psikolog, mekanik, agronom dan lain sebagainya.
                        </p>
                        <button class="cn btn btn-default"><a href="users/registrasi.php">DAFTAR</a></button>
        </div>
        <div class="col-sm-4 text-center">
          <br><br>
          <div class="visit panel panel-info">
            <div class="panel-body">
              <?php
              $datauser = mysqli_query($konek_db, "SELECT * FROM member ");
              $jumlahuser = mysqli_num_rows($datauser);
              ?>
              <p><b>Data User dan Pengunjung</b></p>
              <hr>
              <p>Jumlah User Sistem Pakar : <b><?php echo $jumlahuser; ?></b></p>
              <?php
              session_start();
              if(!isset($_SESSION["kunjung"])){
                  $_SESSION["kunjung"] = session_id();
                  mysqli_query($konek_db, "UPDATE pengunjung SET jumlahpengunjung = jumlahpengunjung + 1");
              }
              $data = mysqli_query($konek_db, "SELECT * FROM pengunjung");
              $tampil = mysqli_fetch_array($data);
              ?>
              <p>Jumlah Pengunjung Sistem Pakar : <b><?php echo $tampil[0]; ?></b></p>

              <!-- grafik -->
              <div style="width: 100%; height: 100%; margin: 0px auto;">
                <canvas id="myChart"></canvas>
              </div>
              <br/>
              <br/>
              <script>
                var ctx = document.getElementById("myChart").getContext('2d');
                var myChart = new Chart(ctx, {
                  type: 'bar',
                  data: {
                    labels: ["User", "Pengunjung"],
                    datasets: [{
                      label: '',
                      data: [
                      <?php 
                      $jumlahmember = mysqli_query($konek_db,"select * from member where namamember=namamember");
                      echo mysqli_num_rows($jumlahmember);
                      ?>, 
                      <?php 
                      $jumlahpengunjung = mysqli_query($konek_db,"select * from pengunjung");
                      $gpengunjung = mysqli_fetch_array($jumlahpengunjung);
                      echo $gpengunjung[0];
                      ?>
                      ],
                      backgroundColor: [
                      'rgba(255, 99, 132, 0.2)',
                      'rgba(54, 162, 235, 0.2)',
                      'rgba(255, 206, 86, 0.2)',
                      'rgba(75, 192, 192, 0.2)'
                      ],
                      borderColor: [
                      'rgba(255,99,132,1)',
                      'rgba(54, 162, 235, 1)',
                      'rgba(255, 206, 86, 1)',
                      'rgba(75, 192, 192, 1)'
                      ],
                      borderWidth: 1
                    }]
                  },
                  options: {
                    scales: {
                      yAxes: [{
                        ticks: {
                          beginAtZero:true
                        }
                      }]
                    }
                  }
                });
              </script>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php include "footer.php"; ?>
  </body>
</html>