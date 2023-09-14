<?php
session_start();
if(isset($_SESSION["loginuser"])){
    header("Location: homeuser.php");
}
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
        <p><marquee onmouseover="this.stop()" onmouseout="this.start()" scrollamount="10">User Masuk - Sistem Pakar Diagnosa Hama dan Penyakit Kedelai</marquee></p>
    </div>
    <div class="container-fluid text-center">
        <div class="row content">
            <img src="../img/litbang.png" height="60px" width="60px">
            <h4 style="font-weight: bold; color: white;">BSIP ANEKA KACANG</h4>
            <div class="col-sm-12 text-left">
                <form class="login form-horizontal" method="post" action=" ">
                    <div class="panel panel-info">
                        <div class="panel-heading">USER LOGIN</div>
                        <div class="panel-body">
                            <div class="form-group has-feedback">
                                <!-- <label class="control-label col-sm-2" for="nama">Username</label> -->
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" required name="username" data-error="Isi kolom dengan benar" placeholder="Masukan Username">
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                    <div class="help-block with-errors" role="alert"></div>
                                </div>
                            </div>
                            <div class="form-group has-feedback">
                                <!-- <label class="control-label col-sm-2" for="nama">Password</label> -->
                                <div class="col-sm-12">
                                    <input type="password" class="form-control" required name="password" data-error="Isi kolom dengan benar" placeholder="Masukan Password">
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                    <div class="help-block with-errors" role="alert"></div>
                                </div>
                            </div>
                            <p><a href="resetpw.php">Lupa Password?</a></p>
                            <button type="submit" name="submit" class="btn btn-primary">Masuk</button><br><br>
                        </div>
                        <div class="panel-footer">
                            <p>Belum Punya Akun? | <a href="registrasi.php">Daftar</a></p>
                        </div>
                    </div>
                    <?php
                    if(isset($_POST["submit"])){
                        $username = $_POST["username"];
                        $password = $_POST["password"];
                        $result = mysqli_query($konek_db, "SELECT * FROM member WHERE username = '$username'");
                        if(mysqli_num_rows($result) === 1){
                            $row = mysqli_fetch_assoc($result);
                            if(password_verify($password, $row["password"])){
                                $_SESSION["loginuser"] = true;
                                header("location:homeuser.php");
                                exit;
                            }
                        }
                        $error = true;
                    }
                    ?>
                    <?php if(isset($error)) 
                    header("location:../salahlogin.php")
                    ?>
                </form>
            </div>
        </div>
    </div>
    <?php include "../footer.php"; ?>
</body>
</html>