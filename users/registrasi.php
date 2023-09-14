<?php
include('../config/koneksi.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pakar Kedelai | Beranda</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/custom.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
  </head>
<body>
    <div class="judul text-center">
        <p><marquee onmouseover="this.stop()" onmouseout="this.start()" scrollamount="10">User Daftar - Sistem Pakar Diagnosa Hama dan Penyakit Kedelai</marquee></p>
    </div>
    <div class="container-fluid text-center">
        <div class="row content">
            <img src="../img/litbang.png" height="60px" width="60px">
            <h4 style="font-weight: bold; color: white;">BSIP ANEKA KACANG</h4>
            <div class="col-sm-12 text-left">
                <form class="login form-horizontal" method="post" action=" ">
                    <div class="panel panel-info">
                        <div class="panel-heading">USER DAFTAR</div>
                        <div class="panel-body">
                            <div class="form-group has-feedback">
                                <!-- <label class="control-label col-sm-2" for="nama">Nama</label> -->
                                <div class="col-sm-12">
                                <input type="text" class="form-control" required name="nama" data-error="Isi kolom dengan benar" placeholder="Isi Nama">
                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                <div class="help-block with-errors" role="alert"></div>
                                </div>
                            </div>
                            <div class="form-group has-feedback">
                                <!-- <label class="control-label col-sm-2" for="nama">Username</label> -->
                                <div class="col-sm-12">
                                <input type="text" class="form-control" required name="username" data-error="Isi kolom dengan benar" placeholder="Isi Username">
                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                <div class="help-block with-errors" role="alert"></div>
                                </div>
                            </div>
                            <div class="form-group has-feedback">
                                <!-- <label class="control-label col-sm-2" for="nama">Password</label> -->
                                <div class="col-sm-12">
                                <input type="password" class="form-control" required name="password" data-error="Isi kolom dengan benar" placeholder="Isi Password">
                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                <div class="help-block with-errors" role="alert"></div>
                                </div>
                            </div>
                            <div class="form-group has-feedback">
                                <!-- <label class="control-label col-sm-2" for="nama">Konfirmasi Password</label> -->
                                <div class="col-sm-12">
                                <input type="password" class="form-control" required name="cpassword" data-error="Isi kolom dengan benar" placeholder="Ulangi Password">
                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                <div class="help-block with-errors" role="alert"></div>
                                </div>
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Daftar</button>
                        </div>
                        <div class="panel-footer">
                            <p>Sudah Punya Akun? | <a href="loginuser.php">Masuk</a></p>
                        </div>
                    </div>
                    <?php
                    if(isset($_POST["submit"])){
                        $nama = $_POST["nama"];
                        $username = strtolower(stripslashes($_POST["username"]));
                        $password = mysqli_real_escape_string($konek_db, $_POST["password"]);
                        $cpassword = mysqli_real_escape_string($konek_db, $_POST["cpassword"]);
                        $result = mysqli_query($konek_db, "SELECT username FROM member WHERE username ='$username'");
                        if(mysqli_fetch_assoc($result)){
                            echo "<script>
                                    alert('Username sudah terdaftar!');
                                  </script>";
                            return false;
                        }
                        if ($password !== $cpassword){
                            echo "<script>
                                    alert('Konfirmasi Password tidak sesuai!');
                                  </script>";
                            return false;
                        }
                        $password = password_hash($password, PASSWORD_DEFAULT);
                        mysqli_query($konek_db, "INSERT INTO member VALUES('', '$nama', '$username', '$password')");
                        echo "<script>
                                alert('Anda berhasil daftar di Sistem Pakar Diagnosa Hama dan Penyakit!');
                              </script>";
                    }
                    ?>
                </form>
            </div>
        </div>
    </div>
    <?php include "../footer.php"; ?>
</body>
</html>